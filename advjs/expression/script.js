// Traditional function

// function multiply(a,b){
//     return a*b;
// }

// Function expression

// const multiply = function(a,b){
//     return a*b;
// };

// console.log(multiply(12,23));

// Function stored in variable

// function run(fn){
//     return fn();
// }

// const myHello = function(){
//     return `Hello World`;
// }

// console.log(run(myHello));

// let sum = add(12,23);

// let add = function(a,b){
//     return a+b;
// }

// const greet = function(greet){
//     return `Hello ${greet}!`;
// };

// console.log(greet("Aaditya"));

// const logic = function(a,b){
//     return (a*a)+(b*b)+(2*a*b);
// }

// console.log(logic(10,20));

// Storing in variables

// const factorial = function(n){
//     if(n == 0 || n == 1) return 1;
//     return n * factorial(n-1);
// }

// console.log(factorial(4));

// Callback function

// setTimeout(function(){
//     console.log("This message appears after 3 seconds");
// },3000);

// Event Handler

// let btn = document.getElementById("btn");

// btn.addEventListener("click",function(){
//     console.log("I am been clicked");
// });

// 4. Self-Invoking Functions

// (function(){
//     console.log("Self invoking function in work");
// })();

// function generateIntro(name)
// {
//     return `My name is ${name}`;
// }

// const jimmy = generateIntro("Jimmy Neesham");
// console.log(jimmy);

// const iconic = (d) => {
//     return `I.....am......${d}`;
// }

// const work = iconic("Iron Man");
// console.log(work);

// const array = [12,23,45];

// array.forEach(function(value){
//     console.log(value);
// });