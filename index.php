<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form" action="send.php" method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    <input type="email" name="email" id="email" placeholder="Correo">
    <button type="submit" onClick="submitform()"; return false;>Enviar</button>
    </form>
    <script>
        function submitform(){
      	alert("Formulario enviado desde Java Script");
      	document.getElementById('form').submit();
      }
    </script>
</body>
</html>