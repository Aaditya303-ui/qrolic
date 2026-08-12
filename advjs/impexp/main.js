// import { add, subtract } from "./math.js";

// console.log(add(10, 20));
// console.log(subtract(20, 10));

// console.log("Application started");

// async function loadMaths() {
//     const math = await import('./math.js')

//     console.log(math.add(12,23));
//     console.log(math.subtract(20,13));
// }

// loadMaths();

// import {getUser,getRole,getCompany} from './user.js';
// import {getUser,getRole,getCompany} from './user.js';

// console.log(getUser("Aaditya"));
// console.log(getRole());
// console.log(getCompany());

// import {add as sum} from './math.js';
// import { multiply as prod } from './math.js';
// import { subtract as sub } from './math.js';

// console.log(sum(12,23));
// console.log(prod(12,12));
// console.log(sub(20,9));

// import { greet,sayBye } from "./util.js";

// greet();
// sayBye();

// document.addEventListener('click',()=>{
//     console.log(prod(12,12));
// })

const math = await import('./calc.js');
console.log(math.add(12,23));
console.log(math.divide(30,10));
console.log(math.divide(30,10));