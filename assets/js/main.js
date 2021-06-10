
function validatePassword(p1, p2) {
    let newPass = document.getElementById(p1)
    let confPass = document.getElementById(p2)

    if((newPass.value != confPass.value) || (newPass.value == '') || (confPass.value == '')) {
        confPass.setAttribute('class', 'form-control pass-validity')
    } else {
        confPass.setAttribute('class', 'form-control')
    }
}


// function See input Password

let status = false;


function seeMdp() {
    let see = document.getElementById('seeText')
    let pass = document.getElementById('seePass')
    let input = document.getElementById('password')

    if(status == false) {
        input.setAttribute("type", "text")
        see.setAttribute("class", "bi bi-eye-fill lost")
        pass.setAttribute("class", "bi bi-eye-slash-fill")
    } else  {
        input.setAttribute("type", "password")
        see.setAttribute("class", "bi bi-eye-fill")
        pass.setAttribute("class", "bi bi-eye-slash-fill lost")
    }
    status = !status;
}