
const nextbutton = document.getElementById("next_button");
    
nextbutton.addEventListener("keypress keyup keydown", validate);

function validate(e) {
    e.preventDefault();

    const firstNameField = document.getElementById("name");
    let valid = true;

    if (!firstNameField.value) {
        const nameError = document.getElementById("nameError");
        nameError.classList.add("visible");
        firstNameField.classList.add("invalid");
        nameError.setAttribute("aria-hidden", false);
        nameError.setAttribute("aria-invalid", true);
    }
    return valid;
}

var current = 0;
var tabs = $(".tab");
var tabs_pill = $(".tab-pills");

loadFormData(current);

function loadFormData(n) {
    document.getElementById('next_button').disabled = true; 
$(tabs_pill[n]).addClass("active");
$(tabs[n]).removeClass("d-none");
$("#back_button").attr("disabled", n == 0 ? true : false);
n == tabs.length - 1
    ? $("#next_button").text("Submit").removeAttr("onclick")
    : $("#next_button")
        .attr("type", "button")
        .text("Next")
        .attr("onclick", "next()");
}

function next() {
$(tabs[current]).addClass("d-none");
$(tabs_pill[current]).removeClass("active");

current++;
loadFormData(current);
}

function back() {
$(tabs[current]).addClass("d-none");
$(tabs_pill[current]).removeClass("active");

current--;
loadFormData(current);
}