<?php
function onLoad()
{
    //on page Load
    //check whether the below has value assigned to it
    if (isset($_GET["cityName"])) {
        //execute function
        //assign new value to a variable
        //the function below gets the global variable in its own declaration
        //hence no need to grab the global inside of the higher scoped function in here
        setCityName($_GET["cityName"]);
    }
}

function getRegex($regex)
{
    // this should be a key => value array
    // as running the function every time is more tasking then just accessing an array's element
    $regexScraped = "/(<tr[A-Za-z\s.=\"]*((class=)\"(b-forecast__table-description b-forecast__hide-for-small days-summaries js-day-summary)\"[A-Za-z\s.=\"]*)>)+(.*?)(<\/tr>)/";
    $regexTitles = "/((<div[A-Za-z\s.=\"]*((class=)\"(b-forecast__table-description-title)\"[A-Za-z\s.=\"]*)>)+(.*?)(<\/div>))/";
    $regexContent = "/((<p[A-Za-z\s.=\"]*((class=)\"(b-forecast__table-description-content)\"[A-Za-z\s.=\"]*)>)+(.*?)(<\/p>))/";
    $regexSpan = "/(<\/*span+(.*?)>)/";
    $regexSpanElement = "/(<span+(.*?)>)(.)*?(<\/span>)/";
    $regexSubTitle = "/([(]+[0-9]+(–)*[0-9]*(.)*?[)]+)/";
    $regexMyTitles = "/(<h2>)+(.)*?(<\/h2>)+/";
    $regexSpanInHeading = "/(<h2>)+(.?(?!(<\/h2)))*?(<span>)+(.)*?(<\/span>)+(<\/h2>)+/";

    if ($regex == "regexScraped") {
        return $regexScraped;
    }
    if ($regex == "regexTitle") {
        return $regexTitles;
    }
    if ($regex == "regexContent") {
        return $regexContent;
    }
    if ($regex == "regexSpan") {
        return $regexSpan;
    }
    if ($regex == "regexSpanElement") {
        return $regexSpanElement;
    }
    if ($regex == "regexSpanInHeading") {
        return $regexSpanInHeading;
    }
    if ($regex == "regexMyTitles") {
        return $regexMyTitles;
    }
    if ($regex == "regexSubTitle") {
        return $regexSubTitle;
    }
}

function getCityName()
{
    //function to grab the global variable and pass it
    global $cityName;
    return $cityName;
}

function setCityName($value)
{
    //function to change global variable's value
    global $cityName;

    //convert polish diacritics and explicit special characters to ASCII
    function normalize($value)
    {
        $array = [
            "Ą" => "A",
            "Ć" => "C",
            "Ę" => "E",
            "Ł" => "L",
            "Ń" => "N",
            "Ó" => "O",
            "Ś" => "S",
            "Ź" => "Z",
            "Ż" => "Z",
            "ą" => "a",
            "ć" => "c",
            "ę" => "e",
            "ł" => "l",
            "ń" => "n",
            "ó" => "o",
            "ś" => "s",
            "ź" => "z",
            "ż" => "z",
            " " => "-",
            "." => "",
        ];

        return strtr($value, $array);
    }
    $cityName = ucfirst(normalize($value));
    //

    $exceptionRegex = "/([Gg]{1}orzow-[Ww]{1}ielkopolski)/";

    if (preg_match($exceptionRegex, $cityName)) {
        $cityName = $cityName . "-1";
    }
}

