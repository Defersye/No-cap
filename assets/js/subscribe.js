$(document).ready(function () {
   $(".footer_subscribe").on("submit", function (e) {
      e.preventDefault();
      let email = $("#email").val();
      if (!confirm("Are you sure this is your email? " + email)) {
         return;
      }

      $.ajax({
         url: "/subscribe",
         type: "POST",
         data: { email: email },
         dataType: "json",
         success: function (response) {
            if (response.success) {
               alert(response.message);
               $("#email").val("");
            } else {
               alert(response.message);
            }
         },
         error: function () {
            alert("Subscription failed. Please try again.");
         },
      });
   });
});
