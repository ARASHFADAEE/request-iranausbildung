

const toggler = document.querySelector(".nav__toggler");
const navbar=document.querySelector(".nav");


toggler.addEventListener("click" ,(e) => {
    navbar.classList.toggle("nav__expanded");
});
    

const form = document.querySelector('#myForm');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const name = document.querySelector('#name');
  const email = document.querySelector('#email');

  if (name.value === '' || email.value === '') {
    alert('لطفا فیلد های مورد نظر را تکمیل کنید');
  } else {
    // send form data to server
    form.submit();
  }
});
