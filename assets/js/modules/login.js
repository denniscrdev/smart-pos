// Seleccionamos el formulario y los inputs por su ID
const formulario = document.querySelector("#formulario");
const correo = document.querySelector("#correo");
const clave = document.querySelector("#clave");

// Seleccionamos los contenedores de errores
const errorCorreo = document.querySelector("#errorCorreo");
const errorClave = document.querySelector("#errorClave");

// Esperamos que todo el DOM esté cargado
document.addEventListener("DOMContentLoaded", function () {

  // Escuchamos el evento "submit" del formulario
  formulario.addEventListener("submit", function (e) {
    e.preventDefault(); // Evita que se recargue la página automáticamente

    // Limpiamos los mensajes de error anteriores
    errorCorreo.textContent = "";
    errorClave.textContent = "";

    // Validamos que el campo correo no esté vacío
    if (correo.value == "") {
      errorCorreo.textContent = "EL CORREO ES REQUERIDO";

      // Validamos que el campo contraseña no esté vacío
    } else if (clave.value == "") {
      errorClave.textContent = "LA CONTRASEÑA ES REQUERIDA";

    } else {
      // Definimos la URL para enviar los datos
      const url = base_url + "home/validar";

      // Creamos un objeto FormData con los datos del formulario
      const data = new FormData(this);

      // Instanciamos un objeto XMLHttpRequest
      const http = new XMLHttpRequest();

      // Abrimos la conexión con método POST y URL destino
      http.open("POST", url, true);

      // Enviamos los datos al servidor
      http.send(data);

      // Escuchamos cambios en el estado de la petición
      http.onreadystatechange = function () {
        // Verificamos que la petición esté lista y haya tenido éxito
        if (this.readyState == 4 && this.status == 200) {

          // Convertimos la respuesta en objeto JSON
          const res = JSON.parse(this.responseText);
          Swal.fire({
            title: "mensaje",
            text: res.msg,
            icon: res.type
          });
          if (res.type == 'success') {

            setTimeout(() => {
              let timerInterval;
              Swal.fire({
                title: res.msg,
                html: "sera redireccionado en <b></b> milliseconds.",
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                  Swal.showLoading();
                  const timer = Swal.getPopup().querySelector("b");
                  timerInterval = setInterval(() => {
                    timer.textContent = `${Swal.getTimerLeft()}`;
                  }, 100);
                },
                willClose: () => {
                  clearInterval(timerInterval);
                }
              }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location = base_url + 'admin';
                }
              });
            }, 2000);


          }

        }
      };
    }
  });
});





