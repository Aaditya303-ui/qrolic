// const person1 = { name: "Virat" };
// const person2 = { name: "Aaditya" };
// const person3 = { name: "Rohit" };

// function greet(greeting){
//     return `${greeting} to ${this.name}`;
// }

// console.log(greet.call(person3, "Hello"));

// const person = {
//     fullName: function(state,city){
//         return this.firstName + " " + this.lastName + " state: "+state+" city: "+city;
//     }
// }

// const person1 = {
//     firstName: "Aadityasinh",
//     lastName: "Jadeja"
// }

// const person2 = {
//     firstName: "Marry",
//     lastName: "Jane"
// }

// const person = {
//     fullName: function(state,city){
//         return this.firstName + " " + this.lastName;;
//     }
// }

// console.log(person.fullName.call(person1));
// // console.log(person.fullName.call(person2));
// console.log(person.fullName.call(person1,"Gujarat","Rajkot"));

// p = {
//     name: "pahul"
// };

// function greet(greeting){
//     return `${greeting} ${this.name}`;
// }

// console.log(greet.apply(p,["Hello"]));
// console.log(greet.call(p,"hello"));

// console.log(person.fullName.apply(person1));
// console.log(person.fullName.apply(person2,["abc","xyz"]));
// console.log(person.fullName.call(person2,"abc","xyz"));

// const numbers = [12,23,34,45];
// console.log(Math.max.apply(null,numbers));

// =============================================================================

// const person2 = {
//     firstName: "Marry",
//     lastName: "Jane"
// }

// const person1 = {
//     firstName: "Peter",
//     lastName: "Parker"
// }

// const person = {
//     IntroduceIt: function(role){
//         return `${this.firstName} ${this.lastName} working in ${role}`;
//     }
// }

// const persona = {
//     IntroduceIt: function(role){
//         return `${this.firstName} ${this.lastName}`;
//     }
// }

// console.log(person.IntroduceIt.call(person2,"New anchor"));
// console.log(person.IntroduceIt.apply(person1,["Photographer"]));

// console.log(persona.IntroduceIt.apply(person1));

// const person4 = { name: "Aadityasinh Jadeja" };
// const person5 = { name: "Shreyas Iyer" };

// function greet()
// {
//     return `Hello ${this.name}`;
// }

// const greetfn = greet.bind(person5);

// console.log(greetfn());

const domo = {
    firstname: "David",
    lastname: "Warner",
    fullIntro: function(){
        return `${this.firstname} ${this.lastname}`;
    }
}

const crick = {
    firstname: "Shane",
    lastname: "Watson"
}

let fullName = domo.fullIntro.bind(crick);
console.log(fullName());

function multiply(a,b)
{
    return a*b;
}

const o = {
    firstname: "Tim",
    lastname: "David",
    display: function(){
        return `${this.firstname} ${this.lastname} the destroyer`;
    }
}

const double = multiply.bind(null,2);
//console.log(double(10));
console.log(o.display());