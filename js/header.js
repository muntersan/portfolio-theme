const headerScroll = () => {
    
    // get header from DOM
    const header = document.querySelector('.site-header')

    const addClassToHeader = () => {

        if ( window.scrollY >80) {
            header.classList.add('site-header--scrolled')
        } else {
            header.classList.remove('site-header--scrolled')
        }


    }

    window.addEventListener('scroll', addClassToHeader)
}

headerScroll();