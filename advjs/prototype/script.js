const parent = {
    greet: function(){
        console.log("Hello from the parents obj")
    }
};

const child = Object.create(parent);

child.sayHi = function(){
    console.log("hi from the child object");
};

function Animal(name){
    this.name = name;
}

Animal.prototype.speak = function () {
    console.log(`${this.name} makes sound. `);
};

const dog = new Animal("Buddy");
console.log(dog.name);

dog.speak();

let animal = {
    animalEats: true,
};

let rabbit = {
    rabbitJumps: true,
};

// rabbit.__proto__ = animal;
// console.log(rabbit.animalEats);
// console.log(rabbit.rabbitJumps);    

// child.greet();
// child.sayHi();

// Object.setPrototypeOf(rabbit,animal);
// console.log(rabbit.rabbitJumps);
// console.log(rabbit.animalEats);

const userMethod = {
    greet(){
        console.log("Hello");
    }
};

const user1 = {
    name: "Aaditya jadeja"
};

Object.setPrototypeOf(user1,userMethod);
user1.greet();

person.prototype.greet = function(){
    console.log("hello");
};