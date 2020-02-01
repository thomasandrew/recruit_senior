const name = document.getElementById('one')
const tel = document.getElementById('two')
const cpf = document.getElementById('three')
const btn = document.getElementById('submit')

name.onclick = _ => {
    if (name.value === "") {
        name.placeholder = "No name"
        name.style.borderColor = 'red'
        name.focus()
        return false
    } else {
        name.placeholder = "Name"
        name.style.borderColor = '#40b9ed'
    }
}

tel.onclick = _ => {
    if (tel.value === "") {
        tel.placeholder = "No tel"
        tel.style.borderColor = 'red'
        tel.focus()
        return false
    } else {
        tel.placeholder = "Telefone"
        tel.style.borderColor = '#40b9ed'
    }
}

cpf.onclick = _ => {
    if (cpf.value === "") {
        cpf.placeholder = "No CPF"
        cpf.style.borderColor = 'red'
        cpf.focus()
        return false
    } else {
        cpf.placeholder = "CPF"
        cpf.style.borderColor = '#40b9ed'
    }
}
