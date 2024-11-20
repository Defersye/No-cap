// get
const getParams = new URLSearchParams(location.href.split("?")[1]);
let get = getParams.get("response");

if (get) {
   let response = get.split("-").join(" ");
   $(".auth_error").html(response);
   $(".auth_error").css("display", "block");
}

// ajax
$(document).ready(function () {
   $("#submit").click(function () {
      let email = $("#login_email").val();
      let password = $("#login_password").val();
      if (email && password) {
         checkLogin(email, password);
      }
   });

   function checkLogin(email, password) {
      event.preventDefault();
      console.log(email);
      console.log(password);
      $.ajax({
         url: "checkLogin",
         type: "post",
         data: {
            email: email,
            password: password,
         },
         success: function (response) {
            if (response == "Okay!") {
               window.location.href = "/account";
            }
            $(".auth_error").html(response);
            $(".auth_error").css("display", "block");
         },
      });
   }
});
