// const user = {};

// Optional chaining (?.) handles nested 

// error
// console.log(user.address.city);

// using optional chaining
// console.log(user.address?.city);

// const employee = {
//     name: "Aaditya",
//     address: {
//         city: "Rajkot"
//     }
// };

// console.log(employee.address?.city);

// const users = [];

// console.log(users[0]?.name);

// Nullish Coalescing: it is use to handle undefined default value in left side
// value ?? defaultValue

// const name = null;
// console.log(name ?? "Guest");

// const city = undefined;
// console.log(city ?? "abcd");

// const user = {
//     name: "Aaditya",
    // address:{
    //     city: "Rajkot"
    // }
// };

// const city = user.address?.city ?? 'Unknown';
// console.log(city);

// console.log(false || "default");
// console.log(false ?? "default");

// const user = {
//     profile:{
//         name: "Amina"
//     }
// }

// console.log(user?.profile?.address?.city ?? "default");

// let obj = {};
// obj?.prop = "Aaditya";

// 4. Combining With Function Calls

// const services = {
//     fetch: ()=> "data"
// };

// console.log(services?.fetch?.());
// console.log(services?.fetchData?.());

// config = {};
// const maxEntries = config?.network?.retries ?? 3;
// console.log(maxEntries);

// const employee = {
//     name: "Aaditya",
//     address: {
//         city: "Rajkot"
//     }
// };

// console.log(employee?.address?.city ?? "Default");

// Question 2 - User Profile Lookup

// const user = {
//     profile: {
//         name: "Virat"
//     }
// };

// console.log(user.profile?.address?.city ?? "City Not Available");

// Question 3 - First Student Name
// const students = [];
// Using optional chaining, get the first student's name.
// If no student exists, print:
// No Students Found

// Question 4 - Optional Function Call

// const services = {
//     fetchData() {
//         return "Data Loaded";
//     }
// };

// console.log(services?.fetchData?.() ?? "Not Available");

// Question 5 - Full Challenge

// const config = {
//     database: {
//         host: "localhost"
//     }
// };

// console.log(config?.database?.host);
// console.log(config?.database?.host?.port ?? 3306);