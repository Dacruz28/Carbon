
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="../css/sobre.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php 
include_once('.././componentes/navbar.php');
?> 


    <div class="background-image-div">
        


        <!-- Cabeçalho -->
        <div class="cabeçalho text-center">
            
            <img class="imgs"src="../img/certo.png" height="500" width="900" alt="Logo da Empresa">
        </div>

        <!-- Sobre nós -->
        <section class="oq-fazemos">
            <h2 id="sobre">Sobre nós</h2>
            <p class="oq">
Somos uma empresa dedicada a desenvolver soluções tecnológicas inovadoras, com o propósito de tornar o cotidiano mais eficiente e acessível. 
Nosso compromisso com a excelência e a modernização nos permite criar produtos e serviços que atendem às demandas de um mercado em constante evolução.
Com uma equipe experiente e focada em resultados, acreditamos que a tecnologia deve ser sinônimo de liberdade e praticidade, simplificando processos e melhorando a qualidade de vida. 
Nosso foco está em construir parcerias sólidas e oferecer ferramentas que realmente façam a diferença para nossos clientes.
            
            </p>
        </section>

        <!-- Missão -->
        <section class="a">
            <img src="../img/Sobre nos.jpg" height="200" width="200" alt="Imagem sobre a empresa">
            <div class="a1">
                <h2 id="sobre">Missão</h2>
                <p>Nossa missão é transformar a tecnologia em uma ferramenta de liberdade e eficiência, oferecendo soluções que simplifiquem o cotidiano e impulsionem o crescimento de nossos clientes. Buscamos inovação constante e excelência em cada projeto, acreditando que a tecnologia deve estar ao alcance de todos e ser sinônimo de confiabilidade, segurança e praticidade. Trabalhamos com dedicação para criar um impacto positivo, promovendo melhorias significativas na vida das pessoas e nas organizações que atendemos..</p>
            </div>
        </section>

        <!-- Valores -->
        <section class="b1">
            <div class="b">
                <img src="../img/valors.jpg"  height="210" width="200"alt="Imagem sobre os valores">
            </div>
            <div class="b1-content">
                <h2 id="sobre">Valores</h2>
                <p>Nossos valores são guiados pelo compromisso com a integridade, a inovação e o respeito. Acreditamos na importância de evoluir juntos, criando soluções que respeitem as necessidades de cada cliente e promovam o bem-estar coletivo. Valorizamos a transparência, a ética e a coragem para enfrentar desafios, transformando ideias em realidades que facilitam e enriquecem o dia a dia. Trabalhamos para construir relacionamentos sólidos e de confiança, inspirados pela missão de fazer da tecnologia um meio para melhorar a vida das pessoas e a eficiência das organizações.</p>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php 
include_once('.././componentes/footer.php');

?>
</body>
</html>
