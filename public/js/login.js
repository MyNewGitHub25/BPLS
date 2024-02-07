require('../bootstrap');

document.getElementById('staff-login-form').addEventListener('submit', function(e) {
    const btn = document.getElementById('btn-staff-login');
    
    // Prevent the default form submission behavior
    e.preventDefault();

if (this.checkValidity()) {
    // Collect form data
    const post_data = new FormData(this);

    // Make a POST request to the login endpoint
    axios
        .post('staff/login', post_data)
        .then((resp) => {
            // This function executes if the request is successful
            const { message, url } = resp.data;
            console.log("Message:", message);
            console.log("Redirect URL:", url);
            
            // Example: Redirect the user to the provided URL
            // window.location.href = url;
        })
        .catch((error) => {
            // This function executes if there's an error with the request
            console.error("An error occurred:", error);
        });
} else {
        this.classList.add('was-validated');
        btn.disabled = false;
    }
});