function validation() {
    let radioButton = document.querySelectorAll('input[type=radio]:checked'); //CSS3 Selektor!!!!!

    if (radioButton.length === 0) {
        setWarning("Please select an option.");
        return false;  
    }
}

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text; 
}