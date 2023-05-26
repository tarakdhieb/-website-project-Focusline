const orderForm = document.getElementById('order-form');
const buyButton = document.getElementById('buy-button');

buyButton.addEventListener('click', function(event) {
  event.preventDefault();

  const formInputs = orderForm.querySelectorAll('input');
  let anyFieldEmpty = false;

  formInputs.forEach(function(input) {
    if (input.value.trim() === '') {
      input.classList.add('error');
      anyFieldEmpty = true;
    } else {
      input.classList.remove('error');
    }
  });

  if (anyFieldEmpty) {
    alert("Veuillez remplir tous les champs avant de passer la commande.");
  } 
});