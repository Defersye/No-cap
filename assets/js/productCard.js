$(document).ready(function () {
   // Этот код будет выполнен, когда весь HTML-документ будет загружен и готов к манипуляциям
   $(document).on("click", ".card__title", function (event) {
      // Этот код будет запускаться при клике на элементе с классом '.card__title', независимо от того, был ли он присутствующим при загрузке страницы
      var productId = event.target.dataset.id; // Получаем значение атрибута 'data-id' из элемента, на котором был совершен клик

      // Строим URL с параметром id_product, используя значение 'data-id' из кликнутого элемента
      var url = "product?id_product=" + productId;

      // Переходим на новую страницу с передачей параметров через URL
      window.location.href = url;
   });
});
