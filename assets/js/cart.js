$(document).ready(function () {
   $(document).on("click", "#addToCart", function (event) {
      event.preventDefault();
      let product_id = event.target.dataset.id;
      let count = 1;
      $.ajax({
         url: "addToCart",
         type: "post",
         data: {
            product_id: product_id,
         },
         success: function (response) {
            // reloadCount();
         },
      });
   });

   // qwe
   // qwe
   // qwe
   // function reloadCount() {
   //    $.ajax({
   //       url: "reloadCount",
   //       type: "post",
   //       data: {},
   //       success: function (response) {
   //          $(".header__cart_count").html(response);
   //       },
   //    });
   // }
   // function reloadCart() {
   //    $.ajax({
   //       url: "reloadCart",
   //       type: "post",
   //       data: {},
   //       success: function (response) {
   //          $("body").html(response);
   //       },
   //    });
   // }
   // $(".cart-item__count-box").on(
   //    "click",
   //    ".count-box__minus,.count-box__plus",
   //    function (event) {
   //       let itemCart = $(this).closest(".cart-item__count-box").data("id");
   //       if ($(this).attr("class") == "count-box__minus") {
   //          action = "minus";
   //       } else {
   //          action = "plus";
   //       }

   //       $.ajax({
   //          url: "changeCountProductsInCart",
   //          type: "post",
   //          data: {
   //             action: action,
   //             itemCart: itemCart,
   //          },
   //          success: function (response) {
   //             if (isNaN(response)) {
   //                $('.cart-item[data-id="' + itemCart + '"]').remove();
   //             } else {
   //                $(
   //                   '.cart-item[data-id="' + itemCart + '"] .count-box__count'
   //                ).val(+response);
   //             }
   //             reloadCart();
   //             reloadCount();
   //          },
   //       });
   //    }
   // );
   // $(".cart-item__count-box").on(
   //    "change",
   //    ".count-box__count",
   //    function (event) {
   //       let itemCart = $(this).closest(".cart-item__count-box").data("id");
   //       if ($(this).val() == "") {
   //          $(this).val(1);
   //       }
   //       if ($(this).val() > 351) {
   //          $(this).val(351);
   //       }
   //       $.ajax({
   //          url: "changeCountProductsInCart",
   //          type: "post",
   //          data: {
   //             action: $(this).val(),
   //             itemCart: itemCart,
   //          },
   //          success: function (response) {
   //             reloadCart();
   //             reloadCount();
   //          },
   //       });
   //    }
   // );
});
