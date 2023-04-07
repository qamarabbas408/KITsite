const form = document.getElementById('user-profile');
const inputs = form.querySelectorAll('input, textarea');
const updateBtn = document.getElementById('update-btn');


// Disable all inputs by default
inputs.forEach(input => {
  input.disabled = true;
});

// Enable inputs when the "update" button is clicked
// Enable inputs when the "update" button is clicked
updateBtn.addEventListener('click', event => {
    event.preventDefault(); // prevent form submission
    inputs.forEach(input => {
      input.disabled = false;
    });
  });
  