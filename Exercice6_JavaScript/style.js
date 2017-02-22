function check(){ //Nom de la fonction non parlante, il aurrait était préférable de la nommer modulo.
/*Déclaration des variables input*/
  var first = document.getElementById('firstNumber').value;
  var second = document.getElementById('secondNumber').value;
    //L'opérateur ! indique l'inverse de la valeur
  if (isNaN(first)||isNaN(second)){// || est un opérateur logique
    alert('Il faut des nombres');
  }else if (second == 0){ // Mettre un double égal pour faire une comparaison.
      alert('On ne peut pas diviser par zéro!');
  } else {
    var result = parseInt(first) % second;// % opérateur de division
    alert('Voici le reste : ' + result);
  }
  }
