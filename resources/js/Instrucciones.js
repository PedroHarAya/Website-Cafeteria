const eyes = ['eye1', 'eye2'];

eyes.forEach(id => {
  const eyeIcon = document.getElementById(id);
  const passwordField = eyeIcon.previousElementSibling;

  eyeIcon.addEventListener('click', () => {
    if (passwordField.type === "password" && passwordField.value) {
        passwordField.type = 'text';
        eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        passwordField.type = 'password';
        eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
    }
  });
});

/*Validación de formulario*/
document.getElementById('registroForm').addEventListener('submit', function(event) {
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm_password').value;

  if (password !== confirmPassword) {
    event.preventDefault(); // Detiene el envío del formulario
    mostrarMensaje("⚠️ Las contraseñas no coinciden");
  }
});

function mostrarMensaje(texto) {
  const mensaje = document.getElementById('mensaje');
  mensaje.textContent = texto;
  mensaje.style.display = "block";

  // Oculta el mensaje automáticamente después de 3 segundos
  setTimeout(() => {
    mensaje.style.display = "none";
  }, 2500);
}

