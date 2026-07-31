// Question 1 - Borrow a Method Using call()

// const employee = {
//   name: "Aaditya",
//   company: "Google",
// };

// const user = {
//   name: "Aaditya",
//   introduce: function () {
//     return `${this.name} and works in ${this.company}`;
//   }
// };


// console.log(user.introduce.call(employee));

// Question 2 - Reuse Salary Function

// const emp1 = {
//     name: "John",
//     salary: 50000
// };

// const emp2 = {
//     name: "Peter",
//     salary: 70000
// };

// const an = {
//     annualSalary: function(){
//         return `${this.name} annual salary is ${this.salary}`;
//     }
// }

// console.log(an.annualSalary.call(emp1));
// console.log(an.annualSalary.call(emp2));

// Question 3 - Student Result

// const student1 = {
//     name: "Virat",
//     marks: 88
// };

// const student2 = {
//     name: "Rohit",
//     marks: 95
// };

// let result = {
//     r: function(){
//         return `${this.name} passed`;
//     }
// }

// console.log(result.r.call(student1));
// console.log(result.r.call(student2));

// Question 4 - Use apply() with Array Arguments

// const player = {
//     name: "Dhoni"
// };

// function introduce(team, role) {
//     return `${this.name} plays for ${team} as ${role}`;
// }

// const int = introduce.apply(player,["India","Wk-batter"]);
// console.log(int);

// Question 5 - Product Discount Calculator

// const product = {
//     name: "Laptop",
//     price: 50000
// };

// function getDiscountedPrice(discount) {
//     return `${this.name} bought in price of ${this.price} and discount will be ${discount}%`;
// }

// getdis = getDiscountedPrice.apply(product,[30]);
// console.log(getdis);

// Question 6 - Find Maximum Marks

// const marks = [45,67,89,99,23];

// console.log(Math.max.apply(null,marks));

// Question 7 - Find Minimum Salary

// const salaries = [25000,45000,70000,90000];
// console.log(Math.min.apply(null,salaries));

// Question 8 - Create a Bound Greeting Function

// const user = {
//     name: "Aaditya"
// };

// const g = {
//     greet: function(){
//         return `Hello ${this.name}`;
//     }
// }

// const greetings = g.greet.bind(user);

// console.log(greetings());

// Question 10 - Create Double Function

// function multiply(a,b) {
//     return a*b;
// }

// function triple(a,b){
//     return a*b;
// }

// const double = multiply.bind(null,2);
// const trip = triple.bind(null,3);

// console.log(double(12));
// console.log(trip(10));


// Question 12 - Delayed Introduction

// const player = {
//     name: "Virat"
// };

// function intro(){
//     setTimeout(()=>{
//         console.log(`I am ${this.name}`);
//     },2000);
// }

// const boundIntro = intro.bind(player);
// boundIntro();

// Question 15 - Real Interview Style

const employee = {
    name: "Aaditya",
    role: "Developer"
};

function introduce(company, experience) {
    console.log(
        `I am ${this.name}, working as a ${this.role} at ${company} with ${experience} years of experience.`
    );
}

// introduce.call(employee,"qrolic",1);

// introduce.apply(employee,["qrolic",3]);

// const bb = introduce.bind(employee,"qrolic");
// bb();