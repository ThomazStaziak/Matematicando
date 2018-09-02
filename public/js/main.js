const form = document.querySelector('#form')
const logout = document.querySelector('#logout')
const input = document.querySelector('#numero')
const background = document.body
const finalArray = array.length
const time = 60
const audioError = document.getElementById("error-song");
const audioSucess = document.getElementById("correct-song");
const teste = document.getElementById("teste");
let counter = 0
let tempoResposta = 0
let tempoRestante = 0
let pontuacao = 0
let status = ''
let audio = ''

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

function statusPontuacao(){
    if( pontuacao <= 20000){
      status  = 'looser';
    }else if(pontuacao >= 20000) {
      status = 'winner'
    }
  return status;
}

function cronometro(segundos) {
  const interval = setInterval(() => {
    if (counter >= finalArray) {
      tempoRestante = segundos
      clearInterval(interval)
      if (typeof(Storage) !== "undefined") {
        sessionStorage.pontuacao = pontuacao;
        sessionStorage.status = statusPontuacao();
    }
      location='modal/' + sessionStorage.status
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
      clearInterval(interval)
      if (typeof(Storage) !== "undefined") {
        sessionStorage.pontuacao = pontuacao;
        sessionStorage.status = statusPontuacao();
    }
      location='modal/' + sessionStorage.status
    }
    segundos--
  }, 1000)
}
input.addEventListener('keypress', (evento) => {
  if (evento.charCode === 13) {
    let resposta_certa = array[counter - 1]['resposta'];
    let resposta = evento.srcElement.value;
    evento.srcElement.value = ""
    if(resposta == resposta_certa){
      pontuacao += tempoResposta * 100
      piscarTela('green')
      setTimeout(() => {
        piscarTela('white')
        mostrarPergunta()
        plugHtml('pontuacao', pontuacao)
      }, 400)
      teste.play()
    } else if (resposta ) {
      pontuacao -= 2500
      piscarTela('red')
      setTimeout(() => {
        piscarTela('white')
        plugHtml('pontuacao', pontuacao)
      }, 400)
      audioError.play()
    }
  }
})

mostrarPergunta()
cronometro(time)

// IDEA: Colocar som para erros e para acertos
