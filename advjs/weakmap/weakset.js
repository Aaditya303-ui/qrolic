let weakset = new WeakSet();

let obj1 = { name: "Pranjal" };
let obj2 = { name: "Pranav" };

weakset.add(obj1);
weakset.add(obj2);

console.log(weakset);

weakset.delete(obj2);
obj2 = null;
console.log(weakset.has(obj2));