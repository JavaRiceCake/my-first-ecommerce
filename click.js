const topMenu = document.querySelector('.mainMenu');
const show_top_menu_btn = document.querySelector('.show-top-menu');
const close_top_menu_btn = document.querySelector('.close-top-menu')


show_top_menu_btn.addEventListener('click',()=>{
    if(topMenu.classList.contains('close')){
        topMenu.classList.remove('close');
        topMenu.classList.add('show');
        
    }
})
close_top_menu_btn.addEventListener('click',()=>{
    if(topMenu.classList.contains('show')){
        topMenu.classList.remove('show');
        topMenu.classList.add('close');
    }
})
