// (1) argument object

//function print()
//{
//    console.log(arguments);
//}

//print("Hello",400,false);

// const print = () =>{
//     console.log(arguments)
// }

// print("hello",400,false);

// (2) Arrow function do not create their own this

// const obj = {
//     name: 'Aadityasinh jadeja',
//     age: 22,
//     print: function()
//     {
//         console.log(this);
//     }
// }

// obj.print();

// const obj = {
//   name: 'deeecode',
//   age: 200,
//   print: () => {
//     console.log(this)
//   }
// }

// obj.print() window will be returned

// (3) Arrow function cant use his own constructor

// class Animal{
//     constructor(name,nums){
//         this.name = name;
//         this.nums = nums;
//     }

//     sayName(){
//         console.log(`my name is: ${this.name}`)
//     }
// }

// let dog = new Animal("tommy",4);
// dog.sayName();

// class Animal{
//     constructor = (name,numOfLegs) =>{
//         this.name = name;
//         this.numOfLegs = numOfLegs;
//     }

//     sayName()
//     {
//         console.log(`My name is: ${this.name}`);
//     }
// }

// class may not have field constructor

// class Animal {
//   constructor (name, numOfLegs){
//     this.name = name
//     this.numOfLegs = numOfLegs
//   }

//   sayName = () => {
//     console.log(`My name is ${this.name}`)
//   }
// }

// const Dog = new Animal("Bingo", 4)

// Dog.sayName()

// (4) arrow function cant be declared
// const user = {
//     name: "Aaditya",
//     show: () => {
//         console.log(this);
//     }
// };

