document.addEventListener("DOMContentLoaded", () => {
   const onScrollHeader = () => {
      const header = document.querySelector("header");
      let searchContainer = document.querySelector(".search_content");
      let prevScroll = window.scrollY;
      let currentScroll;

      document.addEventListener("scroll", () => {
         currentScroll = window.scrollY;
         const headerHidden = () => header.classList.contains("header_hidden");

         if (currentScroll > prevScroll && !headerHidden()) {
            header.classList.add("header_hidden");
            searchContainer.parentNode.style.top = "10px";
         }
         if (currentScroll < prevScroll && headerHidden()) {
            header.classList.remove("header_hidden");
            searchContainer.parentNode.style.top = "80px";
         }
         prevScroll = currentScroll;
      });
   };
   onScrollHeader();
});
