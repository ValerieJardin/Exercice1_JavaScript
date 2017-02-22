function check(){
/*Déclaration des variables input*/
  var first = document.getElementById('firstNumber').value;
  var second = document.getElementById('secondNumber').value;
    //L'opérateur ! indique l'inverse de la valeur
  if (!parseInt(first)||!parseInt(second)){
    alert('Il faut des nombres');
  } else {
    var result = parseInt(first)%parseFloat(second);
    alert('Voici le résultat : ' + result);
  }
  }
