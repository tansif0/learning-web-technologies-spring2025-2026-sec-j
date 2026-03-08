const display = document.getElementById("display");
const keys = document.querySelector(".keys");

let current = "0";   
let resetNext = false; 

function updateDisplay() {
    display.value = current;
}

keys.addEventListener("click", (e) => {
    if (!e.target.matches("button")) return;

    const btn = e.target;
    const value = btn.dataset.value;
    const action = btn.dataset.action;

    if (action === "clear") {
        current = "0";
        resetNext = false;
    } else if (action === "delete") {
        if (resetNext) {
            current = "0";
            resetNext = false;
        } else {
            current = current.length > 1 ? current.slice(0, -1) : "0";
        }
    } else if (action === "equals") {
        try {
            current = String(eval(current));
        } catch {
            current = "Error";
        }
        resetNext = true;
    } else if (value) {
        if (resetNext) {
            current = value;
            resetNext = false;
        } else {
            current = current === "0" ? value : current + value;
        }
    }

    updateDisplay();
});

updateDisplay();