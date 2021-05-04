function onLoad() {
  // remove height on ".weatherIcons" when no tabs widget is present to center input field
  function checkForTabs() {
    if (!$("#tabs").length) {
      $(".weatherIcons").addClass("collapsed");
    } else {
      $(".weatherIcons").removeClass("collapsed");
    }
  }
  // initialise jQueryUI's tabs widget
  function tabConstructor() {
    var icon = {
      //
      ".icon-umbrella" : /(rain|drizzle)+/gi,
      ".icon-hailstorm" : /(hailstorm)/gi,
      ".icon-snow" : /(snow)+/gi,
      ".icon-storm" : /(storm)+/gi,
      ".icon-rain" : /(rain|drizzle)+/gi,
      ".icon-wind" : /((winds increasing)|(strong winds))/gi,
      ".icon-clouds" : /(clouds)+/gi,
      ".icon-freeze" : /(freeze)+/gi,
      ".icon-sun" : /(dry)+/gi,
      //
    }

    var lookForInString = {
      //
      rain : "/(rain)+/",
      //
    }

    $("#tabs").tabs({
      //
      create: function(event, ui) {
        //
        var string = ui.panel.children().html();
        console.log("ONCREATE: " + string);
        //
        for (var key in icon) {
          //
          if (string.match(icon[key])) {
            $(key).addClass("icon--shown");
            $(key).removeClass("icon--hidden");
          }
          //
        }
        //
      },
      //
      activate: function(event, ui) {
        //
        string = ui.newPanel.children().html();
        console.log("ONACTIVATE: " + string);
        //
        for (var key in icon) {
          $(key).removeClass("icon--shown");
          $(key).addClass("icon--hidden");
          //
          if (string.match(icon[key])) {
            $(key).addClass("icon--shown");
            $(key).removeClass("icon--hidden");
          }
          //
        }
        //
      }
      //
    });
    $("#tabs").on("tabscreate", function(event, ui) {
      console.log(ui.panel);
    })
  }
  //
  //
  //
  $("body").removeClass("onload");
  //
  //
  //
  function autoFocus() {
    $("#cityName").on("blur", function(event) {
      $(this).val("");
    });
    $(window).on("keydown", function (event) {
      console.log(event.keyCode);
      // 67 c
      // 27 esc
      // 18 lAlt
      // 17 lCtrl
      // 16 shift
      // 9 tab

      // 38 aUP
      // 39 aRIGHT
      // 40 aDOWN
      // 37 aLEFT
      var ctrlDown = event.ctrlKey || event.metaKey;

      if (!ctrlDown && event.keyCode != 40 && event.keyCode != 39 && event.keyCode != 38 && event.keyCode != 37 && event.keyCode != 27 && event.keyCode != 18 && event.keyCode != 17 && event.keyCode != 17 & 67 && event.keyCode != 16 && event.keyCode != 9)  {
          $("#cityName").focus();
      }
      //
      if (event.keyCode == 27) {
        $("#cityName").blur();
        //
      };
      //
    });
    //
  }

  function updateShareLink() {
    let href = window.location.href;

    let displayedIn = $("#linkModal .modal-body textarea");

    displayedIn.html(href);
    //
    function copyBtn() {
      let handlerElement = $("#linkModal .mk-modal__btn");

      ttp = document.getElementById("ttp");

      let copyFromHere = $("#linkModal .modal-body textarea");
      //
      tooltip = new bootstrap.Tooltip(ttp, {
        title: "Copied!",
        trigger: "manual",
        placement: "top",
        container: ".mk-modal__btn"
      })

      handlerElement.on("click", function(event) {
        copyFromHere.focus();
        copyFromHere.select();
        document.execCommand("copy");
        copyFromHere.blur();

        if (copyFromHere.html() == href) {
          tooltip.show();
        }
        //
      })
    }

    copyBtn();
  }

  autoFocus();
  tabConstructor();
  checkForTabs();
  updateShareLink();
}


$(document).ready(function () {
  onLoad();
});

