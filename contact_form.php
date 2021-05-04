<html>

<head>
  <?php
$title = "Contact form";
$heading = "<h1 class=\"title\">$title</h1>";

print_r($_POST);

echo $error;

$error = "";

if ($_POST) {

    if (!$_POST["email"]) {
        $error .= "No email adress!";
    } else {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "Invalid email adress!";
        }
    }

    if (!$_POST["subject"]) {
        $error .= "No subject!";
    }

    if (!$_POST["message"]) {
        $error .= "No message!";
    }

    if ($error != "") {
        $error = "<div class=\"alert alert-danger\" role=\"alert\">" . $error . "</div>";
    } else {
        $emmailTo = "target@domain.com";
        $subject = $_POST["subject"];
        $content = $_POST["message"];
        $headers = "from: " . $_POST["email"];
        if (mail($emailTo, $subject, $content, $headers)) {
            $successMessage = "<div class=\"alert alert-success\" role=\"alert\">" . "Email was sent successfully!" . "</div>";
        } else {
            $error = "<div class=\"alert alert-danger\" role=\"alert\">" . "Couldn't send the mail!" . "</div>";
        }
    }
}

?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/form.js"></script>
  <script src="js/index.js"></script>


</head>

<body>
  <div class="container">

    <div class="row">

      <div class="col-md"></div>

      <div class="col-md">
        <h1 class="mb-3">Contact form</h1>
        <?php echo $error . $successMessage; ?>
        <div class="alert alert-danger alert__email--danger hidden" role="alert">
          Please enter a correct email adress.
        </div>
        <div class="alert alert-danger alert__subject--danger hidden" role="alert">
          Please type in the subject of the message.
        </div>
        <div class="alert alert-danger alert__message--danger hidden" role="alert">
          Please type in your message.
        </div>
        <form class="formPHP" method="post">
          <div class="mb-3">
            <label for="Sender" class="form-label">Email address: </label>
            <input name="email" type="email" class="form-control" id="Sender" aria-describedby="senderHelp"
              placeholder="example@domain.com" required>
            <div id="senderHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="Subject" class="form-label">Subject: </label>
            <input name="subject" type="text" class="form-control" id="Subject" placeholder="Important issue" required>
          </div>
          <div class="mb-3">
            <label for="Message" class="form-label">Message: </label>
            <textarea name="message" class="form-control" id="Message" rows="5"
              placeholder="Type in your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <a href="\php" class="link">back</a>

      </div>

      <div class="col-md"></div>

    </div>

  </div>
  <script type="text/js">

  </script>
</body>

</html>