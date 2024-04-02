$(document).ready(function () {
   $(document).on("click", ".reg_button", function (event) {
      event.preventDefault();
      let register_name = $(".register_name").val();
      let register_email = $(".register_email").val();
      let register_password = $(".register_password").val();
      let register_confirm = $(".register_confirm").val();
      let register_photo = $("#register_photo").val();

      $.ajax({
         url: "register",
         type: "post",
         data: {
            register_name: register_name,
            register_email: register_email,
            register_password: register_password,
            register_confirm: register_confirm,
            register_photo: register_photo,
         },
         success: function (response) {
            if (response == 0) {
               // Если ответ равен 0 (пользователь уже существует)
               $(".reg_error").css("display", "block");
            } else {
               // Иначе (регистрация прошла успешно)
               location.reload();
            }
         },
      });
   });
});
