class Bird {
    constructor(name){
        this.name = name;
    }
}

const canFly = {
    fly(){
        console.log("flying....");
    }
}

class bird1{}
class Airplane{}

Object.assign(Bird.prototype,canFly);

const bird = new Bird("Parrot");

Object.assign(bird1.prototype,canFly);
Object.assign(Airplane.prototype,canFly);

b1 = new bird1();
airplane = new Airplane();

// bird.fly();
// airplane.fly();
// b1.fly();

class scorecard{
    constructor(name,runs){
        this.name = name;
        this.runs = 0;
    }
}

let runFest = {
    six(){
        this.runs = this.runs + 6;
    },

    four(){
        this.runs = this.runs + 4;
    },

    score(){
        return this.runs;
    }
};

Object.assign(scorecard.prototype,runFest);

virat = new scorecard("Virat");
// virat.six();
// virat.six();
// virat.four();
// console.log(virat.score());

// const DoodleHome = {
//     home(){
//         console.log("Going home");
//     }
// };

// const DoodleSpeak = {
//     __proto__: DoodleHome,

//     speak(){
//         console.log("Speaking");
//     }
// };

// DoodleSpeak.speak();
// DoodleSpeak.home();

let employeeActions = {
    showMessage(message){
        console.log(message);
    }
};

class Employee {
    constructor(name) {
        this.name = name;
    }
}

let employeeWork = {
    __proto__: employeeActions,

    start(){
        super.showMessage(`${this.name} started working`);
    },

    endwork(){
        super.showMessage(`${this.name} finished working`);
    }
}

// Object.assign(employeeActions.prototype,employeeWork);
Object.assign(Employee.prototype,employeeWork);

const emp1 = new Employee("Aaditya Jadeja");
// emp1.start();
// emp1.endwork();