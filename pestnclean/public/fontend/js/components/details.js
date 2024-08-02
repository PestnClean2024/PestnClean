
let items = document.querySelectorAll('.carousel .carousel-item')
items.forEach((el) => {
    const minPerSlide = 3
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

$(document).ready(function () {
    // Xử lý click vào .icon
    $(".icon").click(function (element) {
      $(this).siblings().removeClass("active");
      $(this).toggleClass("active");
    });

    // Nội dung Popover
    let all_icon = `
      <i class="fa-solid fa-helicopter"></i>
      <i class="fa-brands fa-playstation"></i>
      <i class="fa-solid fa-circle-radiation"></i>
      <i class="fa-brands fa-wolf-pack-battalion"></i>
      <i class="fa-solid fa-moon"></i>
      <i class="fa-solid fa-socks"></i>
      <i class="fa-solid fa-circle-radiation"></i>
      <i class="fa-brands fa-wolf-pack-battalion"></i>
      <i class="fa-solid fa-moon"></i>
      <i class="fa-solid fa-socks"></i>`;

    // Thiết lập Popover
    $('#popoverButton').attr('data-bs-content', all_icon);

    // Khởi tạo Popover
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl);
    });

    // Re-initialize popover with new content
    $('#popoverButton').popover('dispose').popover({
      content: all_icon,
      html: true
    });
  });

$(document).ready(function(){
    $('.sub-img-list').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        draggable: true,
        swipeToSlide: true,
        arrows: false, 
        rows: 1,
    });
});