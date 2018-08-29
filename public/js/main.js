const form = document.querySelector('#form')
const logout = document.querySelector('#logout')
const input = document.querySelector('#numero')
const background = document.body
const finalArray = array.length
const time = 60
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
      status = '/img/calculadoraTriste.png?looser';
      audio  = 'looser';
      // status = 'medio';
    }else if(pontuacao >= 20000) {
      status =  '/img/calculadoraFeliz.png?win';
      audio = 'win'
    }
  return status;
}

function cronometro(segundos) {
  const interval = setInterval(() => {
    if (counter >= finalArray) {
      tempoRestante = segundos
      clearInterval(interval)
      if (typeof(Storage) !== "undefined") {
        // Code for localStorage/sessionStorage.
        sessionStorage.pontuacao = pontuacao;
        sessionStorage.status = statusPontuacao();
      } else {
        // Sorry! No Web Storage support..
    }
      location='modal'
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
        // Code for localStorage/sessionStorage.
        sessionStorage.pontuacao = pontuacao;
        sessionStorage.status = statusPontuacao();
    } else {
        // Sorry! No Web Storage support..
    }
      location='modal'
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
    } else if (resposta ) {
      pontuacao -= 2500
      piscarTela('red')
      setTimeout(() => {
        piscarTela('white')
        plugHtml('pontuacao', pontuacao)
      }, 400)
    }
  }
})

mostrarPergunta()
cronometro(time)

// IDEA: Colocar som para erros e para acertos
