// Question 1 - CanRun Mixin

// class Animal{
//     constructor(name){
//         this.name = name;
//     }
// }

// const canRun = {
//     run(){
//         console.log(`${this.name} is running`);
//     }
// }

// Object.assign(Animal.prototype,canRun);

// tiger = new Animal("Tiger");
// tiger.run();

// Question 2 - CanSwim Mixin

// class Fish{
//     constructor(name){
//         this.name = name;
//     }
// }

// const Canswim = {
//     swim(){
//         console.log(`${this.name} is swimming`);
//     }
// }

// Object.assign(Fish.prototype,Canswim);

// gf = new Fish("Gold Fish");
// gf.swim();

// Question 3 - Object.assign Mixin

// class Bird{
//     constructor(bd){
//         this.bd = bd;
//     }
// }

// const canfly = {
//     fly(){
//         console.log(`${this.bd} is flying`);
//     }
// }

// Object.assign(Bird.prototype,canfly);
// b = new Bird("Parrot");
// b.fly();

// Question 4 - Multiple Classes Same Mixin

// class bird{}
// class airplane{}

// const canFly = {
//     fly(){
//         console.log("Flying....");
//     }
// }

// Object.assign(bird.prototype,canFly);
// Object.assign(airplane.prototype,canFly);

// b = new bird();
// a = new airplane();
// b.fly();
// a.fly();

// Question 5 - Cricket Scorecard

// class Player{
//     constructor(name,runs){
//         this.name = name;
//         this.runs = 0;
//     }
// }

// const runActions = {
//     single(){
//         this.runs++;
//     },

//     four(){
//         this.runs = this.runs + 4;
//     },

//     six(){
//         this.runs = this.runs + 6;
//     },

//     score(){
//         return `${this.name} scored this many ${this.runs}`;
//     }
// }

// p = new Player("Virat Kohli");
// Object.assign(Player.prototype,runActions);
// p.single();
// p.six();
// p.four();
// p.four();
// p.six();
// p.single();
// p.six();
// p.six();
// console.log(p.score());

// Question 6 - Employee Actions

// class Employee{
//     constructor(name){
//         this.name = name;
//     }
// }

// const employeeActions = {
//     showMessage(message){
//         console.log(message);
//     }
// }

// const employeeWork = {
//     __proto__: employeeActions,

//     start(){
//         super.showMessage(`${this.name} decides to start`);
//     },

//     stop(){
//         super.showMessage(`${this.name} decides to stop`);
//     }
// }

// Object.assign(Employee.prototype,employeeWork);

// e = new Employee("Vaibhav");
// e.start();
// e.stop();

// Question 7 - CanCode Factory Mixin

// class Employee{
//     constructor(name){
//         this.name = name;
//     }

//     show(){
//         console.log(this.name);
//     }
// }

// function CanCode(parent){
//     return class extends parent{
//         code(){
//             console.log(`${this.name} is been here to code`);
//         }
//     }
// }

// class developer extends CanCode(Employee){}

// const dev = new developer("abcd");
// dev.show();
// dev.code();

// Question 8 - CanManage Factory Mixin

// class Employee{
//     constructor(name){
//         this.name = name;
//     }

//     showEmp(){
//         console.log(`${this.name} is been showed as employee`);
//     }
// }

// function canManage(parent){
//     return class extends parent{
//         manage(){
//             console.log(`${this.name} is managing`);
//         }
//     }
// }

// class Manager extends canManage(Employee){}

// const manager = new Manager("Aaditya");
// manager.manage();
// manager.showEmp();

// Question 9 - Two Mixins Together

// class Employee{
//     constructor(name){
//         this.name = name;
//     }

//     work(){
//         console.log(`${this.name} is working here`);
//     }
// }

// function canCode(parent){
//     return class extends parent{
//         code(){
//             console.log(`${this.name} is coding here`);
//         }
//     }
// }

// function canManage(parent){
//     return class extends parent{
//         manage(){
//             console.log(`${this.name} is managing the team`);
//         }
//     };
// }

// class TeamLead extends canManage(canCode(Employee)){}
// class TeamLead extends canCode(canManage(Employee)){}

// const lead = new TeamLead("Aaditya");
// lead.work();
// lead.code();
// lead.manage();

// Question 10 - Student Abilities

// class Student{
//     constructor(name){
//         this.name = name;
//     }
// }

// function canStudy(parent){
//     return class extends parent{
//         study(){
//             console.log(`${this.name} is studing`);
//         }
//     }
// }

// function canPlay(parent){
//     return class extends parent{
//         play(){
//             console.log(`${this.name} is playing`);
//         }
//     }
// }

// class SchoolStudent extends canStudy(canPlay(Student)){}

// s = new SchoolStudent("Aaditya");
// s.study();
// s.play();

// Question 14 - Online Teacher

// class BankAccount {
//     constructor(account){
//         this.account = 0;
//     }

//     balance(){
//         return this.account;
//     }
// }

// function canDeposit(parent){
//     return class extends parent{
//         deposit(amount){
//             this.account = this.account + amount;
//         }
//     }
// }

// function canWithdraw(parent){
//     return class extends parent{
//         withdraw(amount){
//             this.account = this.account - amount;
//         }
//     }
// }

// class acc extends canDeposit(canWithdraw(BankAccount)){}

// a = new acc();
// a.deposit(1000);
// a.deposit(1000);
// a.deposit(1000);
// a.withdraw(500);
// a.withdraw(500);
// a.withdraw(500);
// a.deposit(1000);
// a.deposit(1000);
// a.deposit(1000);
// console.log(a.balance());