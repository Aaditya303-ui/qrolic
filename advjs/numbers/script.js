let number = 42;

// console.log(number);
// console.log(typeof number);

// Scientific Notation

// let a = 156e5;
// let b = 156e-5;
// console.log(10+19);
// console.log(10+"19");

// let x1 = 0o456;
// let x2 = 0b11;
// console.log(x2);

// console.log(undefined+10);
// console.log(Number.MAX_VALUE);
// console.log(Number.MIN_VALUE);
// console.log(Number.POSITIVE_INFINITY);
// console.log(Number.NEGATIVE_INFINITY);
// console.log(Number.NaN);
// console.log(Number.EPSILON);
// console.log(Number.MAX_SAFE_INTEGER);
// console.log(Number.MIN_SAFE_INTEGER);

// console.log(Number("123"));
// console.log(Number("12.5"));
// console.log(Number(true));
// console.log(Number(false));
// console.log(Number(undefined));
// console.log(Number("Hello"));

// console.log(parseInt("123"));
// console.log(parseInt("123px"));
// console.log(parseInt("12.99"));
// console.log(parseInt("abc123"));

// console.log(parseFloat(12.99));
// console.log(parseFloat("12.99px"));
// console.log(parseFloat("string"));
// console.log(parseFloat("abc123"));

// console.log(Number.isNaN(NaN));          // true
// console.log(Number.isNaN("Hello"));      // false
// console.log(Number.isNaN(undefined));    // false
// console.log(Number.isNaN(Number("ABC"))); // true

// console.log(Number.isInteger(10));      // true
// console.log(Number.isInteger(10.5));    // false
// console.log(Number.isInteger("10"));    // false
// console.log(Number.isInteger(-25));     // true

// console.log(isNaN("Hello"));
// console.log(isNaN(NaN));
// console.log(isNaN(NaN));
// console.log(Number.isInteger(10.5));  
// console.log(Number.isInteger(10)); 

// console.log(isFinite(10.5));
// console.log(isFinite(100));

// To Fixed

// n = 12.23456

// console.log(n.toFixed(0));
// console.log(n.toFixed(1));
// console.log(n.toFixed(2));
// console.log(n.toFixed(3));
// console.log(n.toFixed(4));

// console.log(Number("123"));
// console.log(Number("123abc"));
// console.log(Number(""));
// console.log(Number(" "));

// console.log(parseInt("123px"));
// console.log(Number("123px"));

// console.log(parseInt("12.99"));
// console.log(Number("12.99"));

// console.log(0b1010);
// console.log(0o17);
// console.log(0xFF);

// console.log(isNaN("Hello"));
// console.log(Number.isNaN("Hello"));

// console.log(isNaN(Number("ABC")));
// console.log(Number.isNaN(Number("ABC")));

// console.log(Number.isInteger(10));
// console.log(Number.isInteger(10.0));
// console.log(Number.isInteger(10.5));
// console.log(Number.isInteger("10"));

// console.log(Number.isFinite(100));
// console.log(Number.isFinite(Infinity));
// console.log(Number.isFinite(-Infinity));
// console.log(Number.isFinite(NaN));

// let num = 12.6789;

// console.log(num.toFixed(0));
// console.log(num.toFixed(2));
// console.log(num.toFixed(3));

// let num = 1234.567;


// console.log(num.toPrecision(1));
// console.log(num.toPrecision(2));
// console.log(num.toPrecision(3));
// console.log(num.toPrecision(4));
// console.log(num.toPrecision(5));
// console.log(num.toPrecision(7));


// console.log(Number.MAX_SAFE_INTEGER + 1);
// console.log(Number.MAX_SAFE_INTEGER + 2);
// console.log(parseInt("12.5px"));

// let x = 999999999999999;
// let y = 99999999999999999;

// let x1 = Number.MAX_SAFE_INTEGER;
// let x2 = Number.MIN_SAFE_INTEGER;
// console.log(x1);
// console.log(x2);
// console.log(x);
// // console.log(y);

// x = 999999999999999n;
// y = BigInt("999999999999999");
// x1 = BigInt("123");
// console.log(x);
// console.log(y);

let x = 9007199254740995n;
let y = 9007199254740995n;

// console.log(x*y);
// console.log(x+y);
// console.log(x-y);
// console.log(x/y);

// console.log(10n === 10);
let num = 256n;
let oct = 0o400n;
let hex = 0x100n;
let bin = 0b100000000n;

console.log(typeof bin);    
const mixed = [4n, 6, -12n, 10, 4, 0, 0n];
console.log(mixed.sort((a,b)=> (a < b ? -1 : a > b ? 1 : 0)));

const bigint = 12345678912345678912n;
console.log(bigint.toLocaleString("de-DE"));
console.log(bigint.toString("de-DE"));