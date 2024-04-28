// // hover
// let inpt = document.querySelector("#register_avatar");
// let btn = document.querySelector(".register_input_btn");

// inpt.addEventListener("mouseover", function () {
//    btn.classList.add("register_input_btn_hover");
// });
// inpt.addEventListener("mouseout", function () {
//    btn.classList.remove("register_input_btn_hover");
// });

// // input
// let fields = document.querySelectorAll("#register_avatar");
// Array.prototype.forEach.call(fields, function (input) {
//    input.addEventListener("change", function (e) {
//       let filename = inpt.files[0].name;
//       document.querySelector(".register_input_row").innerText = filename;
//    });
// });

// ajax
$(document).ready(function () {
   $("#submit").click(function () {
      let name = $("#register_name").val();
      let login = $("#register_login").val();
      let email = $("#register_email").val();
      let password = $("#register_password").val();
      let confirm = $("#register_confirm").val();
      // let avatar = $("#register_avatar").val();
      if (name && login && email && password && confirm) {
         checkRegister(name, login, email, password, confirm);
      }
   });

   function checkRegister(name, login, email, password, confirm) {
      event.preventDefault();
      if (password == confirm) {
         $.ajax({
            url: "checkRegister",
            type: "post",
            data: {
               name: name,
               login: login,
               email: email,
               password: password,
               // avatar: avatar,
            },
            success: function (response) {
               let get = response.split(" ").join("-");
               window.location.href = "/login?response=" + get;
            },
         });
      } else {
         $(".auth_error").html("Passwords don`t match!");
         $(".auth_error").css("display", "block");
      }
   }
});
