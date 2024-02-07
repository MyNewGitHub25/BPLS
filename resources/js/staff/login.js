require('../bootstrap');


// Check if the token has expired
function isTokenExpired(token) {
    const expiration = getTokenExpiration(token);
    return expiration < Date.now();
}

// Handle expired token
function handleExpiredToken() {
    // Redirect to login page or display a message to the user
    window.location.href = '/login';
}

// Check token expiration and handle accordingly
function checkTokenExpiration() {
    const token = getTokenFromStorage(); // Retrieve token from storage (e.g., localStorage)
    if (token && isTokenExpired(token)) {
        handleExpiredToken();
    }
}

// Call checkTokenExpiration() when the page loads
window.addEventListener('load', checkTokenExpiration);

document.getElementById('staff-login-form').addEventListener('submit', function(e) {
    const btn = document.getElementById('btn-staff-login');
    
    // Prevent the default form submission behavior
    e.preventDefault();

    const alert_disp = document.getElementById('disp-alert');

    alert_disp.classList.add('d-none');

    document.getElementById('password').classList.remove('is-invalid');

    btn.disabled = true;

if (this.checkValidity()) {
    // Collect form data
    const post_data = new FormData(this);

    // Make a POST request to the login endpoint
    axios
        .post('login', post_data)
        .then((resp) => {
            const { message, url } = resp.data;
                
                alert_disp.classList.remove('alert-danger', 'd-none');
                alert_disp.classList.add('alert-success')
                alert_disp.innerText = message;

                setTimeout(function() {
                    // Redirect to the desired URL after 5 seconds
                    window.location.reload();
                    window.location.href = url;
                }, 2000);       
        })
        .catch((error) => {
                console.log(error)
            });
} else {
        this.classList.add('was-validated');
        btn.disabled = false;
    }
});