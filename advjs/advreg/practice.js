// Question 1: Extract Date Parts

// const date = "09-08-2026";
// const pattern = /(\d{2})-(\d{2})-(\d{4})$/gm;

// const data = date.split(pattern);
// console.log(data[1]);
// console.log(data[2]);
// console.log(data[3]);

// Question 2: Extract Email Components

// const name = "Virat Kohli";
// const pattern = /(\w+)\s(\w+)/;

// const data = name.split(pattern);
// let v = data[1];
// let k = data[2];
// let ans = `${k}, ${v}`;

// console.log(ans);

// Question 5: Extract URL Information

// const url = "https://www.google.com";
// const pattern = /(\w+):\/\/(\w+).(\w+.\w+)/;

// const data = url.split(pattern);
// console.log(data[1]);
// console.log(data[2]);
// console.log(data[3]);

// Match the number only if followed by:

// i = "50kg";
// pattern = /\d+(?=kg)/;
// console.log(i.match(pattern));

// i = "name:John age:25";
// p = /\w+(?=:\w+)/g;

// console.log(i.match(p));

// i = "100INR 100EUR 100USD";
// p = /\d+(?!USD)/;

// console.log(i.match(p));

// i = "resume.pdf";

// working

// str = "Mr John Mrs Smith Ms Jane";
// pattern = /(?!(?:Mr|Mrs|Ms))\b(\w+)\b/g;
// match = str.match(pattern);
// console.log(match);

// Q4 Match only the number from:

// text = "100USD 500USD 900USD 900INR";
// pattern = /\d+(?=USD)/g;
// match = text.match(pattern);
// console.log(match);

// Q5 Match usernames only if followed by:

// string = "john@gmail.com alice@gmail.com";
// pattern = /\w+(?=@gmail\.com)/g;
// matches = string.match(pattern);
// console.log(matches);

// Q6 Match a word only if immediately followed by a colon.
// str = "name:John age:25 city:Rajkot";
// pattern = /\w+(?=:\w+)/g;
// matches = str.match(pattern);
// console.log(matches);

// Q7 Match numbers not followed by:
// let text = "Visit Microsoft!";
// let result = text.replace(/Microsoft/,"W3Schools");
// console.log(result);

// text = "John Smith";
// pattern = /(\w+)\s(\w+)/;
// match = text.match(pattern);
// console.log(match);

// text = "1440x900";
// pattern = /(\d+)x(\d+)/;
// match = text.match(pattern);
// console.log(match);

// txt = "John Smith";
// pattern = /(?<first>\w+)\s(?<last>\w+)/;
// match = txt.match(pattern);
// console.log(match);

// txt = "2026-08-10";
// pattern = /(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})/;
// match = txt.match(pattern);
// console.log(match);

txt = "Mr John Mrs Smith Ms Jane";
pattern = /(?:Mr|Mrs|Ms)\s(\w+)/gi;
matches = txt.matchAll(pattern);

for (const match of matches) {
    console.log(match[1]);
}