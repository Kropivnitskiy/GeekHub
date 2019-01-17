//Plus
function plus (a, b) {
  return a + b
}
console.log("Plus: " + plus(3, 4));

//Minus
function minus (a, b) {
  return a - b
}
console.log("Minus: " + minus(4, 3));

//Multiplication
function multiplication() {
  let i, res = 100, correct, err;
  for (i=0; i<arguments.length; i++)
  {res = res * arguments[i]}
  correct = res / 100;

  if (isNaN(res))
  {err = "Invalid data";
    return err;}
  else
  {if (arguments.length < 2)
  {err = "Not enough data";
    return err;}
  else
    return correct;}
}
console.log("Multiplication: " + multiplication(0.15, 3));

//Division
function division (a, b) {
  return a / b
}
console.log("Division: " + division(3, 0.15));

//Pow
function pow(a, exp){
  let result = 1;
  for(let i = 0; i <exp; i++)
  {
    result = result * a;
  }
  return(result);
}
console.log("Pow: " + pow(2,3));


//Root number
function anyRoot(a, exp) {
  let result = Math.pow(a / (1/exp));
  return result.toFixed(5)
}
console.log("Root number(1): " + anyRoot(125, 3));

//Root number second
function anyRoot(a, exp) {
  return Math.exp(Math.log(a) / exp)
}
console.log("Root number(2): " + anyRoot(8, 3));

// Sin
function sin (a) {
  return Math.sin(a)
}
console.log("Sin: " + sin(1));

// Cos
function cos (a) {
  return Math.cos(a)
}
console.log("Cos: " + cos(1));

//Factorial
function factorial(n) {
  return (n != 1) ? n * factorial(n - 1) : 1;
}
console.log("Factorial: " + factorial(6));