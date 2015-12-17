$(document).ready(function () {
  $("#sub").on("click", function () {
    var userName = $("#name").val(),
      userEmail = $("#email").val(),
      userPassword = $("#password").val();
    
    /*$.post(
      "test.php",
      {
        name: userName,
        email: userEmail,
        password: userPassword
      },
      function (data) {
        $("#result").html(data);
      }
    );*/
    $.ajax({
      url: 'test.php',
      data: {
        name: userName,
        email: userEmail,
        password: userPassword
      },
      type: 'POST',
      success: function (data) {
        $("#result").html(data);
      }
    });
  });
});