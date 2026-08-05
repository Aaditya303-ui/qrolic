// Private

// let employee = (function(){
//     let empName = "";

//     return class{
//         constructor(name){
//             empName = name;
//         }

//         getPrivateName(){
//             return empName;
//         }
//     }
// })();

// const emp = new employee('Aj');
// console.log(emp.getPrivateName());
// console.log(emp.empName);

// Public Scope

let empName = 'Aryan';

class employee {
    constructor(){
        this.getName = function(){
            return empName;
        }
    }
}

class bankAccount{
    #balance;

    constructor(balance){
        this.#balance = balance;
    }

    getBalance(){
        return this.#balance;
    }
}

// const acc = new bankAccount(5000);
// console.log(acc.getBalance());
// const emp = new employee();
// console.log(emp.getName());

// class Employee {
//     constructor(name,salary){
//         this.name = name;
//         this._salary = salary;
//     }
// }

// class Manager extends Employee{
//     showSalary()
//     {
//         console.log(`The salary told is: ${this._salary}`);
//     }
// }

// m = new Manager("Aaditya",50000);
// m.showSalary(); 