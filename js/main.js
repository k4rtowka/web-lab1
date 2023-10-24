let X, Y, R;

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("submit-button").addEventListener("click", submit);
  let request = "?x=" + X + "&y=" + Y + "&r=" + R;

  fetch("php/load.php" + request)
    .then((response) => response.text())
    .then(
      (response) => (document.getElementById("check").innerHTML = response)
    );
});

function submit(e) {
  if (!validateY()) return;
  if (!validateR()) return;
  setX();
  e.preventDefault();

  let request = "?x=" + X + "&y=" + Y + "&r=" + R;

  fetch("php/check.php" + request)
    .then((response) => response.text())
    .then(
      (response) => (document.getElementById("check").innerHTML = response)
    );
}

function setX() {
  let formData = new FormData(document.getElementById("coordinates-form"));
  X = formData.get("x");
}

function validateY() {
  let Y_text = document.getElementById("Y-text");
  Y = Y_text.value.replace(",", ".");
  let reg = /^-?([0-4](\.\d+)?)$/;
  if (!reg.test(Y)) {
    Y_text.setCustomValidity("Неккоректный ввод!");
    return false;
  }
  Y_text.setCustomValidity("");
  return true;
}

function validateR() {
  let R_text = document.getElementById("R-text");
  R = R_text.value.replace(",", ".");
  let reg = /^-?([2-3](\.\d+)?|1(\.\d+))$/;
  if (!reg.test(R)) {
    R_text.setCustomValidity("Неккоректный ввод!");
    return false;
  }
  R_text.setCustomValidity("");
  return true;
}
