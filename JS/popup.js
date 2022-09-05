// POP-UP DE CONSULTAS
const button = document.querySelector('button')
const popup = document.querySelector ('.popup-wrapper')
const closeButton = document.querySelector('.popup-close')

// DEVERIA SER POP-UP DE CONFIRMAR CONSULTA
const buttonA = document.querySelector('buttonA')
const popupA = document.querySelector ('.popup-wrapperA')
const closeButtonA = document.querySelector('.popup-closeA')

// ABRE POP-UP
button.addEventListener('click', () => {
    popup.style.display = 'block'

})
// FECHA POP-UP
closeButton.addEventListener('click', () => {
    popup.style.display = 'none'
})


// DEVERIA ABRIR E FECHAR POP-UP DE CONFIRMAR CONSULTA
buttonA.addEventListener('click', () => {
    alert("CONSULTA MARCADA")
})

closeButtonA.addEventListener('click', () => {
    popupA.style.display = 'none'
})