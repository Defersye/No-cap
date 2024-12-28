// ajax

$(document).ready(function () {
   $(".auth_form").on("submit", function (e) {
      e.preventDefault();
      let name = $("#register_name").val();
      let login = $("#register_login").val();
      let email = $("#register_email").val();
      let password = $("#register_password").val();
      let confirm = $("#register_confirm").val();
      let avatar = $("#register_avatar")[0].files[0]
         ? $("#register_avatar")[0].files[0]
         : "default";
      if (name && login && email && password && confirm) {
         checkRegister(name, login, email, password, confirm, avatar);
      }
   });

   function checkRegister(name, login, email, password, confirm, avatar) {
      event.preventDefault();
      if (password == confirm) {
         let formData = new FormData();
         formData.append("name", name);
         formData.append("login", login);
         formData.append("email", email);
         formData.append("password", password);
         formData.append("avatar", avatar);

         $.ajax({
            url: "checkRegister",
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
               if (response == "Registration completed successfully!") {
                  let get = response.split(" ").join("-");
                  window.location.href = "/login?response=" + get;
               } else {
                  $(".auth_error").html(response);
                  $(".auth_error").css("display", "block");
               }
            },
         });
      } else {
         $(".auth_error").html("Passwords don`t match!");
         $(".auth_error").css("display", "block");
      }
   }
});
