const form = document.querySelector('#form')
const input = document.querySelector('#numero')
let counter = 0

input.addEventListener('keypress', (evento) => {
  if (evento.charCode === 13) {
    form.submit()
  }
})

function plugHtml(id, algo) {
  document.getElementById(id).innerHTML = algo;
}

function mostrarPergunta() {
  plugHtml('pergunta', array[counter]['questao']);
  counter++
}

function cronometro(segundos) {
  let novo = segundos
  const interval = setInterval(() => {
    if (segundos < 10) {
      plugHtml('tempo', "00:0" + segundos)
    } else {
      plugHtml('tempo', "00:" + segundos)
    }
    if (segundos <= 0) {
      clearInterval(interval)
      mostrarPergunta()
      cronometro(novo)
    }
    segundos--
  }, 1000)
}

mostrarPergunta()
cronometro(10)

let teste = "Foi retardado"
