// Question 1 - Object.create()

// const vehicle = {
//     start(){
//         console.log("Vehicle Started")
//     }
// };

// car = Object.create(vehicle);

// car.drive = function(){
//     console.log("I am driving");
// };

// car.drive();
// car.start();

// Question 2 - Student Inheritance

// const person = {
//     introduce(){
//         console.log("I am a person");
//     }
// };

// student = Object.create(person);

// student.study = function(){
//     console.log("Student is studying");
// }

// student.study();
// student.introduce();

// Question 3 - Prototype Property Access

// const animal = {
//     eats: true
// };

// dog = Object.create(animal);

// dog.breed = function(breed){
//     console.log(`breed is ${breed}`);
// }

// console.log(dog.eats);
// dog.breed("Labrador");

// Question 4 - Constructor Function

// function Employee(name,salary){
//     this.name = name;
//     this.salary = salary;
// }

// Employee.prototype.info = function(){
//     console.log(`${this.name} and his salary is ${this.salary}`);
// }

// john = new Employee("John",25000);
// peter = new Employee("Peter",30000);
// john.info();
// peter.info();

// Question 5 - Shared Prototype Method

// Employee.prototype.showSalary = function(){
//     console.log(`${this.salary} thats it this much salary`);
// }

// peter.showSalary();
// john.showSalary();

// Question 6 - Bank Account

// function Account(owner,balance){
//     this.owner = owner;
//     this.balance = balance;
// }

// Account.prototype.show = function(){
//     console.log(`${this.owner} and his balance is ${this.balance}`);
// }

// Account.prototype.deposit = function(amount){
//     this.balance = this.balance + amount;
//     console.log(`After deposit of inr ${amount} the balance is ${this.balance}`);
// }

// deep = new Account("deep",4500);
// deep.show();
// deep.deposit(2500);

// Question 7 - Book Constructor

// function Book(title,author){
//     this.title = title;
//     this.author = author;
// }

// Book.prototype.display = function(){
//     console.log(`${this.title} by ${this.author}`);
// }

// atoms = new Book("Atomic Habits","James Clear");
// atoms.display();

// Question 8 - proto Practice

let employee = {
    company: "Google"
};

// let developer = {
//     role: "Frontend"
// };

// developer.__proto__ = employee;
// console.log(developer.role);
// console.log(developer.company);

// Question 9 - Object.setPrototypeOf()

// let sportsman = {
//     plays: true
// };

// let cricketer = {
//     team: "India"
// };

// Object.setPrototypeOf(cricketer,sportsman);
// console.log(cricketer.team);
// console.log(cricketer.plays);

// Question 10 - Multi-Level Prototype Chain

// livingThing = {
//     alive: true
// };

// animal = Object.create(livingThing);
// dog = Object.create(animal);
// console.log(dog.alive);

// Question 11 - Shared Method Through Prototype Chain

// livingthing = {
//     breathe(a){
//         console.log(`${a} breathes the air`);
//     }
// }
// human = Object.create(livingthing);
// dog = Object.create(livingthing);
// dog.breathe("dog");

// f = Object.getOwnPropertyDescriptor(employee,"company");
// Object.defineProperty(employee,"years",{
//     value: 1998,
//     writable: true
// })

// y = Object.getOwnPropertyDescriptor(employee,"years");
// console.log(y);