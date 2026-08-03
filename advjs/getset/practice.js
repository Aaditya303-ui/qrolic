let demo = document.getElementById("demo").innerHTML;

// Question 1 - Student Grade Getter

const student = {
    marks: 85,
    grade: "",

    set grad(value){
        this.grade = value;
    },

    get result(){
        return this.grade;
    }
};

student.grad = "A";
// console.log(student.result);

// Question 2 - Product Discount Getter

const product = {
    price: 5000,
    discount: 10,

    set newPrice(value){
        reduce = this.price/this.discount;
        this.price = this.price-reduce;
    },

    get getPrice(){
        return this.price;
    }
};

Object.defineProperty(product,"dprice",{
    get(){
        return `${this.price} is a new price`;
    },

    set(value){
        reduce = this.price/this.discount;
        return this.price-reduce;
    }
})
product.newPrice = true;
console.log(product.getPrice);

// Question 3 - Uppercase Setter

const user = {
    _username: "",

    set username(value){
        this._username = value;
    },

    get username(){
        return this._username.toUpperCase();
    }
};

user.username = "Aaditya";
console.log(user.username);

// Question 4 - Mobile Number Validation

// const customer = {
//     _mobile: "",
//     len: 0,

//     set mobile(value){
//         this._mobile = String(value);
//         this.len = this._mobile.length;
//     },

//     get mobile(){
//         if(this.len < 10){
//             return "Invalid Mobile Number";
//         }

//         return this._mobile;
//     }
// };

// customer.mobile = 8866352354;

// console.log(customer.mobile);

// Question 5 - Bank Account

// const account = {
//     balance: 1000,
//     // _deposit = 0,

//     set deposit(d){
//         this.balance = this.balance + d;
//     },

//     set withdraw(d){
//         this.balance = this.balance - d;
//     },

//     get getBalance(){
//         return this.balance;
//     }
// };

// account.deposit = 500;
// account.withdraw = 200;
// console.log(account.getBalance);

// Question 6 - Counter Object

const counter = {
    count: 0,

    set increment(v){
        this.count ++;
    },

    set decrement(v){
        this.count --;
    },

    set reset(v){
        this.count = 0;
    },

    get fetch(){
        return this.count;
    }
}

// counter.increment = true;
// counter.increment = true;
// counter.increment = true;
// counter.increment = true;
// counter.increment = true;
// counter.increment = true;
// counter.reset = true;
// counter.decrement = true;
// console.log(counter.fetch);

// Question 7 - Full Name Getter

const employee = {
    _firstName: "Virat",
    _lastName: "Kohli",

    get FullName(){
        return `${this._firstName} ${this._lastName}`;
    },

    set firstName(value){
        this._firstName = value;
    },

    set lastName(value){
        this._lastName = value;
    }
};

employee.firstName = "Rohit";
employee.lastName = "Sharma";
console.log(employee.FullName);

// Question 9 - Object.defineProperty Getter

const player = {
    firstName: "MS",
    lastName: "Dhoni"
};

Object.defineProperty(player,"fullName",{
    get(){
        return `${this.firstName} ${this.lastName}`;
    },

    set(value){
        [this.firstName, this.lastName] = value.split(" ");
    }
});

player.fullName = "Virat Kohli"; 
console.log(player.fullName);

// Question 11 - Age Calculator

function Person(name,birthdate){
    this.name = name;
    this.birthdate = birthdate;

    Object.defineProperty(this,"age",{
        get(){
            currentYear = new Date().getFullYear();
            return currentYear - this.birthdate;
        }
    });
}

let p = new Person("John",2000);
console.log(p.age);

// Question 12 - Temperature Converter

function Temperature(celsius){
    this.celsius = celsius;

    Object.defineProperty(this,"temp",{

        get(){
            return (this.celsius * (9/5)) + 32;
        }
        
    });
}

let t = new Temperature(30);
console.log(t.temp);

// Question 13 - Protected Salary

function Employee(name,salary){
    this.name = name;
    this._salary = salary;

    Object.defineProperty(this,"working",{
        set(){
            this._salary = salary;
        },
        get(){
            return `Salary is ${this._salary}`;
        }
    });
}

let p1 = new Employee("Aaditya",50000);
console.log(p1.working);

// Question 14 - Password Validation

const user1 = {
    password: "",

    set setpass(value){
        star = "*";
        len = value.length;
        this.password = star.repeat(len);
    },

    get getPass(){
        return this.password;
    }
};

user1.setpass = "132321enmsdasd";
console.log(user1.getPass);

// Question 15 - Real Interview Style

function Car(brand,price,foo = 100){
    this._brand = brand;
    this._price = price;
    this._foo = foo;

    Object.defineProperty(this,"details",{
        get(){
            return this;
        },
        set(value){
            [this._brand,this._price] =  value.split(" ");

            this._brand = brand;
            this._price = price;
        },
        foo(){
            return this._foo;
        }
    });
}

as = new Car("Toyota",2500000);
console.log(as.details._foo);
