// note:
// the favorite icon is not working properly
const iconTrigger = document.querySelector('#iconTrigger')
const arrow = document.querySelector('#arrow')
const leftbar=document.querySelector('.leftvar')
const favorite=document.querySelector('.favorite')
const mainMenu = document.querySelector('.mainMenu')
const closebars = document.querySelector('.closebars')
// const showbars = document.querySelector('.showbars')




iconTrigger.addEventListener('click',()=>{
    if(arrow.classList.contains('fa-chevron-right')){
        arrow.classList.remove('fa-chevron-right')
        arrow.classList.add('fa-chevron-left')
        // Sidebar
        leftbar.classList.add('show')
        leftbar.classList.remove('hide')

    }else{
        arrow.classList.add('fa-chevron-right')
        arrow.classList.remove('fa-chevron-left')
        // Sidebar
        leftbar.classList.remove('show')
        leftbar.classList.add('hide')
     

    }
})
// favorite icon
// favorite.addEventListener('click',()=>{
//     if(favorite.classList.contains('far')){
//         favorite.classList.add('fas')
//         favorite.classList.remove('far')
//         alert('Add Favorite Success')

//     }else{
//         favorite.classList.remove('fas')
//         favorite.classList.add('far')
//         alert('Remove Favorite Success')

//     }

// })



// showbars.addEventListener('click',show);
// closebars.addEventListener('click',close);
// function show(){
//     mainMenu.style.display='flex';
//     mainMenu.style.top='0';
  
    
// }
// function close(){
//     mainMenu.style.display='none';
// }