function getWeather($location)
{
    $getFrom = "https://www.weather-forecast.com/locations/" . $location . "/forecasts/latest";

    $scrapedContent = file_get_contents($getFrom);
    //

    // extract wanted bits from scraped HTML
    $getResult = preg_match(getRegex("regexScraped"), $scrapedContent, $elementArray);

    // save extracted array in a variable
    $result = $elementArray[0];
    //

    // any HTML content
    if ($result) {

        function getTitles($getFrom)
        {
            function pregTitles($getFrom)
            {
                preg_match_all(getRegex("regexTitle"), $getFrom, $titlesArray);

                $titlesArray[0] = str_replace("class=\"b-forecast__table-description-title\"", "class=\"scraped__title\"", $titlesArray[0]);

                function makeSpan($makeFrom)
                {
                    for ($i = 0; $i < sizeof($makeFrom[0]); $i++) {
                        preg_match(getRegex("regexSubTitle"), $makeFrom[0][$i], $subTitle);

                        $makeFrom[0][$i] = preg_replace(getRegex("regexSubTitle"), "<span>" . $subTitle[0] . "</span>", $makeFrom[0][$i]);
                    }
                    return $makeFrom;
                    //
                }
                $titlesArray = makeSpan($titlesArray);
                //

                function correctHTML($toBeCorrected)
                {
                    for ($i = 0; $i < sizeof($toBeCorrected[0]); $i++) {

                        if (preg_match(getRegex("regexSpanInHeading"), $toBeCorrected[0][$i])) {
                            preg_match(getRegex("regexSpanElement"), $toBeCorrected[0][$i], $subTitle);
                            //

                            $toBeCorrected[0][$i] = preg_replace(getRegex("regexSpanElement"), " For The Week", $toBeCorrected[0][$i]);

                            preg_match(getRegex("regexMyTitles"), $toBeCorrected[0][$i], $title);
                            //

                            $toBeCorrected[0][$i] = preg_replace(getRegex("regexMyTitles"), $title[0] . $subTitle[0], $toBeCorrected[0][$i]);
                        }
                    }
                    return $toBeCorrected[0];
                }
                $titlesArray = correctHTML($titlesArray);

                return $titlesArray;
            }
            $titlesArray = pregTitles($getFrom);
            //

            function takeSpanOnly($titlesArray)
            {
                for ($i = 0; $i <= sizeof($titlesArray); $i++) {
                    preg_match(getRegex("regexSpanElement"), $titlesArray[$i], $subTitlesArray[$i]);
                }
                return $subTitlesArray;
            }
            $titlesArray = takeSpanOnly($titlesArray);
            //

            return $titlesArray;
            //
        }
        $titlesArray = getTitles($result);
        //

        function getContent($getFrom)
        {
            function pregContent($getFrom)
            {
                preg_match_all(getRegex("regexContent"), $getFrom, $contentArray);

                $contentArray[0] = str_replace("class=\"b-forecast__table-description-content\"",
                    "class=\"scraped__content\"", $contentArray[0]);

                $contentArray[0] = preg_replace(getRegex("regexSpan"), "", $contentArray[0]);

                return $contentArray[0];
                //
            }
            $contentArray = pregContent($getFrom);
            //

            return $contentArray;
            //
        }
        $contentArray = getContent($result);
        //

        function makeHTML($titles, $content)
        {
            // create HTML structure to work with jQueryUI's tabs widget
            // api docs: https://api.jqueryui.com/tabs/
            function makeTabTitles($titles)
            {
                $string = "<ul>";

                for ($i = 0; $i < sizeof($titles) - 1; $i++) {
                    $scrapedTitles[$i] = "<li><a href=\"#tab-{$i}\">" . $titles[$i][0] . "</a></li>";
                    $string .= $scrapedTitles[$i];
                }
                $string .= "</ul>";
                return $string;
                //

            }
            $tabTitles = makeTabTitles($titles);
            //

            function makeTabContent($content)
            {
                $string = "";

                for ($i = 0; $i < sizeof($content); $i++) {
                    $string .= "<div id=\"tab-{$i}\">" . $content[$i] . "</div>";
                }

                return $string;
            }
            $tabContent = makeTabContent($content);
            //

            function makeContainer($tabTitles, $tabContent)
            {
                $string = "<div id=\"tabs\">";

                $string .= $tabTitles;

                $string .= $tabContent;

                for ($i = 0; $i < sizeof($tabTitles); $i++) {
                    if ($i == sizeof($tabTitles) - 1) {
                        $string .= "</div>";
                    }
                }
                return $string;
                //

            }
            $string = makeContainer($tabTitles, $tabContent);
            //

            return $string;
            //
        }
        $string = makeHTML($titlesArray, $contentArray);
        //
        return $string;

    } else {
        // no HTML ontent, despite sending a request
        if ($location) {
            function reportError()
            {
                return "<div class=\"alert-danger\"><p class=\"error__message\">Please, make sure the phrase you typed in is a name of an existing city!</p></div>";
            }
            //
            return reportError();

        }
    }
    //
}

function showWeather()
{

    echo getWeather(getCityName());
}

function showPost()
{
    if ($_GET["cityName"] != "") {
        echo $_GET["cityName"];
    } else {
        echo "eg. Tokyo, San Francisco";
    }
}

onLoad();