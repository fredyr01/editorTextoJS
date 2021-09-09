<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/richtext.min.css">
    <script src="js/jquery.richtext.js"></script>

    

    <title>Editor</title>
  </head>
  <body>

    <div class="container">
      <form action="">
        <input type="text" name="RichText" id="RichText">
        <button class="btn btn-primary mt-3" type="button" id="enviar">Enviar</button>
      </form>

      <div class="alert alert-primary mt-2" role="alert">
        <span id="mensaje"></span>
      </div>
    </div>

    

    <script>

      $(document).ready(function () {
        $('#RichText').richText({
          bold: false,
          italic: false,
          underline: false,
          leftAlign: false,
          centerAlign: false,
          rightAlign: false,
          justify: false,

          ol: false,
          ul: false,

          // title
          heading: false,

          fonts: false,
          fontList: false,
          fontSize: false,

          // uploads
          imageUpload: false,
          fileUpload: false,

          // media
          videoEmbed: false,

          // link
          urls: false,

          // tables
          table: false,

          // code
          removeStyles: false,
          code: false,
        });

        $('#enviar').click(function (e) { 
        e.preventDefault();
        console.log("me diste click");
        let correccion = $('#RichText').val();

        let datos = {'correccion':correccion};

        $.get("http://localhost/editor/lectura.php",datos,
        function(data){

          console.log(data);
            $('#mensaje').html(data);

        });

        });

      });


    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>