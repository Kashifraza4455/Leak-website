
AOS.init();

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 300) {
    $("header").addClass("darkHeader");
  }
  else {
    $("header").removeClass("darkHeader");
    // $(".btns_wrap").removeClass("btns_wrap_hover");
  }
});






let num = document.querySelectorAll(".counterup");
let numArray = Array.from(num)

numArray.map((item) => {
  let count = 0
  function counterup() {
    count++
    item.innerHTML = count

    if (count == item.dataset.number) {
      clearInterval(stop)
    }
  }

  let stop = setInterval(function () {
    counterup()
  }, 100)
})




$('.testimonial-slide').slick({
  dots: true,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


// active page

$(document).ready(function () {
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/') + 1);
  if (filename == "") {
    filename = "index.php"
  }
  $(`.nav-item .nav-link[href="${filename}"]`).addClass("active")
})




$('#owl-carousel1').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 3
    }
  }
});



$('#owl-carousel2').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});



// $(window).load(function () {
//   // Preloader
//   $('.loader').fadeOut();
//   $('.loader-mask').delay(350).fadeOut('slow');
// });


// Function to hide the loader after a certain duration
function hideLoader() {
  document.getElementById("loader").style.display = "none";
}

// Set a timeout to hide the loader after 3 seconds (adjust as needed)
setTimeout(hideLoader, 3000);



