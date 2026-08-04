// Question 1 - Basic Class

// class Player{
//     constructor(name,team){
//         this.name = name;
//         this.team = team;
//     }

//     introduce(){
//         console.log(`${this.name} and his team is ${this.team}`);
//     }
// }

// p = new Player("Virat","rcb");
// p.introduce();

// Question 2 - Student Class

// class student{
//     constructor(name,course){
//         this.name = name;
//         this.course = course;
//     }

//     study(){
//         console.log(`${this.name} is studying in ${this.course}`);
//     }
// }

// s = new student("Aaditya","Computer Engineering");
// s.study();

// Question 3 - Bank Account

// class BankAccount{
//     constructor(owner,balance){
//         this.owner = owner;
//         this.balance = balance;
//     }
    
//     deposit(amount){
//         this.balance += amount;
//     }

//     withdraw(amount){
//         this.balance -= amount;
//     }

//     show(){
//         return `${this.owner} and his balance is ${this.balance}`;
//     }
// }

// shraddha = new BankAccount("shraddha",30000);
// shraddha.deposit(2000);
// shraddha.withdraw(4000);
// console.log(shraddha.show());

// Question 4 - Employee Class

// class Employee{
//     constructor(name,salary){
//         this.name = name;
//         this.salary = salary;
//     }

//     showSalary(){
//         return `${this.name} earns inr ${this.salary}`;
//     }
// }

// emp = new Employee("John",50000);
// console.log(emp.showSalary());

// Question 5 - Single Inheritance

// class Animal{
//     eat(){
//         console.log("Animal eats");
//     }
// }

// class dog extends Animal{
//     bark(){
//         console.log("dog is barking");
//     }
// }

// d = new dog();
// d.eat();
// d.bark();

// Question 6 - Vehicle Inheritance

// class vehicle{
//     start(){
//         console.log("vehicle is started...");
//     }
// }

// class car extends vehicle{
//     drive(){
//         console.log("I am driving....");
//     }
// }

// v = new car();
// v.start();
// v.drive();

// Question 7 - Constructor Inheritance

// class Person{
//     constructor(name){
//         this.name = name;
//     }

//     introduce(){
//         console.log(`${this.name} is been introduced`);
//     }
// }

// class Developer extends Person{
//     constructor(name,language){
//         super(name);
//         this.language = language;
//     }
    
//     introduce1(){
//         console.log(`${this.name} codes in ${this.language}`);
//     }
// }

// d = new Developer("Aaditya","JavaScript");
// d.introduce1();

// Question 8 - Method Overriding

// class Animal{
//     speak(){
//         console.log("Animal makes sound");
//     }
// }

// class dog extends Animal{
//     speak(){
//         console.log("Dog is speaking");
//     }
// }

// d = new dog();
// d.speak();

// Question 9 - Use super.method()

// class Animal{
//     speak(){
//         console.log("Animal makes sound");
//     }
// }

// class dog extends Animal{
//     speak(){
//         super.speak();
//         console.log("Dog barks");
//     }
// }

// dog = new dog();
// dog.speak();

// Question 10 - Cricket Example

// class cricketer{
//     constructor(name,team){
//         this.name = name;
//         this.team = team;
//     }

//     profile(){
//         console.log(`${this.name} plays for ${this.team}`);
//     }
// }

// class captain extends cricketer{
//     constructor(name,team,trophyCount){
//         super(name, team);
//         this.trophyCount = trophyCount;
//     }

//     captainInfo(){
//         console.log(`${this.name} has won ${this.trophyCount} trohphies`);
//     }
// }

// Question 11 - Multilevel Inheritance

// class LivingThing{
//     breathe(){
//         console.log("I am breathing....");
//     }
// }

// class Animal extends LivingThing{
//     eat(){
//         console.log("animal eats.....");
//     }
// }

// class dog extends Animal{
//     bark(){
//         console.log("dog is barking....");
//     }
// }

// d = new dog();
// d.breathe();
// d.eat();
// d.bark();

// Question 12 - Hierarchical Inheritance

// class Animal{
//     eat(){
//         console.log("eating....");
//     }
// }

// class dog extends Animal{
//     bark(){
//         console.log("bow...bow...");
//     }
// }

// class cat extends Animal{
//     mewo(){
//         console.log("meow....meow...");
//     }
// }

// class cow extends Animal{
//     moo(){
//         console.log("moo....moo...");
//     }
// }

// Cow = new cow();
// Dogi = new dog();
// Cat = new cat();

// Cow.moo();
// Dogi.bark();
// Cat.mewo();

// Question 13 - Online Course Platform

// class course{
//     constructor(title,price){
//         this.title = title;
//         this.price = price;
//     }

//     details(){
//         console.log(`${this.title} ands it price is: ${this.price}`);
//     }
// }

// class programming extends course{
//     constructor(title,price,language){
//         super(title,price);
//         this.language = language;
//     }

//     details(){
//         console.log(`${this.title} ands it price is: ${this.price} language is ${this.language}`);
//     }
// }

// p = new programming("ecom",2000,"js");
// p.details();

// Question 14 - E-Commerce Product

// class Product{
//     constructor(name,price){
//         this.name = name;
//         this.price = price;
//     }

//     display(){
//         console.log(`${this.name} and its price is ${this.price}`);
//     }
// }

// class Mobile extends Product{
//     constructor(name,price,brand){
//         super(name,price);
//         this.brand = brand;
//     }
    
//     showBrand(){
//         console.log(`the brand is ${this.brand}`);
//     }
// }

// mobile = new Mobile("Samsung",40000,"abc");
// mobile.display();
// mobile.showBrand();

// Question 15 - Real Interview Style

// class Person{
//     constructor(name,age){
//         this.name = name;
//         this.age = age;
//     }

//     introduce(){
//         console.log(`My ${this.name} is Aaditya and I am ${this.age} years old`);
//     }
// }

// class Employee extends Person{
//     constructor(name,age,salary){
//         super(name,age);
//         this.salary = salary;
//     }

//     sal(){
//         console.log(`My salary is ₹${this.salary}`);
//     }
// }

// a = new Employee("Aaditya",22,50000);
// a.introduce();
// a.sal();