// Question 1 - Public Property

// class student{
//     constructor(name,course){
//         this.name = name;
//         this.course = course;
//     }

//     getName(){
//         return `${this.name} and its work is ${this.course}`;
//     }
// }

// const st = new student("Aaditya","Web developer");
// console.log(st.getName());
// console.log(st.name);
// console.log(st.course);

// Question 2 - Public Method

// class Employee{
//     constructor(name){
//         this.name = name;
//     }

//     introduce(){
//         return `I am ${this.name}`;
//     }
// }

// e = new Employee("Aaditya");
// console.log(e.introduce());

// Question 3 - Private Balance

// class bankAccount{
//     #balance;

//     constructor(balance){
//         this.#balance = balance;
//     }

//     getBalance(){
//         return `My balance in bank is: ${this.#balance}`;
//     }
// }

// am = new bankAccount(45000);
// console.log(am.#balance);
// console.log(am.getBalance());

// Question 4 - Private Password

// class user{
//     #rpassword;
//     constructor(password){
//         this.#rpassword = password;
//     }

//     checkPassword(apassword){
//         if(apassword == this.#rpassword){
//             console.log("Correct password");
//         }else{
//             console.log("Wrong password");
//         }
//     }
// }

// const u = new user("abc123");
// u.checkPassword("xyz");

// Question 5 - Private Counter

// class Counter{
//     #count;

//     constructor(){
//         this.#count = 0;
//     }

//     increment(){
//         this.#count++;
//     }

//     decrement(){
//         this.#count--;
//     }

//     getCount(){
//         return this.#count;
//     }
// }

// count = new Counter();
// count.increment();
// count.increment();
// count.increment();
// count.decrement();
// console.log(count.getCount());

// Question 6 - Private Method

// class car{
//     #startEngine(){
//         console.log("Engine is been started");
//     }

//     drive(){
//         return this.#startEngine();
//     }
// }

// c = new car();
// c.drive();

// Question 7 - Closure Based Private Variable

// function createWallet(){
//     let money = 0;

//     return{
//         addMoney: function(amount){
//             money = money + amount;
//         },

//         showMoney: function(){
//             return money;
//         }
//     }
// }

// c = createWallet();
// c.addMoney(2000);
// c.addMoney(500);
// console.log(c.showMoney());

// Question 8 - Closure Based Private Counter

// function createCounter(){
//     let count = 0;

//     return{
//         increment: function(){
//             count++;
//         },

//         decrement: function(){
//             count--;
//         },

//         getcount: function(){
//             return count;
//         }
//     }
// }

// c = new createCounter();
// c.increment();
// c.increment();
// c.increment();
// c.increment();
// c.increment();
// c.increment();
// c.decrement();
// console.log(c.getcount());

// Question 9 - Protected Salary and Property Inheritance

// class Employee{
//     salary;
//     constructor(salary){
//         this._salary = salary;
//     }

//     showSalary(){
//         return this._salary;
//     }
// }

// class Manager extends Employee{
//     increaseSalary(amount){
//         this._salary = this._salary + amount;
//     }
// }

// m = new Manager(25000);
// m.increaseSalary(2500);
// console.log(m.showSalary());
// console.log(m._salary);
// console.log(m.salary);

// Question 12 - Public + Private Together

// class Employee{
//     name;
//     #salary;
//     constructor(name, salary){
//         this.name = name;
//         this.#salary = salary;
//     }

//     getSalary(){
//         return this.#salary;
//     }
// }

// e = new Employee("Aaditya",25000);
// console.log(e.getSalary());

// Question 13 - Bank System

// class BankAccount{
//     #balance;

//     constructor(balance){
//         this.#balance = balance;
//     }

//     deposit(amount){
//         this.#balance = this.#balance + amount;
//     }

//     withdraw(amount){
//         this.#balance = this.#balance - amount;
//     }

//     showBalance(){
//         return this.#balance;
//     }
// }

// a = new BankAccount(25000);
// a.deposit(5000);
// a.withdraw(3000);
// console.log(a.showBalance());

// Question 14 - Protected Vehicle Speed

// class vehicle{
//     constructor(speed){
//         this._speed = speed;
//     }
// }

// class car extends vehicle{
//     accelerate(){
//         this._speed = this._speed + 20;
//     }

//     showSpeed(){
//         return this._speed;
//     }
// }

// c = new car(10);
// c.accelerate();
// c.accelerate();
// c.accelerate();
// console.log(c.showSpeed());

// Question 15 - Interview Style Challenge

// class Employee{
//     #employeeId;

//     constructor(employeeId,name,salary){
//         this.#employeeId = employeeId;
//         this.name = name;
//         this._salary = salary;
//     }

//     showName(){
//         return this.name;
//     }

//     showSalary(){
//         return this._salary;
//     }

//     showEmployeeId(){
//         return this.#employeeId;
//     }
// }

// class Manager extends Employee{
//     increaseSalary(amount){
//         this._salary = this._salary + amount;
//     }
// }

// m = new Manager(12,"Manager",25000);
// console.log(m.showName());
// console.log(m.showEmployeeId());
// m.increaseSalary(5000);
// console.log(m.showSalary());