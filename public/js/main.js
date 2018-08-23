const form = document.querySelector('#form')
const input = document.querySelector('#numero')
const background = document.body;
let counter = 0



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
     // console.log('teste');
      
      piscarTela('red')
      clearInterval(interval)
      mostrarPergunta()
      setTimeout(() => { piscarTela('white');},800)
      cronometro(novo)
    }
    segundos--
  }, 1000)
}

function piscarTela(cor) {
  background.style.backgroundColor = cor
}

input.addEventListener('keypress', (evento) => {
  if (evento.charCode === 13) {

    let resposta_certa = array[counter-1]['resposta'];
    let resposta = evento.srcElement.value;
    
    if(resposta == resposta_certa){
      piscarTela('green')
      setTimeout(() => { piscarTela('white'),mostrarPergunta()},800)
      evento.srcElement.value = ""
      cronometro(novo)
    }else {
      piscarTela('red')
      clearInterval(interval)
      mostrarPergunta()
      setTimeout(() => { piscarTela('white');},800)
      cronometro(novo)
    }
    
    
  }
})
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
cronometro(15)
