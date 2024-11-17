<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>      

<?php 
include_once('.././componentes/navbar.php');

?>
    <div class="header-formulario">
        <div class="topic-forms">
            Entre em contato conosco!
        </div>
        
        <div class="hr">
            <hr>
        </div>

        <!-- Seção de Contato -->
        <div class="sessao-contato">
            <div class="contato-container">
                <!-- Formulário de Contato -->
                <div class="contato-form">
                    <h2>Entre em Contato</h2>
                    <form>
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" placeholder="Digite seu nome" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Digite um e-mail válido" required>

                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" placeholder="Digite sua mensagem aqui..." required></textarea>

                        <input type="submit" value="Enviar">
                    </form>
                </div>

                <!-- Detalhes de Contato -->
                <div class="contato-details">
                    <h2>Fale Conosco</h2>
                    <p>Tem alguma dúvida ou comentário? Nos envie uma mensagem!</p>
                    <img src="../img/contate.png" alt="Imagem de Contato">
                </div>
                </div>
                </div>


            <!-- Tipos de Contato (Movido para baixo do formulário) -->
            <div class="container">
                <div class="contato">
                    <div class="numero-contato">
                        <img src="../img/telefone.png" alt=""> Ligue para nós
                    </div>
                    <div class="tel-text">
                        1 (234) 567-891, 1 (234) 987-654
                    </div>
                </div>

                <div class="localizacao">
                    <div class="inflocal">
                        <img src="../img/localizacao.png" alt=""> Localização
                    </div>
                    <div class="text-local">
                    Brasil1

                    Rua da Liberdade, 123
Centro, Cidade Nova - SP
CEP: 01023-456 
                    </div>
                </div>

                <div class="horario">
                    <div class="horas">
                        <img class="image-contato" src="../img/horario.png" height="35" width="35"> Atendimento
                    </div>
                    <div class="text-horario">
                        Seg – Sex: 11h – 20h, Sáb – Dom: 6h – 20h
                    </div>
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
