const passwordInput = document.getElementById('password');
const togglePasswordButton = document.getElementById('toggle-password');

// Toggle password visibility when the button is clicked
togglePasswordButton.addEventListener('click', () => {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    togglePasswordButton.textContent = type === 'password' ? 'Show' : 'Hide';
});
