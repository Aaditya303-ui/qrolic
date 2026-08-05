// function nums(i,fn){
//     setTimeout(()=>{
//         console.log(`num ${i} is loaded`);
//     },3000);

//     if(fn){
//         fn();
//     }
// }

// Call back hell

// nums(12,()=>{
//     nums(23,()=>{
//         nums(34);
//     });
// });

function nums(i, fn) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      console.log(`num ${i} is loaded`);
      resolve("success");
      if (fn) {
        fn();
      }
    }, 2000);
  });
}


nums(12)
  .then(() => {
    return nums(23);
  })
  .then(() => {
    return nums(34);
  })
  .then(() => {
    return nums(45);
  });
