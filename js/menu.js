const menu = () => {
    
    //get elements from DOM
    const menuButton = document.querySelector('.menu-button')
    const menu = document.querySelector('.menu')

    //open menu function
    const openMenu = () => {

        //add class to button
        menuButton.classList.toggle('menu-button--close')

        //add class to menu 
        menu.classList.toggle('menu--opened')
    }

    menuButton.addEventListener('click', openMenu)
}

menu();