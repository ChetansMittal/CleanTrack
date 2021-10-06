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