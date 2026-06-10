document.addEventListener('DOMContentLoaded', () => {
    
    function handleLogin(formId, apiEndpoint, redirectUrl) {
        const form = document.getElementById(formId);
        if (!form) return;
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            const alertBox = document.getElementById('loginAlert');
            try {
                const response = await fetch(apiEndpoint, {
                    method: 'POST',
                    body: formData
                });
                
                const data = await response.json();
                
                if (data.status === 'success') {
                    alertBox.className = 'alert alert-success mt-3';
                    alertBox.textContent = data.message;
                    alertBox.classList.remove('d-none');
                    setTimeout(() => window.location.href = redirectUrl, 1000);
                } else {
                    alertBox.className = 'alert alert-danger mt-3';
                    alertBox.textContent = data.message;
                    alertBox.classList.remove('d-none');
                }
            } catch (err) {
                alertBox.className = 'alert alert-danger mt-3';
                alertBox.textContent = 'An error occurred. Please try again.';
                alertBox.classList.remove('d-none');
            }
        });
    }
    handleLogin('patientLoginForm', 'api/patient/login.php', 'patient/dashboard.html');
    handleLogin('doctorLoginForm', 'api/doctor/login.php', 'doctor/dashboard.html');
    handleLogin('adminLoginForm', 'api/admin/login.php', 'admin/dashboard.html');
});

