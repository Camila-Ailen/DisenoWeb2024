document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var nombre = document.getElementById('nombre').value.trim();
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();

    var nombreError = document.getElementById('nombreError');
    var emailError = document.getElementById('emailError');
    var passwordError = document.getElementById('passwordError');

    var hasError = false;

    if (nombre === '') {
        nombreError.textContent = 'El nombre es obligatorio';
        nombreError.style.display = 'block';
        hasError = true;
    } else {
        nombreError.style.display = 'none';
    }

    if (email === '') {
        emailError.textContent = 'El email es obligatorio';
        emailError.style.display = 'block';
        hasError = true;
    } else {
        emailError.style.display = 'none';
    }

    if (password === '') {
        passwordError.textContent = 'La contraseña es obligatoria';
        passwordError.style.display = 'block';
        hasError = true;
    } else {
        passwordError.style.display = 'none';
    }

    if (!hasError) {
        alert('Formulario enviado exitosamente!');
    }
});
