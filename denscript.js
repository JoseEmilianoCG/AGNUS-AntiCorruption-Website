var inputs = document.getElementsByClassName("formulario__input");
for (var i = 0; i < inputs.length; i++) {
  inputs1[i].addEventListener("keyup", function(){
    if(this.value.length>=1) {
      this.nextElementSibling.classList.add("fijar");
    } else {
      this.nextElementSibling.classList.remove("fijar");
    }
  });
}

