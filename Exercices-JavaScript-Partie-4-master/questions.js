/**
 * Exercice sur les chaines de caractères.
 * Trouvez la façon de faire la plus optimal.
 * Il peut y avoir plusieur façon de faire.
 */
var tailleString = function (texte) {
    return texte.length;
}
var remplaceECar = function (texte) {
    return texte.replace('e', ' ');
}
var concatString = function (texte1, texte2) {
    return texte1.concat(texte2);
}
var afficherCar5 = function (texte) {
    return 'texte'.charAt(4);
}
var afficher9Car = function (texte) {
    return texte.substring(0,9);
}
var majusculeString = function (texte) {
    return texte.toLocaleUpperCase();
}
var minusculeString = function (texte) {
    return texte.toLocaleLowerCase();
}
var SupprEspaceString = function (texte) {
    return texte.trim();
}
var IsString = function (texte) {
  if (typeof texte == 'string') {
    return true;
  }
}
var AfficherExtensionString = function (texte) {
    return texte.split('.').pop();
}
var NombreEspaceString = function (texte) {
    return texte.split(' ').length -1;
}
var InverseString = function (texte) {
    return texte.split('').reverse().join('');
}

/**
 * Exercices sur les nombres et les caluls mathématiques
 */
var calculPuissance = function (x, y) {
    return Math.pow(x,y);
}
var valeurAbsolue = function (nombre) {
    return Math.abs(nombre);
}
var valeurAbsolueArray = function (array) {
    return array.map(Math.abs);
}
var sufaceCercle = function (rayon) {
    return Math.round(Math.PI*Math.pow(rayon,2));
}
var hypothenuse = function (ab, ac) {
    return Math.hypot(ab, ac);
}
var calculIMC = function (poids, taille) {
    return Math.round(poids/Math.pow(taille,2),-2);
}
