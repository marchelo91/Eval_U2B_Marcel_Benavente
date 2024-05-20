<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría y desarrollo de software</title>
     <!-- Bootstrap CSS línea 9-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formulario.css">
  </head>
  <body>

  <div class="contact-form-wrapper">
        <div class="contact-form-container">
        <form id="contact-form">
                <h2>Contáctanos</h2>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido">
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion">
                </div>
                <div class="form-group">
                    <label for="mensaje">Escribe un mensaje</label>
                    <textarea id="mensaje" name="mensaje"></textarea>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="terminos" name="terminos" required>
                    <label for="terminos">Acepto los términos y condiciones</label>
                </div>
                <button type="submit">Enviar</button>
                <p id="response-message"></p>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="formContacto.js"></script>
</body>
</html>