// (function(){
//     let x = 10;
//     console.log(x);
// })();

// (function(){
//     let hidden = 12;
// })();

// (function(name){
//     console.log(`Hello i am ${name}`);
// })("Aaditya");

// (function(n){
//     console.log(n*n);
// })(12);

// console.log((function factorial(n){
//     if(n <= 1) return 1;
//     return n * factorial(n-1);
// })(4));

// let counter = (function(){
//     let value = 0;
//     return{
//         increment(){ value++ },
//         get(){ return value }
//     }
// })();

// counter.increment();
// let x = counter.get();

// console.log(x);

// (function(){
//     let l = 'I am local var';
//     console.log(l);
// })();

// var result = (function(x,y){
//     return x+y;
// })(12,23);

// var counter = (function(){
//     let count = 0;

//     return{
//         increment: function(){
//             count++;
//         },
//         decrement: function(){
//             count--;
//         },
//         get: function(){
//             return count;
//         }
//     }
// })();

// counter.increment();
// counter.increment();
// counter.increment();
// counter.decrement();
// console.log(counter.get());
// console.log(result);