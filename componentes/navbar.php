<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-center">
    <img class="logo" src="../img/Logo (2).png" alt="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"     >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <!-- Navbar Links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./home.php"><i class="fas fa-home"></i> Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../site/sobre.php">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../site/servicos.php">Serviços</a>
        </li>
      </ul>

      <div class="input-container ms-3">
        <img class="icone_nav" src="../img/icone.png" alt="icone" id="search-icon">
        <input type="text" id="search-input" name="text" class="input" placeholder="Pesquise aqui..." style="display: none;">
      </div>
    </div>
  </div>
</nav>

<script>
  const searchIcon = document.getElementById('search-icon');
  const searchInput = document.getElementById('search-input');

  // Adiciona o evento de clique no ícone de pesquisa
  searchIcon.addEventListener('click', function(event) {
      event.stopPropagation(); // Impede que o evento de clique se propague
      if (searchInput.style.display === 'none' || searchInput.style.display === '') {
          searchInput.style.display = 'block'; // Mostra o campo de pesquisa
          searchInput.focus(); // Foca no campo de entrada
      } else {
          searchInput.style.display = 'none'; // Esconde o campo de pesquisa
      }
  });

  // Adiciona o evento de clique no documento
  document.addEventListener('click', function(event) {
      if (event.target !== searchInput && event.target !== searchIcon) {
          searchInput.style.display = 'none'; // Esconde o campo de pesquisa se clicar fora
      }
  });
</script>


</body>
</html>