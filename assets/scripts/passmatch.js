
  document.getElementById('signupForm').addEventListener('submit', function (e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Check if passwords match
    if (password !== confirmPassword) {
      e.preventDefault(); // Prevent form submission
      alert('Passwords do not match. Please try again.');
      return false;
    }

    // If passwords match, the form is submitted
    return true;
  });