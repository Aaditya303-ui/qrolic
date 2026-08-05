// Question 1 - Inspect a Property

// const player = {
//     name: "virat kohli"
// };

// p = Object.getOwnPropertyDescriptors(player);
// console.log(p.name.value);
// console.log(p.name.writable);
// console.log(p.name.enumerable);
// console.log(p.name.configurable);

// Question 2 - Inspect All Properties

// const hero = {
//     name: "Thor",
//     weapon: "Hammer",
//     age: 1500
// };

// h = Object.getOwnPropertyDescriptors(hero);
// console.log(h);

// Question 3 - Create Property Using defineProperty

// const user = {};

// Object.defineProperty(user,"name",{
//     value: "Aaditya",
    // writable: true,
// })

// Question 4 - Read Descriptor After Creation

// u = Object.getOwnPropertyDescriptor(user,"name");
// user.name = "Om";
// console.log(user);

// Question 7 - Hide Property from Object.keys()

// const user = {
//     name: "Peter"
// };

// Object.defineProperty(user,"name",{
//     enumerable: true,
// })

// console.log(Object.keys(user));

// Question 9 - Make Property Non-Configurable

// const user = {
//     name: "Steve"
// };


// Question 1 - Object.create()

// const vehicle = {
//     start(){
//         console.log("Vehicle Started");
//     }
// };

// car = Object.create(vehicle);

// car.drive = function(){
//     console.log("I am driving car");
// }

// car.drive();

// Question 2 - Student Inheritance

// const person = {
//     introduce(){
//         console.log("I am a person");
//     }
// };

// const student = Object.create(person);

// student.study = function(){
//     console.log("I am a student studying");
// }

// person.introduce();
// student.study();

// Question 3 - Prototype Property Access

// const animal = {
//     eats: true
// };

// dog = Object.create(animal);

// dog.breed = function(n){
//     console.log(`Dog ${n}`);
// }

// console.log(dog.eats);
// console.log(dog.breed("Labrador"));

// Question 4 - Constructor Function

// function Employee(name,salary){
//    this.name = name;
//    this.salary = salary;
// }

// John = new Employee("John",25000);

// Employee.prototype.showSalary = function(){
//     console.log(`${this.salary} has been recieved`);
// }

// John.showSalary();

// Question 6 - Bank Account

// function Account(owner,balance){
//     this.owner = owner;
//     this.balance = balance;
// }

// Account.prototype.status = function(){
//     console.log(`The balance is: ${this.balance}`);
// }

// Account.prototype.deposit = function(amount){
//     this.balance = this.balance + amount;
//     console.log(`${this.balance} has been balance after deposit of ${amount}`);
// }

// aadi = new Account("Aaditya",25000);
// aadi.status();
// aadi.deposit(5000);

// Question 7 - Book Constructor

let employee = {
    company: "Google"
};

let developer = {
    role: "Frontend"
};

developer.__proto__ = employee;
console.log(developer.role);
console.log(developer.company);