// Question 1 - Function Declaration

// let calculateArea = function(a,b){
//     return a*b;
// }

// console.log(calculateArea(10,20));

// Question 2 - Function Expression

let findSquare = function(a){
    return a*a;
}

console.log(findSquare(12));

// Question 3 - Function Stored in Variable

const welcomeUser = function(name){
    return `Welcome ${name}`;
}

console.log(welcomeUser("Aaditya"));

// Question 4 - Higher Order Function

function execute(fn){
    return fn();
}

function sayHello()
{
    return "Hello World";
}

let work = execute(sayHello);
console.log(work);

// Question 5 - Callback Function

function processOrder(orderId, callback){
    return callback(orderId);
}

function readyOrder(id){
    return `Order #${id} email sent`;
}

let order = processOrder(101,readyOrder);
console.log(order);

// Question 6 - Calculator Using Callback

function calculateArea(a,b,operation){
    return operation(a,b);
}

function add(a,b){
    return a+b;
}

function product(a,b){
    return a*b;
}

let calculate = calculateArea(12,23,add);
console.log(calculate);

// Question 7 - Recursive Function

let recursive = function(a){
    if(a == 0 || a == 1) return 1;
    return a * recursive(a-1);
}

console.log(recursive(5));

let sumNumber = function(a){
    if(a == 1) return 1;
    return a + sumNumber(a-1); 
}

console.log(sumNumber(5));

// Question 9 - Anonymous Function with setTimeout

let activate = function(){
    return setTimeout(()=>{
        console.log("Server started");
    },2000)
};

activate();

// Question 10 - IIFE

(function(){
    console.log("Application Initialised");
})();

// Question 11 - Arrow Function

const cube = (n) => {
    return n*n*n;
};

console.log(cube(3));

// Question 12 - Arrow Function Returning String

const introduce = (name,role) =>{
    console.log(`${name} is a ${role}`);
}

introduce("Aaditya","Developer");
introduce("Manan","Buiseness Developement Executive");

// Question 13 - Function Returning Function

function greet(greeting){
    return function(name){
        console.log(`${greeting} ${name}`);
    }
}

let hello = greet("Hello");

hello("rdj");

// Question 14 - Custom forEach

function myForEach(arr,callback){
    for(let i=0; i<arr.length; i++){
        callback(arr[i]);
    }
}

function printValue(i){
    console.log(i);
}

let print = myForEach([12,23,34,45],printValue);
console.log(print);

// Question 15 - Mini Employee Processor

const employees = [
    {name:"John",salary:30000},
    {name:"Peter",salary:50000},
    {name:"David",salary:70000}
];

function processEmployees(employees, callback){
    for(let i=0; i<employees.length; i++){
        callback(employees[i]);
    }
}

function printNames(employees){
    console.log(employees["name"]);
}

function printSalary(employees){
    console.log(employees["salary"]);
}

processEmployees(employees, printNames);
processEmployees(employees, printSalary);
