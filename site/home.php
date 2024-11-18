<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbon - Inovação Tecnológica Sustentável</title> 
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>

  
<?php 
include_once('.././componentes/navbar.php');

?>

<style>
        a {
            text-decoration: none;
        }
    </style>


  <div class="background-image-div">
 <!-- Navbar Links >
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagem1.jpg" class="d-block w-100" alt="Imagem 1">
        </div>
        <div class="carousel-item">
          <img src="imagem2.jpg" class="d-block w-100" alt="Imagem 2">
        </div>
        <div class="carousel-item">
          <img src="imagem3.jpg" class="d-block w-100" alt="Imagem 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    -->

    <!-- Título -->
    <div class="titulo text-center">
      <p>Carbon</p>
    </div>

    <!-- Subtítulo -->
    <div class="sub text-center">
      <p>A estrutura além da tecnológica</p>
    </div>

  </div>


  <!-- Box 1 -->
  <div class="box1">
    <div class="title">
        <p1>A EMPRESA</p1>
    </div>  
    
    <div class="conteudo">
        <p2> Somos uma empresa dedicada a desenvolver soluções tecnológicas inovadoras, com o propósito de tornar o cotidiano mais eficiente e acessível. Nosso compromisso com a excelência e a modernização nos permite criar produtos e serviços que atendem às demandas de um mercado em constante evolução.
Com uma equipe experiente e focada em resultados, acreditamos que a tecnologia deve ser sinônimo de liberdade e praticidade, simplificando processos e melhorando a qualidade de vida. 
Nosso foco está em construir parcerias sólidas e oferecer ferramentas que realmente façam a diferença para nossos clientes.
            </p2>
    </div>
  </div>

  <div class="box2">
  <a href="./sobre.php">
    <div class="card3">
        <img class="card-img-top" src="../img/Sobre nos.jpg  " alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Sobre nós</h5>
            <p class="card-text">Somos uma empresa focada em criar soluções tecnológicas inovadoras para tornar o cotidiano mais eficiente e acessível.
            </p>
        
           
        </div>
        </a>
    </div>
 <a href="./contato.php">
    <div class="card2">
        <img class="card-img-top" src="../img/contato2.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title1">Contatos</h5>
            <p class="card-text1"> Entre em contato com a Carbon. Estamos prontos para atender suas necessidades com eficiência e agilidade.   </p>
        </div>
        </a>

    </div>
    <a href="./servicos.php">

    <div class="card3">
        <img class="card-img-top" src="../img/suporte.jpeg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Serviços</h5>
            <p class="card-text">Conheça os projetos da Carbon, desenvolvidos para transformar ideias em soluções inovadoras.

            </p>

        </div>
        </a>
    </div>
</div>
 <!-- Footer -->
 
 <?php 
include_once('.././componentes/footer.php');

?>


<script src="menu.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>
