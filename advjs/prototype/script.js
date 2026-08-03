const parent = {
    greet: function(){
        console.log("Hello from parent object!");
    }
};

const child = Object.create(parent);

child.sayHi = function(){
    console.log("Hi from the child object");
}

parent.greet();
child.sayHi();