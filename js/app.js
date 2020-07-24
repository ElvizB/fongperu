//Initialize Cloud Firestore through Firebase
firebase.initializeApp({
  apiKey: "AIzaSyBOdtnhzIS9PdoIZstVrFUrmciPW5Um1Fk",
  authDomain: "whitepoint-contact.firebaseapp.com",
  projectId: "whitepoint-contact",
});

var db = firebase.firestore();

// Primera
const formulario = document.getElementById("formulario"),
  modalenviado = document.getElementById("modalenviado"),
  respuesta = document.getElementById("respuesta");

formulario.addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();
  $(".bg-alerta").remove();
  $(".bg-advertencia").remove();
  const nombre = getInputVal("nombre"),
    celular = getInputVal("celular"),
    email = getInputVal("email"),
    recaptchaValidate = getInputVal("g-recaptcha-error");

  if (nombre == "" || nombre == null) {
    formulario.nombre.focus();
    cambiarColor("nombre");
    mostrarAlert("¿Cuál es tu nombre?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(nombre)) {
      formulario.nombre.focus();
      cambiarColor("nombre");
      showAdvert("Nombre inválido");
      return false;
    }
  }

  if (celular == "" || celular == null) {
    formulario.celular.focus();
    cambiarColor("celular");
    mostrarAlert("¿Cuál es tu celular?");
    return false;
  } else {
    const expresion = /^[0-9]{9}$/;
    if (!expresion.test(celular)) {
      formulario.celular.focus();
      cambiarColor("celular");
      showAdvert("Número de celular inválido");
      return false;
    }
  }

  if (email == "" || email == null) {
    formulario.email.focus();
    cambiarColor("email");
    mostrarAlert("¿Cuál es tu email?");
    return false;
  } else {
    const expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (!expresion.test(email)) {
      formulario.email.focus();
      cambiarColor("email");
      showAdvert("Email inválido");
      return false;
    }
  }

  const response = grecaptcha.getResponse();
  if (response.length == 0) {
    document.getElementById("g-recaptcha-error").innerHTML =
      '<div class="bg-alerta z-depth-2 animated bounceIn fast">Marque la opción</div>';
    return false;
  } else {
    document.getElementById("g-recaptcha-error").innerHTML = "";
  }

  var datos = new FormData(formulario);
  fetch("app/form.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });

  //document.querySelector(".alertaenviado").style.display = "block";
  showEnviado("Datos Enviados");
  guardar();
  /*  setTimeout(function() {
    desaparecerenviado();
  }, 3000);*/
  document.getElementById("formulario").reset();
  grecaptcha.reset();
  //$("form").submit();
  return true;
}

// Agregar documentos
function guardar() {
  var nombre = document.getElementById("nombre").value;
  var celular = document.getElementById("celular").value;
  var email = document.getElementById("email").value;

  db.collection("contactos").add({
    nombre: nombre,
    celular: celular,
    email: email,
    fecha: firebase.firestore.Timestamp.fromDate(new Date()),
  });
  //db.collection("contactos").orderBy("fecha", "desc");
}
// leer documentos
/*var verdatos = document.getElementById("registros");
db.collection("contactos").onSnapshot(querySnapshot => {
  verdatos.innerHTML = "";
  querySnapshot.forEach(doc => {
    //console.log(`${doc.id} => ${doc.data()}`);
    verdatos.innerHTML += `
                          <tr>
                              <td></td>
                              <td>${doc.data().nombre}</td>
                              <td>${doc.data().email}</td>
                              <td>${doc.data().celular}</td>
                              <td>${doc.data().asunto}</td>
                              <td>${doc.data().mensaje}</td>
                          </tr>
                        `;
  });
});*/

$("input").focus(function () {
  $(".bg-alerta").remove();
  colorDefault("nombre");
  colorDefault("celular");
  colorDefault("email");
});

function getInputVal(id) {
  return document.getElementById(id).value;
}

function colorDefault(dato) {
  return document
    .getElementById(dato)
    .setAttribute("style", "border-bottom: 1px solid #ced4da");
}

function cambiarColor(dato) {
  return document
    .getElementById(dato)
    .setAttribute(
      "style",
      "border-bottom: 1px solid #ced4da !important;box-shadow: 0 1px 0 0 #ced4da !important;"
    );
}

function mostrarAlert(texto) {
  respuesta.innerHTML =
    '<div class="bg-alerta z-depth-2 animated bounceIn fast"> ' +
    texto +
    "</div>";
}

function showAdvert(texto) {
  respuesta.innerHTML =
    '<div class="bg-advertencia z-depth-2 bounceIn fast">' + texto + "</div>";
}

function showEnviado(texto) {
  var mensajemodal = `<div class="modal-wrap" id="modalenviado">
                              <div class="mensaje-modal-content z-depth-3 animated bounceIn fast">
                                  <div class="mensaje-modal-header ">
                                      <p class="heading lead text-center">Mensaje Enviado</p>
                                      <button type="button" class="close" id="btnremove">
                                        <span aria-hidden="true" class="white-text">×</span>
                                      </button>
                                  </div>
                                  <div class="mensaje-modal-body">
                                      <div class="text-center">
                                          <i class="fas fa-check fa-3x green-text mb-3 animated rotateIn"></i>
                                          <p>${texto}</p>
                                      </div>
                                  </div>
                                  <div class="modal-footer justify-content-center">
                                     
                                  </div>
                              </div>
                            </div>
                            `;
  $("body").append(mensajemodal);
  //cerrando modal
  $("#btnremove").click(function () {
    $(".modal-wrap").remove();
  });
}

/*function desaparecerenviado() {
  respuesta
    .querySelector(".bg-enviando")
    .setAttribute("style", "display: none");
}*/
