window.onload = function () {
  function myFunction() {
    var myModal = new bootstrap.Modal(document.getElementById('myModal'));
    myModal.show();
  }
  setTimeout(myFunction, 2000);

  let button = document.getElementById("sbt-btn");
  button.disabled = true;
}
function validateForm() {
  let name = document.getElementById("field1").value;
  let address = document.getElementById("field2").value;
  button.disabled = true;
  if (name != "" && address != "") {
    button.disabled = true;
  }
  {
    button.disabled = false;
  }


}



