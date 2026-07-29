// function count(c)
// {
//     return new Promise((resolve,reject)=>{
//         console.log("count ",c);
//         reject("failed");
//         // resolve("success");
//     })
// }

// async function work()
// {
//     await count(12);
//     await count(13);
//     await count(14);
// }

// work();
// work().catch((err)=>{
//     console.log(err);
// })
// console.log(work());

// let d = new Date(2026,7,12);

// console.log(156e-5);

let object = {
    name: "Aadityasinh jadeja",
    age: 22,
    role: "web devloper",
    intro: function(){
        return `His name is ${this.name} and its age ${this.age}`;
    },
    address:{
        country: "india",
        state: "Gujarat",
        city: "rajkot"
    }
}
object.age = 30;

// ans = object;
// console.log(ans);

for(let k in object)
{
    console.log(`${k}: ${object[k]}`);
}

for(let [keys,values] of Object.entries(object))
{
    console.log(`${keys}: ${values}`);
}

console.log(Object.keys(object));
console.log(Object.values(object));

function student(name,age)
{
    return {
        name,age
    }
}

s = new student("om",20);
console.log(s);

class student1{
    constructor(name,age)
    {
        this.name = name;
        this.age = age;
    }
}

s = new student1("shakti bhai",24);
console.log(s);


console.log(object.intro());
console.log(object.address.city);
console.log(object.address.country);
console.log(JSON.stringify(object));



copy = {...object};








