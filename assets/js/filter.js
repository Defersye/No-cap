$(document).ready(function () {
   $(document).on(
      "change",
      "#category, #collection, #discount",
      function (event) {
         setFilter();
      }
   );
   $(window).on("load", function (event) {
      setFilter();
   });

   function setFilter() {
      event.preventDefault();
      let category = $("#category").val();
      let collection = $("#collection").val();
      let discount = Number($("#discount").prop("checked"));
      $.ajax({
         url: "filter",
         type: "get",
         data: {
            category: category,
            collection: collection,
            discount: discount,
         },
         success: function (response) {
            $(".catalog_cards").html(response);
         },
      });
   }
   function clearFilter() {
      event.preventDefault();
      $.ajax({
         url: "clearFilter",
         success: function (response) {
            $(".catalog_cards").html(response);
         },
      });
   }

   $(document).on("click", "#clear", function (event) {
      clearFilter();
   });
});
