const primaryToggle = document.querySelector('#is-primary-toggle');
const inputPrimary = document.querySelector('#input-primary');

primaryToggle.addEventListener('click', function(){
    if(inputPrimary.checked){
        inputPrimary.unchecked
        document.querySelector('#background-toggle-primary').classList.add('bg-dark-secondary');
        document.querySelector('#background-toggle-primary').classList.remove('bg-primary');
    }else{
        inputPrimary.checked
        document.querySelector('#background-toggle-primary').classList.remove('bg-dark-secondary');
        document.querySelector('#background-toggle-primary').classList.add('bg-primary');
    }
})
