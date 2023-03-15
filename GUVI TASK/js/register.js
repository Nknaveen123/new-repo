// Get the form and the button elements
const form = document.querySelector('form');
const signUpButton = document.querySelector('.log-in');

// Add a click event listener to the button
signUpButton.addEventListener('click', () => {
  // Get the username and password input fields
  const usernameInput = document.getElementById('txt-input');
  const passwordInput = document.querySelector('input[type="password"]');

  // Get the values entered in the fields
  const username = usernameInput.value;
  const password = passwordInput.value;

  // Display an alert message with the values entered
  alert(`Username: ${username}, Password: ${password}`);

  // Reset the form
  form.reset();
});
