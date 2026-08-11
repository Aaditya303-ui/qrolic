text = "I am a goat";
pattern = /\w+$/;

pattern = /\b\w+\b/g;

// positive lookahead
// test = "100USD 200USD";
// pattern = /\d+(?=USD)/g;

// text = "aaditya@gmail.com";
// pattern = /\w+(?=@gmail\.com)/;

// text = "apple,banana,orange";
// pattern = /\w+(?=\,)/g;

// text = "100EUR 100USD";
// pattern = /^\d+(?!USD$)/;

// text = "₹500 ₹1200 ₹99 USD200";
// pattern = /(?<=₹)\d+/g;

// text = "@john admin @alice manager";
// pattern = /(?<!@)\b\w+\b/g;

// text = "@aaditya @virat @sachin";
// ans = text.match(pattern);

// text = "resume.pdf photo.jpg notes.txt";
// pattern = /(?!\w+\.)\w+/g;
// ans = text.match(pattern);

// text = "Order ID:12345 Order ID:56789 Order ID:99999";
// pattern = /(?!ORDER\sID:)\d+/g;
// ans = text.match(pattern);

// text = "1440×900";
// pattern = /(\d+)×(\d+)/;
// ans = text.match(pattern);

// text = "Mr John Mrs Smith Ms Jane";
// pattern = /(?:Mr|Mrs|Ms)\s(\w+)/g;
// ans = text.match(pattern);

// text = "aacbbbcac";
// pattern = /((a+)?(b+)?(c))*/;

// console.log(ans);


// person_list = `First_Name: John, Last_Name: Doe
// First_Name: Jane, Last_Name: Smith`;
// pattern = /First_Name:\s(\w+),\sLast_Name:\s(\w+)/g;

// match = person_list.matchAll(pattern);

// for(let x of match){
//     console.log(x[1], x[2]);
// }

// const personList = `First_Name: John, Last_Name: Doe
// First_Name: Jane, Last_Name: Smith`;
// pattern = /First_Name:\s(?<firstname>\w+),\sLast_Name:\s(?<lastname>\w+)/g;
// matches = personList.matchAll(pattern);

// for(let c of matches){
//     console.log(c[1], c[2]);
// }

text = "The best things in life are free";

// exec()
result = /e/.exec(text);

// test()
// result = /e/.test(text);
// console.log(result);

// match(): returns the result as array

// text = "The rain in SPAIN stays mainly in the plain";
// arr = text.matchAll(/ain/gi);
// console.log(arr);

// for(let a of arr.values()){
//     console.log(a);
// }

// text = "Visit Microsoft!";
// result = text.replace(/Microsoft/,"W3Schools");

// text = "Mr Blue has a blue house and a blue car";
// result = text.replace(/blue/gi,"red");
// console.log(result);

// text = "I love cats. Cats are very easy to love. Cats are very popular."
// text = text.replaceAll("cats","Dogs");
// text = text.replaceAll("Cats","dogs");
// console.log(text);