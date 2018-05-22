

/*(function autoSlideShow()
{
  var i;
  var slides = document.getElementsByClassName('slide');
  var dots = document.getElementsByClassName('slideShowDot');
  alert("There are " +slides.size+ "elements in Slides and There are " +dots.size+ "elements in Dots." );

  for(i = 0; slides.length; i++)
  {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if(slideIndex > slides.length)
  {
    slideIndex = 1;
  }
  for( i = 0; i < dots.length; i++)
  {
    dots[i].style.opacity = "0.5"
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].style.opacity ="0.9";
  setTimeout(autoSlideShow, 2000);
} */

