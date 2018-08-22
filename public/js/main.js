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
  plugHtml("pergunta", array[counter]['questao']);
  counter++
  // plugHtml("pergunta", "Acabou!");
}

function cronometro(segundos) {
  let novo = segundos
  const interval = setInterval(() => {
    plugHtml("tempo", segundos)
    if (segundos <= 0) {
      clearInterval(interval)
      mostrarPergunta()
      cronometro(novo)
    }
    segundos--
  }, 1000)
}

mostrarPergunta()
cronometro(3)
