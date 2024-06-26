document.addEventListener("DOMContentLoaded", () => {
   // hiding on scroll
   const onScrollHeader = () => {
      const header = document.querySelector("header");
      let searchContainer = document.querySelector(".search_content");
      let prevScroll = window.scrollY;
      let currentScroll;
      let burger = getComputedStyle(document.querySelector(".header_burger"));

      document.addEventListener("scroll", () => {
         currentScroll = window.scrollY;
         const headerHidden = () => header.classList.contains("header_hidden");

         if (currentScroll > prevScroll && !headerHidden()) {
            header.classList.add("header_hidden");
            searchContainer.parentNode.style.top = "10px";
            mobileNav.style.top = "-500px";
         }
         if (currentScroll < prevScroll && headerHidden()) {
            header.classList.remove("header_hidden");

            if (burger.display == "none") {
               searchContainer.parentNode.style.top = "80px";
            } else {
               searchContainer.parentNode.style.top = "245px";
            }
            mobileNav.style.top = "70px";
         }
         prevScroll = currentScroll;
      });
   };
   onScrollHeader();

   // burger
   const burger = document.querySelector(".header_burger");
   const mobileNav = document.querySelector(".header_mobile_nav");

   burger.addEventListener("click", () => {
      burger.classList.toggle("active");
      mobileNav.classList.toggle("active");
   });
});
