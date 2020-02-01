const modal1 = document.querySelector('.bg_modal')
const modal2 = document.querySelector('.bg_modal2')
const modal3 = document.querySelector('.bg_modal3')

document.querySelector('.padrao').addEventListener('click', () => {
    modal1.style.display = 'flex'     
});

document.querySelector('.x_btn1').addEventListener('click', () => {
    modal1.style.display = 'none'
})

document.querySelector('.por_video').addEventListener('click', () => {
    modal2.style.display = 'flex'
})

document.querySelector('.x_btn2').addEventListener('click', () => {
    modal2.style.display = 'none'
})

document.querySelector('.whatsapp').addEventListener('click', () => {
    modal3.style.display = 'flex'
})

document.querySelector('.x_btn3').addEventListener('click', () => {
    modal3.style.display = 'none'
})

window.onclick = mod => {
    if (mod.target === modal1 || mod.target === modal2 || mod.target === modal3) {
        modal1.style.display = 'none'
        modal2.style.display = 'none'
        modal3.style.display = 'none'
    }
}

