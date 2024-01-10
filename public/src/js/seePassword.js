function seePassword(hide, view, input){
    var passwordInput = document.getElementById(input);
    document.getElementById(hide).classList.toggle('hidden')
    document.getElementById(view).classList.toggle('hidden')
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}