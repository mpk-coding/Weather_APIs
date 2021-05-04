function form() {
  var form = $(".formPHP");

  var emailInput = $("#Sender");
  var subjectInput = $("#Subject");
  var messageInput = $("#Message");

  var validEmail
  var validSubject
  var validMessage

  var valid

  function validateForm(event) {
    var emailRegex = /\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b/;

    if ($(event.target).attr("type") == "email") {
      if ($(event.target).val().match(emailRegex)) {
        $(".alert__email--danger").addClass("hidden");
        $(event.target).removeClass("form--danger");
        validEmail = 1
      } else {
      $(event.target).addClass("form--danger");
      $(".alert__email--danger").removeClass("hidden");
      validEmail = 0
      }
    } else if ($(event.target).attr("id") == "Subject") {
        if ($(event.target).val()) {
          $(".alert__subject--danger").addClass("hidden");
          $(event.target).removeClass("form--danger");
          validSubject = 1
        } else {
          $(".alert__subject--danger").removeClass("hidden");
          $(event.target).addClass("form--danger");
          validSubject = 0          
        }
    } else if ($(event.target).attr("id") == "Message") {
      if ($(event.target).val()) {
        $(".alert__message--danger").addClass("hidden");
        $(event.target).removeClass("form--danger");
        validMessage = 1
      } else {
        $(".alert__message--danger").removeClass("hidden");
        $(event.target).addClass("form--danger");    
        validMessage = 0    
      }
    }

    if (validEmail == 1 && validSubject == 1 && validMessage == 1) {
      valid = 1
    } else {
      valid = 0
    }
}


  form.find("input[type=\"email\"], input, textarea"). on("blur", function(event) {
    validateForm(event);
  })

  $("button").attr("type", "submit").on("click", function(event) {
    validateForm(event);
    if (valid == 1) {
      return true
    } else {
      return false
    }
  })

  form.on("submit", function preventSubmit(event) {
    validateForm(event);
    if (valid == 1) {
      return true
    } else {
      return false
    }
  });
}