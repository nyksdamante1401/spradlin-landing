function showPopupForm() {
    document.getElementById("popup-form-container").style.display = "block";
  }
  
  function hidePopupForm() {
    document.getElementById("popup-form-container").style.display = "none";
  }

  function ResizeWindow()
{
    var iOrignalWidth = 950;
    var iOrignalHeight = 500;
    var iOuterHeight = window.outerHeight; 
    var iOuterWidth = window.outerWidth;

    var w = (window.outerWidth  - iOrignalWidth) / iOrignalWidth; // for exam: (1280-950) / 950= 0.34
    var h = (window.outerHeight - iOrignalHeight) / iOrignalHeight; // for exam : (800 - 500) / 500= 0.60

    var newWidth;
    var newHeight;
    if (w<h)
    {
        // If percentage of width is less than percentage of height, Resize should be according to percentage of width.
        newWidth = iOrignalWidth * w * 100;
        newHeight = iOrignalHeight * w *100;
    }
    else
    {
        // If percentage of height is less than  percentage of width, Resize should be according to percentage of height.
        newWidth = iOrignalWidth * h * 100;
        newHeight = iOrignalHeight * h *100;
    }

    alert("New Width: "+ newWidth + "\t" + "New Height" + newHeight );

}
   document.addEventListener("DOMContentLoaded", () => {

    document.getElementById('show-popup').addEventListener('click', () => {
      showPopupForm();
    });
  
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') hidePopupForm()
    });
  
  });

  document.getElementById("contact-form").addEventListener("submit", (event) => {
    const contactForm = event.target
    if (!validateContactForm(contactForm)) {
      event.preventDefault();
      displayError(contactForm, 'Invalid input')
    }
  });
