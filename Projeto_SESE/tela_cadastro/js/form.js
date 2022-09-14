
let btn = document.querySelector('#verSenha')
let btnConfirm = document.querySelector('#verConfirmSenha')


let nome = document.querySelector('#nome')
let labelNome = document.querySelector('#labelNome')
let validNome = false

let usuario = document.querySelector('#usuario')
let labelUsuario = document.querySelector('#labelUsuario')
let validUsuario = false

let senha = document.querySelector('#senha')
let labelSenha = document.querySelector('#labelSenha')
let validSenha = false

let confirmsenha = document.querySelector('#confirmsenha')
let labelConfirmsenha = document.querySelector('#labelConfirmsenha')
let validConfirmsenha = false

let msgError = document.querySelector('#msgError')
let msgSucces = document.querySelector('#msgSucces')


nome.addEventListener("keyup",() => {
    if(nome.value.length <=10){
        labelNome.setAttribute("style","color: red")
        labelNome.innerHTML = "Nome *Insira no minimo 12 caracteres"
        nome.setAttribute("style","border-color: red")
        validNome = false
    }else{
        labelNome.setAttribute("style","color: green")
        labelNome.innerHTML = "Nome"
        nome.setAttribute("style","border-color: green")
        validNome = true

    }
}

)
usuario.addEventListener("keyup",() => {
    if(usuario.value.length <=4){
        labelUsuario.setAttribute("style","color: red")
        labelUsuario.innerHTML = "Usuario *Insira no minimo 5 caracteres"
        usuario.setAttribute("style","border-color: red")
        validUsuario = false
    }else{
        labelUsuario.setAttribute("style","color: green")
        labelUsuario.innerHTML = "Usuario"
        usuario.setAttribute("style","border-color: green")
        validUsuario = true

    }
}
)

senha.addEventListener("keyup",() => {
    if(senha.value.length <=7){
        labelSenha.setAttribute("style","color: red")
        labelSenha.innerHTML = "Senha *Insira no minimo 8 caracteres"
        senha.setAttribute("style","border-color: red")
        validSenha = false
    }else{
        labelSenha.setAttribute("style","color: green")
        labelSenha.innerHTML = "Senha"
        senha.setAttribute("style","border-color: green")
        validSenha = true

    }
}
)

confirmsenha.addEventListener("keyup", () => {
    if(senha.value != confirmsenha.value){
        labelConfirmsenha.setAttribute("style","color: red")
        labelConfirmsenha.innerHTML = "Confirma Senha *As senhas não conferem"
        confirmsenha.setAttribute("style","border-color: red")
        validConfirmsenha = false
    }else{
        labelConfirmsenha.setAttribute("style","color: green")
        labelConfirmsenha.innerHTML = "Confirma Senha"
        confirmsenha.setAttribute("style","border-color: green")
        validConfirmsenha = true

    }
})


function cadastrar(){
    if(validNome && validUsuario && validSenha && validConfirmsenha){

        button.addEventListener('click', (event) => {
            event.preventDefault

            const nome = document.getElementById('nome')
            const usuario = document.getElementById('usuario')
            const senha = document.getElementById('senha')
            const confirmsenha = document.getElementById('ValidConfirmsenha')

            if (nome.value == ''){
                alert("Error, o campo nome não pode estar vazio!")
            }
            if (usuario.value == ''){
                alert("Error, o campo usuario não pode estar vazio!")
            }
            if (senha.value == ''){
                alert("Error, o campo senha não pode estar vazio!")
            }
            if (confirmsenha.value == ''){
                alert("Error, o campo confirmar senha não pode estar vazio!")
            }

        })


        msgSucces.setAttribute('style','display: block')
        msgSucces.innerHTML ='<strong>Cadastrando Usuario...</strong>'
        msgError.setAttribute('style','display: none')
        msgError.innerHTML =''


        setTimeout(()=>{
            window.location.href = 'http://localhost/PROJETO_SESE/tela_login/login.php'
        },3000)

        
        

    }else {
        msgError.setAttribute('style','display: block')
        msgError.innerHTML ='<strong>Preencha todos os campos corretamente antes de cadastrar</strong>'
        msgSucces.innerHTML =''
        msgSucces.setAttribute('style','display: none')
    }
   
}


btn.addEventListener('click',()=>{
    let inputSenha = document.querySelector('#senha')

    if(inputSenha.getAttribute('type') == 'password'){
        inputSenha.setAttribute('type','text')
    }else {
        inputSenha.setAttribute('type','password')
    }

})


btnConfirm.addEventListener('click',()=>{
    let inputConfirmSenha = document.querySelector('#confirmsenha')

    if(inputConfirmSenha.getAttribute('type') == 'password'){
        inputConfirmSenha.setAttribute('type','text')
    }else {
        inputConfirmSenha.setAttribute('type','password')
    }

})












