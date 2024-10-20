
window.addEventListener ("scroll", function(){
    let Nav = this.document.querySelector('#Nav')
    Nav.classList.toggle('rolagem', this.window.scrollY > 0)
})