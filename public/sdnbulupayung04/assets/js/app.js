$(window).on("load", function() {
  const elem = document.querySelector('.mansory');
  var msnry = new Masonry(elem, {
    itemSelector: '.masonry-item',
    columnWidth: ".masonry-sizer", // Sesuaikan selector di sini
    gutter: 20,
    layoutMode: 'masonry',
    percentPosition: true
  });

  $(".btn-to-top").click(function() {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      1500,
      "easeInOutExpo"
    );
  });

  AOS.init();

  const gambarIsotope = $('.gambar-container').isotop({
    itemSelector : '.gambar-item',

  });

  // $('.galeri-filters li').click(function() {
  //   console.log('Item clicked'); 
  //   $(".galeri-filters li").removeClass("filter-active");
  //   $(".galeri-filters li").removeClass("text");
  //   $(this).addClass("filter-active");
  //   $(this).addClass("filter-active");
  // });
  
  $('.galeri-filters').on('click', 'li', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });

    // Change active class on filter buttons
    $('.galeri-filters li').removeClass('filter-active');
    $(this).addClass('filter-active');
  });

});