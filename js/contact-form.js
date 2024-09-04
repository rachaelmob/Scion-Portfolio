const contactForm = document.getElementById('contactForm');

//=================================//
//       VALIDATE ON SUBMIT      
//=================================//
contactForm.addEventListener('submit', function(event) {

  event.preventDefault();
  clearErrors(); //check for errors

  // Perform validation
  let isValid = validateForm();
  if (isValid) {
    alert('Form submitted successfully!');
  }

});

//=================================//
//     VALIDATE FORM FUNCTION       
//=================================//
function validateForm() {
  let isValid = true;

    // Validate First Name
    if (!validateFirstNameInput()) {
      isValid = false;
    }
  
    // Validate Last Name
    if (!validateLastNameInput()) {
      isValid = false;
    }
  
    // Validate Telephone
    if (!validateTelephoneInput()) {
      isValid = false;
    }
  
    // Validate Email
    if (!validateEmailInput()) {
      isValid = false;
    }
  
    // Validate Subject
    if (!validateSubjectInput()) {
      isValid = false;
    }
  
    // Validate Message
    if (!validateMessageInput()) {
      isValid = false;
    }

  return isValid;
}

    //=====================================//
    //  FUNCTIONS FOR EACH INPUT VALIDATION       
    //=====================================//
    function validateFirstNameInput() {
      const firstname = document.getElementById('firstname').value.trim();
      if (firstname === '') {
          showError('firstNameError', 'First Name is required.');
          isValid = false;
      } else if (firstname.length < 3) {
          showError('firstNameError', 'First Name must be at least 3 characters.');
          isValid = false;
      } 
      else {
        clearError('firstNameError'); // Clear the error if the input is valid
        return true;
      }
  }
      
  function validateLastNameInput() {
    const lastname = document.getElementById('lastname').value.trim();
    if (lastname === '') {
      showError('lastnameError', 'Last Name is required.');
      isValid = false;
    } else if (lastname.length < 3) {
        showError('lastNameError', 'Last Name must be at least 3 characters.');
        isValid = false;
    }
    else {
      clearError('lastNameError'); // Clear the error if the input is valid
      return true;
    }
  }

  function validateEmailInput() {
    const email = document.getElementById('email').value.trim();
    if (email === '') {
        showError('emailError', 'Email is required.');
        isValid = false;
    } else if (!validateEmail(email)) {
        showError('emailError', 'Please enter a valid email address.');
        isValid = false;
    }
    else {
      clearError('emailError'); // Clear the error if the input is valid
      return true;
    }
  }

  function validateTelephoneInput() {
    const telephone = document.getElementById('telephone').value.trim();
    if (telephone === '') {
        showError('telError', 'A telephone number is required.');
        isValid = false;
    } else if (!validateTel(telephone)) {
        showError('telError', 'Please enter a valid telephone number.');
        isValid = false;
    } 
    else {
      clearError('telError'); // Clear the error if the input is valid
      return true;
    }
  }

  function validateSubjectInput() {
    const subject = document.getElementById('subject').value.trim();
    if (subject === '') {
        showError('subjectError', 'A subject is required.');
        isValid = false;
    } else if (subject.length < 5) {
        showError('subjectError', 'Subject must be at least 5 characters.');
        isValid = false;
    }
    else {
      clearError('subjectError'); // Clear the error if the input is valid
      return true;
    }
  }

  function validateMessageInput() {
    const message = document.getElementById('message').value.trim();
    if (message === '') {
        showError('messageError', 'Message is required.');
        isValid = false;
    } else if (message.length < 20) {
        showError('messageError', 'Message must be at least 20 characters.');
        isValid = false;
    }
    else {
      clearError('messageError'); // Clear the error if the input is valid
      return true;
    }
  }


  //=================================//
  // TELEPHONE & EMAIL REGEX FUNCTIONS       
  //=================================//

    function validateTel(telephone) {
      const regex =  /^\+?[0-9\s\-]{7,15}$/;
      return regex.test(telephone);
    }

    function validateEmail(email) {
      const regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return regex.test(String(email).toLowerCase());
    }




    //=====================================//
    //  FUNCTIONS TO SHOW AND CLEAR ERRORS        
    //=====================================//
    function showError(elementId, errorMessage) {
      const errorElement = document.getElementById(elementId);
      errorElement.textContent = errorMessage;
    }

    // clear indivdual errors
    function clearError(elementId) {
      const errorElement = document.getElementById(elementId);
      errorElement.textContent = '';
    }

    // Clear all errors (incase individual errors dont clear)
    function clearErrors() {
      const errorMessages = document.querySelectorAll('.error-message');
      errorMessages.forEach(function(errorElement) {
          errorElement.textContent = '';
      });
    }

    // REAL-TIME VALIDATION 
    document.getElementById('firstname').addEventListener('input', validateFirstNameInput);
    document.getElementById('lastname').addEventListener('input', validateLastNameInput);
    document.getElementById('email').addEventListener('input', validateEmailInput);
    document.getElementById('telephone').addEventListener('input', validateTelephoneInput);
    document.getElementById('subject').addEventListener('input', validateSubjectInput);
    document.getElementById('message').addEventListener('input', validateMessageInput);
