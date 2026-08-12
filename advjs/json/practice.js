// Q1 - Basic Parse

// const text = '{"name":"Aaditya","age":22}';

// data = JSON.parse(text);
// console.log(data.name);
// console.log(data.age);

// Q2 - Parse Array

// const text = '["HTML","CSS","JavaScript"]';
// data = JSON.parse(text);
// console.log(data[2]);

// Q3 - Reviver Function

// const text = '{"name":"Rahul","age":20}';
// obj = JSON.parse(text,(key,value)=>{
//     if(key == 'age'){
//         return value+5;
//     }
//     return value;
// })

// console.log(obj);

// Q4 - Remove Property While Parsing

// const text = '{"name":"John","age":30,"city":"Rajkot"}';

// abs = JSON.parse(text,null,['name','age']);
// console.log(abs.city);

// Q5 - Basic Stringify

// const person = {
//   name: "John",
//   age: 30
// };

// data = JSON.stringify(person);
// console.log(data);

// Q6 - Stringify Selected Properties

// const person = {
//   name: "John",
//   age: 30,
//   city: "Rajkot",
//   country: "India"
// };

// data = JSON.stringify(person,["name","city"]);
// console.log(data);

// Q7 - Stringify Replacer Function

// const person = {
//   name: "John",
//   age: 30
// };

// data = JSON.stringify(person,(key,value)=>{
//     if(key == "age"){
//         return value+10;
//     }
//     return value;
// })

// console.log(data);

// Q8 - Pretty Print JSON

// const person = {
//   name: "John",
//   age: 30,
//   city: "Rajkot"
// };

// data = JSON.stringify(person,null,4);
// console.log(data);

// Q9 - Deep Copy

// const user = {
//   name: "Aaditya",
//   address: {
//       city: "Rajkot"
//   }
// };

// data = JSON.parse(JSON.stringify(user));
// data.address.city = "Ahmedabad";
// console.log(data);

// Q11 - Infinity Problem

// const person = {
//   name: "John",
//   salary: Infinity
// };

// console.log(JSON.stringify(person));

// Q12 - Nested Object Replacer

// const employee = {
//   name: "Rahul",
//   details: {
//       salary: 50000,
//       city: "Rajkot"
//   }
// };

// data = JSON.stringify(employee,(key,value)=>{
//   if(key == "salary"){
//     return value*2;
//   }
//   return value;
// },4)

// console.log(data);

// Q13
// console.log(
//     JSON.parse('{"age":22}')
// );

// Q14
// const obj = {
//     name:"John",
//     sayHi:function(){
//         console.log("Hi");
//     }
// };

// console.log(
//     JSON.stringify(obj)
// );

// const obj = {
//     a: undefined,
//     b: null,
//     c: 10
// };

// console.log(
//     JSON.stringify(obj,null,3)
// );

// Q1 - Parse and Print

const text = '{"company":"Google","employees":1000}';

data = JSON.stringify(text,);
console.log(data);
// console.log(data.employees);