const form = document.querySelector('#form')
const input = document.querySelector('#numero')
const background = document.body;
let counter = 0

input.addEventListener('keypress', (evento) => {
  if (evento.charCode === 13) {
    form.submit()
  }
})

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (let i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

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
    if (segundos < 10 && segundos >= 0) {
      plugHtml('tempo', '00:0' + segundos)
    } else {
      plugHtml('tempo', '00:' + segundos)
    }
    if (segundos <= 0) {
      piscarTela('red')
      clearInterval(interval)
      mostrarPergunta()
      piscarTela('white')
      cronometro(novo)
    }
    segundos--
  }, 1000)
}

function piscarTela(cor) {
  background.style.backgroundColor = cor
}

// function cronometro(segundos) {
//   let novo = segundos
//   const interval = setInterval(() => {
//     if (segundos < 10) {
//       plugHtml('tempo', "00:0" + segundos)
//     } else {
//       plugHtml('tempo', "00:" + segundos)
//     }
//     if (segundos <= 0) {
//       clearInterval(interval)
//     }
//     segundos--
//   }, 1000)
// }

mostrarPergunta()
cronometro(5)
