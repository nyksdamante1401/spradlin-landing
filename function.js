function showPopupForm() {
    document.getElementById("popup-form-container").style.display = "block";
  }
  
  function hidePopupForm() {
    document.getElementById("popup-form-container").style.display = "none";
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