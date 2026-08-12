// JSON.parse(s)

// s = '{"name": "Aaditya", "age": 22, "city": "Rajkot"}';
// obj = JSON.parse(s);
// console.log(obj);

// s = '{"name": "Aaditya", "age": 22, "city": "Rajkot"}';
// const obj = JSON.parse(s,(key,value)=>{
//     if(key === "age"){
//         return value+2;
//     }
//     return value;
// });

// console.log(obj);

// const a = { name:'rahul', age: 22 };
// localStorage.setItem('user',JSON.stringify(a));

// const s = localStorage.getItem('user');
// const obj = JSON.parse(s);
// console.log(obj);

// const s = `{ "theme": "dark", "language": "en" }`;
// const obj = JSON.parse(s);
// console.log(obj.theme);

// const value = {
//     Company: "GeeksforGeeks",
//     Estd: 2009,
//     location: "Noida"
// };

// const result = JSON.stringify(value);
// console.log(result);

// let obj = {
//     name: "GFG",
//     add: {
//         country: "India",
//         state: {
//             code: "JS",
//             topic: "stringify"
//         }
//     }
// }

// let obj1 = JSON.parse(JSON.stringify(obj));
// obj1.add.state.topic = "Stringify Object";
// console.log(obj1);

// const text = '{"name":"John","age":30,"city":"New York"}';
// let person = JSON.parse(text);
// let name = person.name;
// console.log(name);

// const text = '["Ford","Volvo","BMW"]';
// const cars = JSON.parse(text);
// let name = cars[0];
// console.log(name);

// const text = '{"name":"John", "age":30, "city":"New York"}';
// const person = JSON.parse(text);
// console.log(person.name);

const person = {
    name: "john",
    age: 30,
    city: "New York",
    num: Infinity
};

// const text = JSON.stringify(person);
// console.log(text);

// const cars = ["Ford", "Volvo", "BMW"];
// text = JSON.stringify(cars);

// text = JSON.stringify(person,["name","age","city"]);

// const text = JSON.stringify(person, function(key, value){
//     if(key == "age"){
//         value = value+2;
//     }
//     return value;
// })

// text = JSON.stringify(person,null,1);
// console.log(text);

const myobj = {name: "john", age: 31, city: "newYork"};
const myJson = JSON.stringify(myobj);
localStorage.setItem("items",myJson);

text = localStorage.getItem("items");
name = JSON.parse(text);