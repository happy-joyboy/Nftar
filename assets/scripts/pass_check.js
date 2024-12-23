
  document.getElementById('signupForm').addEventListener('submit', function (e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;


    if (password.length < 8) {
      e.preventDefault(); // Prevent form submission
      alert('Password must be at least 8 characters long. Please try again.');
      return false;
    }else{
          // Check if passwords match
          if (password !== confirmPassword) {
            e.preventDefault(); // Prevent form submission
            alert('Passwords do not match. Please try again.');
            return false;
          }else{
          // If passwords match, the form is submitted
            return true   
          }
    }
  });