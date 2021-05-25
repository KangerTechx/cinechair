
function validatePassword(p1, p2) {
    let newPass = document.getElementById(p1)
    let confPass = document.getElementById(p2)

    if((newPass.value != confPass.value) || (newPass.value == '') || (confPass.value == '')) {
        confPass.setAttribute('class', 'form-control pass-validity')
    } else {
        confPass.setAttribute('class', 'form-control')
    }
}