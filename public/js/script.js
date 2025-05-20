// Function to validate login form
function validateLoginForm(event) {
    event.preventDefault(); // Prevent form submission to handle it manually

    // Get the input values
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Basic validation check
    if (username === '' || password === '') {
        alert('Both fields are required.');
        return;
    }

    // If validation passes, simulate a login action
    alert('Login successful!');
    // You can replace this with actual login functionality, like sending data to a server.

    // Reset the form after successful login
    document.querySelector('.login-form').reset();
}

// Attach event listener to form submission
document.querySelector('.login-form').addEventListener('submit', validateLoginForm);
