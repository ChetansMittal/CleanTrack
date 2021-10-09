/**
 * @description Change Home page slider's arrows active status
 */
 function updateSliderArrowsStatus(
    cardsslider,
    sliderWidth,
    cardCount,
    cardWidth
  ) {
    if (
      $(cardsslider).scrollLeft() + sliderWidth <
      cardCount * cardWidth + 15
    ) {
      $("#slide-right-slider").addClass("active");
    } else {
      $("#slide-right-slider").removeClass("active");
    }
    if ($(cardsslider).scrollLeft() > 0) {
      $("#slide-left-slider").addClass("active");
    } else {
      $("#slide-left-slider").removeClass("active");
    }
    
  }
  $(function() {
    // Scroll products' slider left/right
    let div = $("#cards-slider");
    let cardCount = $(div)
      .find(".cards")
      .children(".card").length;
    let speed = 1000;
    let sliderWidth = $(".slider").width();
    let cardWidth = 250;
  
    updateSliderArrowsStatus(div, sliderWidth, cardCount, cardWidth);
  
    //Remove scrollbars
    $("#slide-right-slider").click(function(e) {
      if ($(div).scrollLeft() + sliderWidth < cardCount * cardWidth) {
        $(div).animate(
          {
            scrollLeft: $(div).scrollLeft() + cardWidth
          },
          {
            duration: speed,
            complete: function() {
              setTimeout(
                updateSliderArrowsStatus(
                  div,
                  sliderWidth,
                  cardCount,
                  cardWidth
                ),
                1005
              );
            }
          }
        );
      }
      updateSliderArrowsStatus(div, sliderWidth, cardCount, cardWidth);
    });
    $("#slide-left-slider").click(function(e) {
      if ($(div).scrollLeft() + sliderWidth > sliderWidth) {
        $(div).animate(
          {
            scrollLeft: "-=" + cardWidth
          },
          {
            duration: speed,
            complete: function() {
              setTimeout(
                updateSliderArrowsStatus(
                  div,
                  sliderWidth,
                  cardCount,
                  cardWidth
                ),
                1005
              );
            }
          }
        );
      }
      updateSliderArrowsStatus(div, sliderWidth, cardCount, cardWidth);
    });
  
    // If resize action ocurred then update the slider width value
    $(window).resize(function() {
      try {
        sliderWidth = $("#cards-slider").width();
        updateSliderArrowsStatus(div, sliderWidth, cardCount, cardWidth);
      } catch (error) {
        console.log(
          `Error occured while trying to get updated slider slider width: 
              ${error}`
        );
      }
    });
  });



  
  var responsiveSlider = function() {

    var slider = document.getElementById("slider");
    var sliderWidth = slider.offsetWidth;
    var slideList = document.getElementById("slideWrap");
    var count = 1;
    var items = slideList.querySelectorAll("li").length;
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    
    window.addEventListener('resize', function() {
      sliderWidth = slider.offsetWidth;
    });
    
    var prevSlide = function() {
      if(count > 1) {
        count = count - 2;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
      else if(count = 1) {
        count = items - 1;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
    };
    
    var nextSlide = function() {
      if(count < items) {
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
      else if(count = items) {
        slideList.style.left = "0px";
        count = 1;
      }
      
    
    };
    
    next.addEventListener("click", function() {
      nextSlide();
    });
    
    prev.addEventListener("click", function() {
      prevSlide();
    });
    
    setInterval(function() {
      nextSlide()
    }, 5000);
    
    };
    
    window.onload = function() {
    responsiveSlider();  
    }




    var btn = $('#buttn');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });
    
    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });
    
    
