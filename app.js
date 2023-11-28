$('.app_image_slider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    speed: 300,
    arrows: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
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






  window.addEventListener('scroll', function() {				
				
    let content = document.querySelectorAll(".sec")				
    content.forEach(function(e){				
    let contentposition = e.getBoundingClientRect().top;				
    let screenposition = window.innerHeight /1.7;				
    if (contentposition < screenposition){				
    console.log("working")				
    e.classList.add("sec-anim")				
    e.classList.remove("sec")				
    }				
    })				
            
    })				