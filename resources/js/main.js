let form = document.getElementById("checkoutform");
let cardnumber = "";
let last = 0;
let tendencia = 1;
const regex = new RegExp("[0-9]{16}");

const cardValidacion = function (cardnumber) {
    return regex.test(cardnumber);
};

form.addEventListener("input", (e) => {
    console.log(e.target.id);
    actualInput = document.getElementById(e.target.id);
    closestLabel = actualInput.closest(".checkoutform-group");
    if (actualInput.value) {
        closestLabel.classList.add("field--not-empty");
        if (actualInput.id == "cardnumber") {
            if (actualInput.value.leght > 15) {
                actualInput.value = actualInput.value.substr(0, 16);
            } else if (isNaN(actualInput.value)) {
                actualInput.value = actualInput.value.substr(0, actualInput.leght - 1);
            }
        }
    } else {
        closestLabel.classList.remove("field--not-empty");
    }
});
