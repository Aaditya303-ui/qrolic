//Create a Date object for the current time.

// d = new Date();
// console.log(d.getFullYear());
// console.log(d.getMonth());
// console.log(d.getDate());

// const d = new Date("2026-08-10");

// const d = new Date();
// d.setFullYear(d.getFullYear()+4);
// console.log(d.getFullYear());

// const d = new Date();
// d.setMonth(11);
// console.log(d.toDateString());

// const d = new Date();
// d.setDate(25);
// console.log(d);

// const d = new Date(2026, 2, 1);
// console.log(d.toISOString());
// console.log(d.toUTCString());
// console.log(d.toLocaleDateString());
// console.log(d.toDateString());
// console.log(d.toString());

// b = new Date(2003,11,6);
// console.log(b.getFullYear());
// console.log(b.getMonth());
// console.log(b.getDate());

// const d = new Date();
// console.log(d.getFullYear());
// console.log(d.getMonth());
// console.log(d.getDay());
// console.log(d.getHours());
// console.log(d.getMinutes());
// console.log(d.getSeconds());

// f = new Date(2035,0,15);
// console.log(f);

// const d = new Date(2026, 0, 1);
// d.setMonth(11);
// d.setTime(23,59,59);
// console.log(d);

// const d = new Date(2026, 7, 10);
// d.setDate(d.getDate() + 15);
// console.log(d);

// const d = new Date(2026, 0, 31);
// d.setMonth(d.getMonth());
// console.log(d);

// const d = new Date();
// d.setDate(d.getDay()+30);
// console.log(d);

// const d = new Date();
// d.setFullYear(d.getFullYear()+2);
// d.setMonth(d.getMonth()+2);
// d.setDate(d.getDate()+10);
// console.log(d);

// console.log(Date.now());
// console.log(new Date(1754840000000));

// const startDate = new Date("2026-08-01");
// const endDate = new Date("2026-08-10");

// diff = endDate-startDate;
// Diffdays = diff/(24*60*60*1000);

// console.log(Diffdays);

// start = new Date("2026-07-10 10:00");
// end = new Date("2026-07-10 18:00");

// diff = end-start;
// diffhours = diff/(60*60*1000);
// console.log(diffhours);

// Find minutes difference between:

// start = new Date("2026-08-10T10:15:00");
// end = new Date("2026-08-10T12:45:00");
// difmin = end-start;
// min = difmin/(60*1000);
// console.log(min);

// d = new Date();
// console.log(d.toLocaleTimeString());
// console.log(d.toUTCString());
// console.log(d.getUTCHours());
// console.log(d.getHours());

// console.log(new Date().getUTCFullYear());
// console.log(new Date().getUTCMonth());
// console.log(new Date().getDay());
// console.log(new Date().getUTCHours());
// console.log(new Date().getUTCMinutes());

// console.log(new Date().toDateString());
// console.log(new Date().toISOString());
// console.log(new Date().toLocaleDateString("en-IN"));
// console.log(new Date().toLocaleDateString("en-UK"));
// console.log(new Date().toLocaleDateString("en-US"));

// Real Interview Questions

// Q27 — Age Calculator

// const dob = new Date("2003-12-06");
// const date = new Date();

// diff = date-dob;
// years = diff/(365*24*60*60*1000);
// console.log(years);

// Q30 — Countdown

// newyear = new Date(2027,0,1);
// date = new Date();
// diff = newyear - date;
// console.log((diff/(24 * 60 * 60 * 1000)));
// console.log((diff/(60 * 60 * 1000)));
// console.log((diff/(60 * 1000)));

// Q31 — Last Day of Current Month

const today = new Date();

const lastDay = new Date(
    today.getFullYear(),
    today.getMonth()+1,
    0
);

console.log(lastDay);