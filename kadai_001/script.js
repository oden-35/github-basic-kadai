$(function () {

  // カルーセルの設定
  $('.carousel').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 5000, // 修正: autoplayspeed → autoplaySpeed
    speed: 900,
    fade: true,
    cssEase: 'linear',
  });

  // ホバー時のアニメーション
  $('.havorlink').hover(
    function () {
      $(this).stop().animate({ opacity: 0.3 }, 300);
    },
    function () {
      $(this).stop().animate({ opacity: 1 }, 300);
    }
  );

  // TOPボタンの表示・非表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('#page-top').fadeIn();
    } else {
      $('#page-top').fadeOut();
    }
  });

  
  $('a[href^="#"]').on("click", function (event) {
    event.preventDefault();
    var target = $($(this).attr("href")); 

    if (target.length) {
      $("html, body").animate(
        {
          scrollTop: target.offset().top - 50, 
        },
        800, 
        "swing" 
      );
    }
  });

  
  $("#page-top").on("click", function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 800, "swing");
  });

  $(window).on("scroll", function () {
    $(".fade-in").each(function () {
      let elementTop = $(this).offset().top; 
      let scrollTop = $(window).scrollTop(); 
      let windowHeight = $(window).height(); 

      
      if (scrollTop > elementTop - windowHeight + 100) {
        $(this).addClass("show");
      }
    });
  });

  
  $(window).trigger("scroll");

  $(function () {
    $(".works-photo img").on("click", function () {
      let imgSrc = $(this).attr("src"); 
      let imgAlt = $(this).attr("alt"); 
  
      $("#modal-img").attr("src", imgSrc); 
      $("#caption").text(imgAlt); 
      $("#modal").fadeIn(); 
    });
  
  
    $(".close, #modal").on("click", function () {
      $("#modal").fadeOut(); 
    });
  });
  


});


