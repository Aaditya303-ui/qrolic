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

// function nums(i, fn) {
//   return new Promise((resolve, reject) => {
//     setTimeout(() => {
//       console.log(`num ${i} is loaded`);
//       resolve("success");
//       if (fn) {
//         fn();
//       }
//     }, 2000);
//   });
// }

// nums(12)
//   .then(() => {
//     return nums(23);
//   })
//   .then(() => {
//     return nums(34);
//   })
//   .then(() => {
//     return nums(45);
//   });

// function nums(i) {
//   return new Promise((resolve, reject) => {
//     setTimeout(() => {
//       if (i == 34) {
//         reject("Error at 34");
//         return;
//       }
//       console.log(`nums ${i} loaded`);
//       resolve();
//     }, 2000);
//   });
// }

// nums(12)
//   .then(() => {
//     return nums(23);
//   })
//   .catch((err) => {
//     console.log(err);
//   })
//   .then(() => {
//     return nums(34);
//   })
//   .catch((err) => {
//     console.log(err);
//   })
//   .then(() => {
//     return nums(45);
//   })
//   .catch((err) => {
//     console.log(err);
//   });

// async function run(){
//     try{
//         await nums(12);
//         await nums(23);
//         await nums(34);
//         await nums(45);
//         await nums(56);
//     }catch(err){
//         console.log(err);
//     }
// }

// run();

// async function run(){
//     try{
//         await nums(12);
//     }catch(err){
//         console.log(err);
//     }
//     try{
//         await nums(23);
//     }catch(err){
//         console.log(err);
//     }
//     try{
//         await nums(34);
//     }catch(err){
//         console.log(err);
//     }
//     try{
//         await nums(45);
//     }catch(err){
//         console.log(err);
//     }
// }

// run();

// function nums(i,call){
//     setTimeout(()=>{
//         console.log(`num ${i} is loaded...`);
//         if(call){
//             call();
//         }
//     },2000);
// }

// nums(12,()=>{
//     nums(23,()=>{
//         nums(34,()=>{
//             nums(45);
//         })
//     })
// });

function nums(i,call){
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            if(i == 34){
                reject("reject 34");
                return;
            }else{
                console.log(`num ${i} is loaded...`);
                resolve("success");
            }
            if(call){
                call();
            }
        },2000);
    })
}

// Promise chaining

// nums(12)
// .then(()=>{
//     return nums(23);
// })
// .then(()=>{
//     return nums(34);
// })
// .then(()=>{
//     return nums(45);
// });

// nums(12)
// .then(()=>{
//     return nums(23);
// })
// .catch((err)=>{
//     console.log(err);
// })
// .then(()=>{
//     return nums(34);
// })
// .catch((err)=>{
//     console.log(err);
// }).then(()=>{
//     return nums(45);
// })
// .catch((err)=>{
//     console.log(err);
// }).then(()=>{
//     return nums(56);
// })
// .catch((err)=>{
//     console.log(err);
// })

// async function run(){
//     try{
//         await nums(12);
//     }catch(err){
//         console.log(err);
//     }
//     try{
//         await nums(23);
//     }catch(err){
//         console.log(err);
//     }
//     try{
//         await nums(34);
//     }catch(err){
//         console.log(err);
//     }
//     try{
//         await nums(45);
//     }catch(err){
//         console.log(err);
//     }
// }

async function run(...n){
    const values = [...n];

    for(let v of values){
        try{
            await nums(v);
        }catch(err){
            console.log(err);
        }
    }
}


run(12,23,34,45,56);