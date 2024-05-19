// Extrae los input. Si no están vacios y se aceptaron los terminos, se muestra en consola los datos.
function mostrarformulario() {



    let inputnombre = document.getElementById("nombreCompleto").value;
    let inputemail = document.getElementById("inputEmail4").value;
    let inputdireccion = document.getElementById("direccion").value;
    let inputcasadepa = document.getElementById("casaDepartamento").value;
    let inputnumero = document.getElementById("numero").value;
    let servicio = document.getElementById("servicios").value;
    let comentario = document.getElementById("floatingTextarea2").value;
    const checkterminos = document.getElementById('exampleCheck1');


    if (inputnombre == "") {

    } else if (inputemail == " ") {

    } else if (inputdireccion == "") {

    } else if (inputcasadepa == "") {

    } else if (inputnumero == "") {


    } else if (servicio == "") {


    } else if (checkterminos.checked) {
        Swal.fire({
            title: "Éxito!",
            text: "Formulario enviado exitosamente!",
            icon: "success"
          });

        var datosformulario = inputnombre + "\n" + inputemail + "\n" + inputdireccion + "\n" + inputcasadepa + "\n" + inputnumero + "\n" + servicio + "\n" + comentario;
        console.log(datosformulario);

    
    }
}
 // Esto es para evitar que, cuando se ponga el boton enviar, se reinicie la pagina, ya que el form hace submit por default y actualiza pag
formulario.addEventListener('submit', function (event) {
    event.preventDefault();
});


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

/*Listener to avoid overlap when clicking on links on navbar. Avoids navbar overlapping content/title*/
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

/*Listener for dark mode toggle*/
document.addEventListener('DOMContentLoaded', (event) => {
    const htmlElement = document.documentElement;
    const switchElement = document.getElementById('darkModeSwitch');
    const currentTheme = localStorage.getItem('bsTheme') || 'light';
    htmlElement.setAttribute('data-bs-theme', currentTheme);
    switchElement.checked = currentTheme === 'dark';

    switchElement.addEventListener('change', function () {
        if (this.checked) {
            htmlElement.setAttribute('data-bs-theme', 'dark');
            localStorage.setItem('bsTheme', 'dark');
        } else {
            htmlElement.setAttribute('data-bs-theme', 'light');
            localStorage.setItem('bsTheme', 'light');
        }
    });
});