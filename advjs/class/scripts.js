// class animal{
//     constructor(name){
//         this.speed = 0;
//         this.name = name;
//     }

//     run(speed){
//         this.speed = speed;
//         console.log(`${this.name} runs with the ${this.speed}`);
//     }

//     stop(){
//         this.speed = 0;
//         console.log(`${this.name} is been stopped`);
//     }
// }

// class Rabbit extends animal{
    
//     constructor(name,earlength){
//         super(name);
//         this.earlength = earlength;
//     }

//     hide(){
//         console.log(`${this.name} hides!`);
//     }

//     stop(){
//         super.stop();
//         this.hide();
//     }
// }

// let rabbit = new Rabbit("White rabbit",12);

// rabbit.run(5);
// rabbit.stop();
// console.log(rabbit.name);
// console.log(rabbit.earlength);

// class Animal1{
//     name='animal park';

//     showName(){
//         console.log(name);
//     }

//     constructor(name){
//         this.name = name;   
//     }
// }

// class rabbit1 extends Animal1{
//     name = 'rabbit1';
//     showName(){
//         console.log(name);
//     }
// }

// new Animal1();
// new rabbit1();

// class Person{
//     constructor(name){
//         console.log("I am a constructor");
//         this.name = name;   
//     }

//     greet(){
//         console.log(`Hello i am ${this.name}`);
//     }
// }

// const p1 = new Person("David warner");
// console.log(p1.name);
// p1.greet();

// console.log(p1.hasOwnProperty("greet"));

// single level inheritance

// class Animal{
//     speak(){
//         console.log("Animal speaks");
//     }
// }

// class dog extends Animal{
//     bark(){
//         console.log("Dog barks");
//     }
// }

// // Multilevel Inheritance

// class livingThing{
//     breathe(){
//         console.log("I am breathing");
//     }
// }

// class animal extends livingThing{
//     eat(){
//         console.log("Eating");
//     }

//     bark(){
//         console.log("barking");
//     }
// }

// class Dog extends animal{
//     bark(){
//         console.log("Barking");
//     }
// }

// const dg = new Dog();

// dg.bark();
// dg.eat();

class Animal{
    eat(){
        console.log("Eating");
    }
}

class Dog extends Animal{
    bark(){
        console.log("Barking");
    }
}

class cat extends Animal{
    meow(){
        console.log("meow meow...");
    }
}