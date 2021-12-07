let navLinks = document.querySelectorAll("x-nav-link.hover-this")
// hover on nav bar item
const link = document.querySelectorAll('nav > .hover-this')
// cursor main class
const cursorTag = document.querySelector("div.cursor")
const balls = cursorTag.querySelectorAll("div")
// cursor text appearing
const ballMessage = cursorTag.querySelector("div span")
const images = document.querySelectorAll("img[data-hover]")

let aimX = 0
let aimY = 0

// speed calculation
balls.forEach((ball, index) => {
    let currentX = 0
    let currentY = 0

    let speed = 0.14 - index * 0.008

    const animate = function () {
        currentX += (aimX - currentX) * speed
        currentY += (aimY - currentY) * speed

        ball.style.left = currentX + "px"
        ball.style.top = currentY + "px"

        requestAnimationFrame(animate)
    }

    animate()
})



// follow cursor
document.addEventListener("mousemove", function (event) {
    aimX = event.pageX
    aimY = event.pageY
})

navLinks.forEach(link => {
    link.addEventListener('mouseover', () => {
        cursorTag.classList.add("link-grow")
    })
})

// cursor reacts to image and adds text in this method
images.forEach(image => {
        image.addEventListener("mouseover", function() {
        ballMessage.innerHTML = image.getAttribute('data-hover')
    })
        image.addEventListener("mouseout", function() {
        ballMessage.innerHTML = " "
    })
})
