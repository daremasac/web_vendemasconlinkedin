$.validator.setDefaults({
    submitHandler: function () {
      alert("submitted!");
    },
  });
  
  // Método para validar solo letras
  $.validator.addMethod(
    "lettersonly",
    function (value, element) {
      return this.optional(element) || /^[a-zA-Z\sñáéíóúÁÉÍÓÚÜüñÑ]+$/.test(value);
    },
    "Por favor ingresa solo letras"
  );
  
  $(document).ready(function () {
    $("#formulario").validate({
      rules: {
        name: {
          required: true,
          minlength: 10,
          lettersonly: true,
        },
        email: {
          required: true,
          email: true,
        },
        subject: {
          required: true,
        },
        message: {
          required: true,
        },
      },
      messages: {
        name: {
          required: "Por favor ingresa tu nombre completo",
          minlength: "Tu nombre debe ser de no menos de 10 caracteres",
        },
        message: "Por favor ingresa un comentario",
        email: "Por favor ingresa un correo válido",
        subject: {
          required: "Por favor seleccione un servicio",
        },
      },
      errorElement: "em",
      submitHandler: function (form) {
        // Realizar petición AJAX
        $.ajax({
          type: "POST",
          url: base_url + "mail/enviar.php",
          data: $(form).serialize(),
          success: function (response) {
            Swal.fire({
              title: "Aviso",
              text: "Mensaje enviado",
              icon: "success",
              confirmButtonText: "Aceptar",
              closeOnConfirm: false,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.reload();
              }
            });
          },
          error: function (xhr, status, error) {
            Swal.fire({
              title: "Aviso",
              text: "El mensaje no fue enviado",
              icon: "error",
              confirmButtonText: "Aceptar",
              closeOnConfirm: false,
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.reload();
              }
            });
          },
        });
      },
    });
  });
  