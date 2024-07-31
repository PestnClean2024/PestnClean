document.addEventListener("DOMContentLoaded", function () {
    const registerForm = document.getElementById('register-form');

    registerForm.addEventListener('submit', function (event) {
        event.preventDefault();

        // Reset lỗi
        document.querySelectorAll('.is-invalid').forEach(function (el) {
            el.classList.remove('is-invalid');
        });
        document.querySelectorAll('.invalid-feedback').forEach(function (el) {
            el.textContent = '';
        });

        const formData = new FormData(registerForm);

        fetch(registerForm.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                // Xóa các lỗi cũ
                document.querySelectorAll('.is-invalid').forEach(element => {
                    element.classList.remove('is-invalid');
                });
                document.querySelectorAll('.invalid-feedback').forEach(element => {
                    element.remove();
                });

                if (data.errors) {
                    console.log(data.errors);
                    Object.keys(data.errors).forEach(function (key) {
                        const input = document.getElementById(key);
                        const errorMessage = data.errors[key][0];
                        input.classList.add('is-invalid');

                        let errorElement = input.nextElementSibling;
                        if (errorElement && errorElement.classList.contains('invalid-feedback')) {
                            errorElement.textContent = errorMessage;
                        } else {
                            errorElement = document.createElement('div');
                            errorElement.className = 'invalid-feedback';
                            errorElement.textContent = errorMessage;
                            input.parentNode.appendChild(errorElement);
                        }
                    });
                } else if (data.success) {
                    window.location.href = data.redirect;
                }
            })
            .catch(error => console.error('Error:', error));
    });
});