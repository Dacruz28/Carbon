window.addEventListener("scroll", function() {
    let Nav = document.querySelector('#Nav'); // Corrigido para remover 'this.'
    Nav.classList.toggle('rolagem', window.scrollY > 0); // Corrigido para remover 'this.'
});