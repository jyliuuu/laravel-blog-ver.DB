const cursorTag = document.querySelector("div.cursor")
const balls = cursorTag.querySelectorAll("div")
const ballMessage = cursorTag.querySelector("div span")
const images = document.querySelectorAll("img[data-hover]")

let aimX = 0
let aimY = 0

// speed calculation
balls.forEach((ball, index) => {
    let currentX = 0
    let currentY = 0

    let speed = 0.15 - index * 0.01

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

// cursor reacts to image and adds text in this method
images.forEach(image => {
        image.addEventListener("mouseover", function() {
        ballMessage.innerHTML = image.getAttribute('data-hover')
    })
        image.addEventListener("mouseout", function() {
        ballMessage.innerHTML = " "
    })
})
