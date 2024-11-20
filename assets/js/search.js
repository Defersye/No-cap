$(document).ready(function () {
   let search = document.querySelectorAll(".search");
   let searchContent = document.querySelector(".search_content");

   let burger = getComputedStyle(document.querySelector(".header_burger"));
   if (burger.display == "none") {
      search = search[0];
      search.id = "search";
   } else {
      search = search[1];
      search.id = "search";
   }

   search.addEventListener("click", (event) => {
      event.target.placeholder = "Введите текст...";
      event.target.style.borderBottom = "1px solid black";
      searchContent.style.display = "flex";
   });
   $("body").click(function (e) {
      if (
         e.target.className != "search_content" &&
         e.target.classList[1] != "search"
      ) {
         search.placeholder = "поиск";
         search.style.borderBottom = "none";
         search.value = "";
         searchContent.style.display = "none";
      }
   });
});

// ajax
$(document).ready(function () {
   $(document).on("input", "#search", function (event) {
      setSearch();
   });

   function setSearch() {
      event.preventDefault();
      let search = $("#search").val();
      if (search !== "") {
         $.ajax({
            url: "search",
            type: "post",
            data: {
               search: search,
            },
            success: function (response) {
               $(".search_content").html(response);
            },
         });
      } else {
         $.ajax({
            url: "clearSearch",
            success: function (response) {
               $(".search_content").html(response);
            },
         });
      }
   }
});
