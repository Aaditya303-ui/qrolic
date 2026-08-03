const obj = {
    property1: "Lets do it",
    property2: "Say wannakam"
};

const hero = {
    name: "Spiderman",
    age: 22,
    person: "Peter Parker"
};

let user = {
    name: "Johnny bairstow"
};

// const descriptor1 = Object.getOwnPropertyDescriptor(obj,'property1');
// const descriptor2 = Object.getOwnPropertyDescriptor(obj,'property2');



// console.log(descriptor1);
// console.log("property1 configurable: ",descriptor1.configurable);
// console.log("property1 writable: ",descriptor1.writable);
// console.log("property1 ennumerable: ",descriptor1.enumerable);
// console.log("property1 configurable: ",descriptor1.configurable);

// const allDescriptor = Object.getOwnPropertyDescriptors(hero);
// console.log(allDescriptor);
// console.log(allDescriptor.name);
// console.log(allDescriptor.name.value);

// let descriptor = Object.getOwnPropertyDescriptor(user,'name');
// console.log(descriptor);

user = {};

// Object.defineProperty(user,"name",{
//     value: "Aadityasinh Ashoksinh jadeja"
// });

// descriptor = Object.getOwnPropertyDescriptor(user,'name');
// console.log(descriptor); // returns false all 

// user = {
//     name: "Aaditya"
// };

// Object.defineProperty(user,"name",{
//     writable: false
// });

// user.name = "Sky";

// console.log(user);

user = {};

// Object.defineProperty(user,"name",{
//     value: "Suryakumar yadav",
//     writable: true
// })

// user.name = "Ishan Kishan";
// console.log(user.name);

// user = {
//     name: "Johnny",
//     toString(){
//         return this.name;
//     }
// };

// for(let key in user) console.log(key);

// Object.defineProperty(user,"toString",{
//     enumerable: false
// });

// for(let a in user){
//     console.log(user);
// }

user = {};

// writable

// Object.defineProperty(user,"name",{
//     value: "Aadityasinh Jadeja",
//     writable: true
// });

// user.name = "Virat";
// console.log(user.name);


// hides it from: for...in , Object.keys()

// user = {
//     name: "Michell Jones"
// };

// user1 = {

// }

// Object.defineProperty(user,"name",{
//     configurable: false
    // configurable: true
// });

// Object.getOwnPropertyDescriptors(user1,"thor",{
//     value: "Zor ka jhatka"
// });

// delete user.name;

// obj : {
//     a: "aj maxwell"
// };

// Object.defineProperty(user,"name",{
//     value:"Aaditya",
//     writable:true,
//     enumerable:true,
//     configurable:true
// });