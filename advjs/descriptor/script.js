"use strict"

const obj = {
  introduce: function (sal) {
    console.log(`${this.name} and his age is: ${this.age} and his ${sal}`);
  },

  introduce1: function () {
    console.log(`${this.name} and his age is: ${this.age}`);
  },
};

const emp1 = {
  name: "Aaditya jadeja",
  age: 22,
};

// obj.introduce.apply(emp1, [12, 23, 34]);
// obj.introduce.call(emp1, 22000);

// const foo = obj.introduce1.bind(emp1);
// foo();

function foo(num1, num2,num3) {
  console.log("num 1 is => ", num1);
  console.log("num 2 is => ", num2);
  console.log("num 3 is => ", num3);
}

// const bindFoo = foo.bind(2,10,20)

function introduce(name,address,role){
    console.log(`Hello his name is ${name}, and he is from ${address} and his role is ${role}`);
}

// const emp = introduce.bind(3,"Aaditya","Rajkot","Web developer");
// emp();


// function bindClone(callableFun,numberOfArg,...arguments){

//     const newVar = []
//     arguments.forEach(arg => {
//         newVar.push(arg)
//     })
//     return function(){
//         // callableFun.apply(numberOfArg,newVar)
//         callableFun(...newVar)
//     }

// }

// const newFoo = bindClone(foo,3,100,20,30)

// newFoo();
// newFoo();
// newFoo();


// const intro = (function(name){
//     console.log(`Hello everyone my name is ${name}`);
// });

// intro("Aaditya");



// function foo(){
//     globalScope = 30;
// }


// if(true){
//     var globalScope = 20;
// }
// foo();
// console.log("outside => " , globalScope)
