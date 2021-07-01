/* making list items show when you press the menu button */

const showBtn = document.querySelector('.navBtn');
const topNav = document.querySelector('.top-nav');

showBtn.addEventListener('click',function(){
    if(topNav.classList.contains('showNav')){
        topNav.classList.remove('showNav');
        showBtn.innerHTML = '<i class="fas fa-bars"></i>';
    }else{
        topNav.classList.add('showNav');
        showBtn.innerHTML = '<i class="fas fa-times"></i>';
    }
});



/* Light box */
var lightbox = new SimpleLightbox('.gallery a', { /* options */ });