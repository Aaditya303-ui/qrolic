const weakmap = new WeakMap();
const key = {};
const invalidKey = 'strong';
weakmap.set(key,'value');
// const invalidKey = 'string'; 
// weakMap.set(key, 'value'); 

const user1 = { id: 1 };
const user2 = { id: 2 };

weakmap.set(user1, 'John');
weakmap.set(user2, 'Alice');


console.log(weakmap.get(user1));
console.log(weakmap.get(user2));
weakmap.delete(user1);
console.log(weakmap);