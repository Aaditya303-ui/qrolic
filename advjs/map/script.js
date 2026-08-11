let myMap = new Map();

// let anotherMap = new Map([
//     ["Name","Aadityasinh Jadeja"],
//     ["age",23],
//     ['city',"rajkot"],
//     ['role','web developer']
// ]);

// // console.log(anotherMap);

myMap.set('name','tony stark');
myMap.set('role','lead hero');
myMap.set('rname','iron man');
myMap.set('age',54);

// console.log(myMap.get('name'));
// console.log(myMap.get('role'));
// console.log(myMap.get('rname'));
// console.log(myMap.get('age'));

// myMap.delete('age');
// console.log(myMap.has('name'));
// console.log(myMap.has('age'));
// myMap.clear();
// console.log(myMap.size);

// console.log(myMap);

// myMap.forEach(function(value,key){
//     console.log(`${key} => ${value}`);
// })

// for(let a of myMap.entries()){
//     console.log(a);
// }

// for(let x of myMap.keys()){
//     console.log(x);
// }

// for(let x of myMap.values()){
//     console.log(x);
// }

// const apples = {name: 'apple'};
// const banana = {name: 'Banana'};
// const oranges = {name: 'Oranges'};

// fruit = new Map();

// fruit.set(apples,500);
// fruit.set(apples,700);
// fruit.set(apples,1000);

// console.log(fruit.get(apples));

const fruits = [
    { name: 'apples', quantity: 300 },
    { name: 'bananas', quantity: 500 },
    { name: 'oranges', quantity: 200 },
    { name: 'kiwi', quantity: 150 }
];

// const results = Map.groupBy(fruits, 
//     fruit => fruit.quantity > 200 ? 'ok' : 'low'
// );

// const result = Map.groupBy(fruits,
//     ( {quantity} ) => quantity > 200 ? "ok" : "low"
// );
// console.log(result);

// function groupFruits(fruit){
//     return fruit.quantity > 200 ? "ok" : "low";
// }

// const result = Map.groupBy(fruits,groupFruits);
// console.log(result);