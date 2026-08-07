// Unique elements will be saved

// const letters = new Set([12,23,34,45]);

// letters.add("a");
// letters.add("b");
// letters.add("c");
// letters.add("c");
// letters.add("c");
// letters.add("c");
// letters.add("c");
// letters.add("c");
// letters.add("d");

// for(let l of letters){
//     console.log(l);
// }

// console.log(typeof letters);
// output: Object

// To check type
// console.log(letters instanceof Set);

// console.log(letters.size);

// console.log(letters.has("d"));

// letters.forEach(function(value){
//     console.log(value);
// })

// letters.value: Converts it to iterable object
// ans = letters.values();

// console.log(iterators);

// keys(): return as Iterators object with values in set 

// ans = letters.keys();

// entries(): return the ans in key [value,value] pair
// ans = letters.entries();
// for(let x of ans){
//     console.log(x);
// }

// let arr = [12,23,34,45];
// const [a1,a2,a3] = arr;
// console.log(arr);

// Union() method

// const A = new Set([12,23,34]);
// const B = new Set([45,56,67]);
// let ans = A.union(B);

const A = new Set(['a','b','c']);
const B = new Set(['b','c','d']);


// ans = A.intersection(B);

// difference
ans = A.difference(B);

// Symetric difference
ans = A.symmetricDifference(B);

// isSubsetOf
ans = A.isSubsetOf(B);

// isSupersetOf
ans = A.isSupersetOf(B);

// isDisjointFrom
ans = A.isDisjointFrom(B);

// console.log(ans);

const weakset = new WeakSet();
const user = { name: "Aaditya Jadeja" };

weakset.add(user);
// weakset.add("abcd");
// weakset.add(123);

// weakset.delete(name);
// weakset.delete(user);
// console.log(weakset.has(user));

// user = null;

let mySet = new WeakSet();
let myObj = {fname: "Aaditya", lname: "Jadeja"};

mySet.add(myObj);
console.log(myObj);

// Remove the Object from memory
myObj = null;
console.log(myObj);