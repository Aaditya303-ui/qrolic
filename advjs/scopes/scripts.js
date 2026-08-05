// const myObject = {
//     name: "Parwinder",
//     sayName: function(){
//         return this.name;
//     }
// }

// class myObject{
//     name;

//     constructor(name){
//         this.name = name;
//     }

//     sayname(){
//         return this.name;
//     }
// }

// const myobject = new myObject("Klassen");
// console.log(myobject.name);
// console.log(myobject.sayname());


// Two ways of creating private functions

// (1) closure way

// function carMonitor(){
//     var speed = 0;

//     return {
//         accelerate: function(){
//             return speed++;
//         }
//     }
// }

// var cm = carMonitor();
// cm.accelerate();
// cm.accelerate();
// cm.accelerate()
// console.log(cm.accelerate());

// console.log(cm.speed);
// console.log(speed);

// class bankAccount{
//     #balance;

//     constructor(balance){
//         this.#balance = 4500;
//     }

//     getBalance(){
//         return this.#balance;
//     }
// }

// Protected

class Employee{
    constructor(name,salary){
        this.name = name;
        this._salary = salary;
    }

    showSalary()
    {
        console.log(`Salary is: ${this._salary}`);
    }
}

class Manager extends Employee{
    increaseSalary(amount){
        this._salary = this._salary + amount;
    }
}

const manager = new Manager("Aaditya",50000);

manager.increaseSalary(2500);
manager.showSalary();
