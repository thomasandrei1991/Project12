const myerror = document.querySelector('#error');
const nameInput = document.querySelector('#name');
const ageInput = document.querySelector('#age');

function errorMessage() {
    if (nameInput.value === "" || ageInput.value === "") {
        myerror.innerHTML = "Please fill in all the fields.";
        return false; // ⛔ stop submit
    }
}
