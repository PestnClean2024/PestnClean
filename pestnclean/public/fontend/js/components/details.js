const quantityInput = document.getElementById("quantity-input");
const decreaseButton = document.getElementById("decrease");
const increaseButton = document.getElementById("increase");
let quantity = parseInt(quantityInput.value, 10);

decreaseButton.addEventListener("click", () => {
  if (quantity > 1) {
    quantity--;
    quantityInput.value = quantity;
  }
});

increaseButton.addEventListener("click", () => {
  quantity++;
  quantityInput.value = quantity;
});


$(document).ready(function () {
  $(".slice-carousel").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    infinite: true,
    draggable: true,
    swipeToSlide: true,
    centerMode: false,
    centerPadding: "0px",
  });

  $(".thumb").on("click", function () {
    var src = $(this).attr("src");
    $("#mainImage").attr("src", src);
    console.log(123);
  });
});