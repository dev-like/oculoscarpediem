//inicialização dos arrays
var slides = []
var nextButton = []
var prevButton = []
var currentSlideIndex = []

//conta a quantidade de produtos
const products = document.querySelectorAll('[data-js="vaso"]')

//atribui valores aos arrays de acordo com o numero de produtos ligando o js ao html
for (let index = 1; index <= products.length; index++) {
  slides[index] = document.querySelectorAll('[data-js="vaso__item'+index+'"]')
  nextButton[index] = document.querySelector('[data-js="vaso__button--next'+index+'"]')
  prevButton[index] = document.querySelector('[data-js="vaso__button--prev'+index+'"]')
  //variável para controle de índice
  currentSlideIndex[index] = 0
}

//implementa um event prev e um next para cada produto, de acordo com o número de imagens 
for (let index = 1; index <= products.length; index++) {

  //event next
  nextButton[index].addEventListener('click', () => {
    //verifica de esta na imagem final, se sim então manda para a primeira
    if (currentSlideIndex[index] === slides[index].length -1) {
      currentSlideIndex[index] = 0
    } else {
      currentSlideIndex[index]++
    }

    //faz uma iteração nas imagens e oculta cada
    slides[index].forEach( slide => {
      slide.classList.remove('vaso__item--visible')
    })

    //deixa a próxima imagem visível
    slides[index][currentSlideIndex[index]].classList.add('vaso__item--visible')
  })

  //event prev
  prevButton[index].addEventListener('click', () => {
    //verifica se esta na primeira imagem, se sim então manda para a última
    if (currentSlideIndex[index] === 0) {
      currentSlideIndex[index] = slides[index].length -1
    } else {
      currentSlideIndex[index]--
    }
  
    //faz uma iteração nas imagens e oculta cada uma
    slides[index].forEach( slide => {
      slide.classList.remove('vaso__item--visible')
    })
  
    //deixa a imagem anterior visível
    slides[index][currentSlideIndex[index]].classList.add('vaso__item--visible')
  })
  
}
