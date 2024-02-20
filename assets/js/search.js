document.addEventListener("DOMContentLoaded", () => {
   const search = document.querySelector("#search");
   search.addEventListener("focus", (event) => {
      event.target.placeholder = "Big black ...";
      event.target.style.borderBottom = "1px solid black";
   });
   search.addEventListener("blur", (event) => {
      event.target.placeholder = "Search";
      event.target.style.borderBottom = "none";
   });
});
