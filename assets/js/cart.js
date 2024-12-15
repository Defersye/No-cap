$(document).ready(function () {
   refreshQuantityChecker();
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
            refreshQuantityChecker();
         },
      });
   });
   function refreshQuantityChecker() {
      $.ajax({
         url: "refreshQuantity",
         type: "post",
         data: {},
         success: function (response) {
            $(".header_cart-quantity").html(response);
         },
      });
   }
   function reloadCart() {
      $.ajax({
         url: "cart",
         type: "post",
         data: {},
         success: function (response) {
            $("body").html(response);
         },
      });
   }
   $(".cart_card_quantity")
      .off("click", ".decrement,.increment")
      .on("click", ".decrement,.increment", function (event) {
         let id_cart = $(this).closest(".cart_card_quantity").data("id");
         if ($(this).attr("class") == "cart_card_quantity_change decrement") {
            action = "decrement";
         } else {
            action = "increment";
         }

         $.ajax({
            url: "changeQuantity",
            type: "post",
            data: {
               action: action,
               id_cart: id_cart,
            },
            success: function (response) {
               if (isNaN(response)) {
                  $('.cart_card_quantity[data-id="' + id_cart + '"]').remove();
               } else {
                  $(
                     '.cart_card_quantity[data-id="' +
                        id_cart +
                        '"] .cart_card_quantity_nums'
                  ).val(+response);
               }
               reloadCart();
               refreshQuantityChecker();
            },
         });
      });
   $(".cart_card_quantity").on(
      "change",
      ".cart_card_quantity_nums",
      function (event) {
         let id_cart = $(this).closest(".cart_card_quantity").data("id");
         if ($(this).val() == "" || $(this).val() < 0) {
            $(this).val(1);
         }
         if ($(this).val() > 99) {
            $(this).val(99);
         }
         $.ajax({
            url: "changeQuantity",
            type: "post",
            data: {
               action: $(this).val(),
               id_cart: id_cart,
            },
            success: function (response) {
               reloadCart();
               refreshQuantityChecker();
            },
         });
      }
   );
});

$(document).ready(function () {
   CountQueuingStrategy();
});
