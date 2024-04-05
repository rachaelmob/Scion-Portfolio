
const isValidEmail = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  };
  
  const isValidPhone = (phone) => {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return re.test(String(phone).toLowerCase());
  };


  const $contactForm = $('form').eq(1);
  const thankyou = document.querySelector('.thankyou');
  const firstnameInput = document.querySelector('input[name="user_firstname"]');
  const lastnameInput = document.querySelector('input[name="user_lastname"]');
  const emailInput = document.querySelector('input[name="user_email"]');
  const telInput = document.querySelector('input[name="user_telephone"]');
  const subjInput = document.querySelector('input[name="user_subject"]');
  const msgInput = document.querySelector('input[name="user_message"]');
  let isFormValid = false;

  const resetElm = (elm) => {
    elm.nextElementSibling.classList.add('.hide-hint');
  }

  const invalidateElm = (elm) => {
    elm.nextElementSibling.classList.remove('.hide-hint');
  };

  const validateInput = () => {
    if (!firstnameInput.value) {
        isFormValid = false;
        invalidateElm(firstnameInput);
    }
    else {
        isFormValid = true;
        resetElm(firstnameInput);
    }
  };

    //Event using JQUERY
  $contactForm.submit(function(event) {
    event.preventDefault();
    validateInput();
    if (isFormValid){
        $contactForm.remove();
        thankyou.classList.remove('hide-hint');
    }
  });

  firstnameInput.addEventListener('input', () => {
    validateInput();
  });
