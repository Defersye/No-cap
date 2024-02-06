document.addEventListener("DOMContentLoaded", () => {
   const onScrollHeader = () => {
      const header = document.querySelector("header");
      let prevScroll = window.scrollY;
      let currentScroll;
      window.addEventListener("scroll", () => {
         currentScroll = window.scrollY;
         const headerHidden = () => header.classList.contains("header_hidden");

         if (currentScroll > prevScroll && !headerHidden()) {
            header.classList.add("header_hidden");
         }
         if (currentScroll < prevScroll && headerHidden()) {
            header.classList.remove("header_hidden");
         }
         prevScroll = currentScroll;
      });
   };
   onScrollHeader();
});
