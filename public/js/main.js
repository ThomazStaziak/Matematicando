const form = document.querySelector('#form')
const input = document.querySelector('#numero')
const background = document.body
const time = 40
let counter = 0
let tempoResposta = 0
let tempoRestante = 0
let quantidadeCertas = 0
let quantidadeErradas = 0
let pontuacao = 0

function sleep(milliseconds) {
  var start = new Date().getTime()
  for (let i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break
    }
  }
}

function plugHtml(id, algo) {
  document.getElementById(id).innerHTML = algo;
}

function mostrarPergunta() {
  plugHtml('pergunta', array[counter]['questao'])
  counter++
}

function piscarTela(cor) {
  background.style.backgroundColor = cor
}

function cronometro(segundos) {
  const interval = setInterval(() => {
    if (counter >= 5) {
      tempoRestante = segundos
      clearInterval(interval)
    }
    if (segundos < 10) {
      tempoResposta = segundos
      plugHtml('pontuacao', pontuacao)
      plugHtml('tempo', '00:0' + segundos)
    } else {
      tempoResposta = segundos
      plugHtml('pontuacao', pontuacao)
      plugHtml('tempo', '00:' + segundos)
    }
    if (segundos <= 0) {
      plugHtml('pergunta', array[5]['questao'])
      clearInterval(interval)
    }
    segundos--
  }, 1000)
}
input.addEventListener('keypress', (evento) => {
  if (evento.charCode === 13) {
    if (counter > 5) {
      piscarTela('purple')
      plugHtml('pontuacao', array[5]['questao'])
    }
    let resposta_certa = array[counter - 1]['resposta'];
    let resposta = evento.srcElement.value;
    evento.srcElement.value = ""
    if(resposta == resposta_certa){
      if (tempoResposta >= 35) {
        pontuacao += 2000
      } else if (tempoResposta >= 30) {
        pontuacao += 1800
      } else if (tempoResposta >= 25) {
        pontuacao += 1600
      } else if (tempoResposta >= 20) {
        pontuacao += 1400
      } else if (tempoResposta >= 15) {
        pontuacao += 1200
      } else if (tempoResposta >= 10) {
        pontuacao += 1000
      } else if (tempoResposta >= 5) {
        pontuacao += 800
      } else if (tempoResposta < 5) {
        pontuacao += 600
      }
      piscarTela('green')
      setTimeout(() => {
        piscarTela('white')
        mostrarPergunta()
        plugHtml('pontuacao', pontuacao)
      }, 400)
    } else {
      pontuacao -= 300
      piscarTela('red')
      setTimeout(() => {
        piscarTela('white')
        mostrarPergunta()
        plugHtml('pontuacao', pontuacao)
      }, 400)
    }
  }
})

mostrarPergunta()
cronometro(time)
