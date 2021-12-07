let mouseCursor = document.querySelector(".cursor")
let navLinks = document.querySelectorAll('.hover-this a')
let redirects = document.querySelectorAll('.hover-this')

window.addEventListener('mousemove', cursor)

function cursor(e){
    mouseCursor.style.top= e.pageY + 'px'
    mouseCursor.style.left = e.pageX + 'px'
}

navLinks.forEach(link => {
    link.addEventListener('mouseleave', () => {
        mouseCursor.classList.remove('link-grow')
    })

    link.addEventListener('mouseover', () => {
        mouseCursor.classList.add('link-grow')
    })
})

redirects.forEach(text => {
    text.addEventListener('mouseleave', () => {
        mouseCursor.classList.remove('link-grow')
    })

    text.addEventListener('mouseover', () => {
        mouseCursor.classList.add('link-grow')
    })
})



