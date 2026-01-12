document.getElementById("icon-menu").addEventListener("click", mostrar_menu);

function mostrar_menu(){

    document.getElementById("move-content").classList.toggle('move-container-all');
    document.getElementById("show-menu").classList.toggle('show-lateral');

}
/*######################################################*/
/* Modo oscuro: toggle y persistencia */
const themeToggle = document.getElementById('theme-toggle');
if(themeToggle){
    const applyIcon = () => {
        const i = themeToggle.querySelector('i');
        if(document.body.classList.contains('dark')){
            i.className = 'fa-solid fa-sun';
        } else {
            i.className = 'fa-solid fa-moon';
        }
    }

    const saved = localStorage.getItem('theme');
    if(saved === 'dark'){
        document.body.classList.add('dark');
    }
    applyIcon();

    themeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark');
        if(document.body.classList.contains('dark')){
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
        applyIcon();
    });
}
/*######################################################*/