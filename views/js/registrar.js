$(document).ready(function () {
  $("#formRegistro").submit(function (event) {
    event.preventDefault();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var modulo_usuario = $("#modulo_usuario").val();
    console.log(nombre);
    console.log(apellido);
    console.log(telefono);
    console.log(correo);
    console.log(modulo_usuario);

    $.ajax({
      url: "ajax/usuario.php",
      type: "POST",
      data: {
        nombre: nombre,
        apellido: apellido,
        telefono: telefono,
        correo: correo,
        modulo_usuario: modulo_usuario,
      },
      success: function (data) {
        console.log(data);
        alert(data);
        $("#formRegistro")[0].reset();
      },
      error: function (data) {
        console.log(data);
      },
    });
  });
});
