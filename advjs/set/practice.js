// Question 1 - Unique Numbers

// const nums = [10,20,10,30,20,40,50,40];

// let sets = new Set(nums);

// for(let s of sets){
//     console.log(s);
// }

// Question 2 - Unique Names

// const players = [
//     "Virat",
//     "Rohit",
//     "Virat",
//     "Gill",
//     "Rohit"
// ];

// let sets = new Set(players);

// for(let s of sets){
//     console.log(s);
// }

// Question 3 - Add Elements

// let skills = new Set();

// skills.add("Php");
// skills.add("JavaScript");
// skills.add("MySql");

// for(let s of skills){
//     console.log(s);
// }

// Question 4 - Check Existing Value

// const skills = new Set([
//     "PHP",
//     "JavaScript",
//     "React"
// ]);

// skills.forEach(function(value){
//     if(value == "React"){
//         console.log("Skill is present");
//     }
// })

// Question 5 - Size of Set

// const teams = new Set([
//     "India",
//     "Australia",
//     "England",
//     "India"
// ]);

// console.log(teams.size);

// Question 6 - Convert Array to Unique Array

// const marks = [45,45,78,90,90,12];

// let sets = new Set(marks);

// let arr = [];

// for(let s of sets){
//     arr.push(s);
// }

// console.log(arr);

// Question 7 - Iterate Using forEach

// const fruits = new Set([
//     "Apple",
//     "Banana",
//     "Orange"
// ]);

// fruits.forEach(function(val){
//     console.log(val);
// })

// Question 8 - Union

// const A = new Set([1,2,3]);
// const B = new Set([3,4,5]);

// c = A.union(B);
// console.log(c);

// Question 9 - Intersection

// ans = A.intersection(B);
// console.log(ans);

// Question 10 - Difference

// A = [1,2,3];
// B = [3,4,5];

// a1 = new Set(A);
// a2 = new Set(B);

// c = a1.difference(a2);
// console.log(c);

// Question 12 - Subset Check

// const A = new Set([1,2]);
// const B = new Set([1,2,3,4]);

// c = A.isSubsetOf(B);
// console.log(c);

// Question 13 - Superset Check

// c = B.isSupersetOf(A);
// console.log(c);

// Question 14 - Disjoint Sets

// const A = new Set([1,2,3]);
// const B = new Set([4,5,6]);

// c = A.isDisjointFrom(B);
// console.log(c);

// Question 15 - WeakSet Practice

const users = new WeakSet();

const user1 = { name: "virat" };
const user2 = { name: "rohit" };

users.add(user1);
users.add(user2);

users.delete(user2);
console.log(users);
console.log(users.has(user1));