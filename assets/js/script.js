const masTexto = document.getElementById("masTexto");
const leerMas = document.getElementsByClassName("btn");
const enviarForm = document.getElementById("enviarForm");

function mostrar() {
  var x = document.getElementById("masTexto");
   if (x.style.display === 'none') {
       x.style.display = 'block';
   } else {
       x.style.display = 'none';
   }
}

(function error() { 
    'use strict';
    window.addEventListener ('click', function() {
        // extrae el formulario al que queremos revisar
        var form = document.getElementsByClassName('needs-validation');
        // Filtra el form y evita que sea procesado
        var validation = Array.prototype.filter.call(form, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation(); 
                }
                form.classList.add('was-validated');
            }, false );
        });
    }, false);
})();

document.addEventListener("DOMContentLoaded", function () {
    const navbarHeight = document.querySelector('.navbar').offsetHeight;

    document.querySelectorAll('.navbar-nav a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                window.scrollTo({
                    top: target.offsetTop - navbarHeight,
                    behavior: 'smooth'
                });
            }
        });
    });
});