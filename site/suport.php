<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title> 
    <link rel="stylesheet" href=".././css/suport.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="pai">
  
<?php 
include_once('.././componentes/navbar.php');
?>


<section class="support-info">
    <h2>Entre em Contato com o Suporte</h2>
    <p>Se você tiver alguma dúvida, problema ou sugestão, entre em contato conosco através do formulário abaixo. Nossa equipe responderá o mais rápido possível.</p>
    <hr>
  
</section>

<div class="manda">

    <section class="support-form">
        <form action="#" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Assunto:</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="message">Relatar problema:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

         

            <button type="submit">Enviar</button>

        </form>
    </section>
    <div class="imge">

    <div class="img1">
        <img src="../img/suport1.jpg" alt="Imagem ilustrativa de suporte">
    </div>
    </div>
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php 
include_once('.././componentes/footer.php');

?>
</body>
</html>