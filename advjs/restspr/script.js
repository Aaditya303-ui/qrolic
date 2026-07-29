function myFunc(...args)
{
    console.log(args);
}

function sum(...numbers)
{
    return numbers.reduce((total,num)=>total + num);
}

console.log(sum(12,34,45,56,67));

// collecting function arguments

function greet(greeting,...names)
{
    return `${greeting}, ${names.join(' and ')}`;
}

console.log(greet("tammanah","shraddha","tripti"));

// extrating property a and rest parameters collect the rest properties

// const {a,...rest} = {a: 1,b: 2,c: 3};
// console.log(a);
// console.log(rest);

//  Destructuring with Rest
// extracts the first element and gathers the rest remaining elements

// const [first,...rest] = [1,2,3,4,5];
// console.log(first);
// console.log(rest);

// function mul(fact,...nums)
// {
//     return nums.map((n)=>n*fact);
// }

// console.log(mul(2,1,2,3,4,5));

// spread operator: use to expand array or object
// helps in combining multiple arrays into one makes syntax more concise and readable

const n = [1,2,3,4];
const ne = [...n,5,6,7,8];
console.log(ne);

// use case of spread operators

// (1) merging the two array

const a1 = [1,2];
const a2 = [3,4];
const a3 = [...a1,...a2];
console.log(a3);

// (2) cloning array

const original = [10, 20, 30];
const clone = [...original];
console.log(clone);

// (3) combining objects

const obj1 = { a: 1, b: 2};
const obj2 = { c: 3, d: 4};

const combine = {...obj1,...obj2};
console.log(combine);

// rest params

function sumArg(...arg)
{
    let sum = 0;

    for(let a of arg)
    {
        sum = sum + a;
    }
    return sum;
}

function showNames(firstName,lastName,...titles)
{
    for(let t of titles)
    {
        console.log(t);
    }
    return `${firstName} ${lastName}`;
}

// console.log(sumArg(12,23,34,45,56));
console.log(showNames("Aaditya","Jadeja","King","Superman"));