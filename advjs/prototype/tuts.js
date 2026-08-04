const parent = {
    greet: function() {
        console.log("hello from the parent object");
    }
};

const child = Object.create(parent);

child.sayHi = function(){
    console.log("Hi from the child class");
};

child.greet();
child.sayHi();

function animal(name){
    this.name = name;
}

animal.prototype.speak = function(){
    console.log(`${this.name} makes sound`);
};

const dog = new animal("duffy");

console.log(dog.name);
dog.speak();

let animal1 = {
    animalEats: true,
};

let rabbit = {
    rabitJumps: true,
};

rabbit.__proto__ = animal1;
console.log(rabbit.animalEats);
console.log(rabbit.rabitJumps);

let deer = {
    deerHops: true,
};

let animal2 = {
    animaleats: true,
};

Object.setPrototypeOf(deer,animal2);
console.log(deer.animaleats);
console.log(deer.deerHops);

animal3 = {
    eats: true,
    walk(){
        console.log('walking talking');
    }
};

bunny = {
    jumps: true,
    __proto__: animal3
};

longears = {
    earlength: 12,
    __proto__: animal3
}

bunny.walk();  
 