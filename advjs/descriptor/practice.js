const player = {
    name: "Virat Kohli"
};

descriptor1 = Object.getOwnPropertyDescriptor(player,"name");
console.log(descriptor1);
console.log(descriptor1.value);
console.log(descriptor1.writable);
console.log(descriptor1.enumerable);
console.log(descriptor1.configurable);

// Question 2 - Inspect All Properties

const hero = {
    name: "Thor",
    weapon: "Hammer",
    age: 1500
};

data = Object.getOwnPropertyDescriptors(hero);
console.log(data);

// Question 3 - Create Property Using defineProperty

user = {};

Object.defineProperty(user,"name",{
    value: "Steve roger"
})  

console.log(user); 

// Question 5 - Make Property Read Only

user = {};

Object.defineProperty(user,"name",{
    value: "Virat",
    writable: false
});

user.name = "Rohit";
console.log(user);

// Question 6 - Allow Modification


user = {};

Object.defineProperty(user,"name",{
    value: "Virat",
    writable: true
});

user.name = "Hardik";
console.log(user);

// Question 7 - Hide Property from Object.keys()

const user1 = {
    name: "Henry",
    work: "Software"
};

Object.defineProperty(user1,"name",{
    enumerable: false
});
nameDescriptor = Object.getOwnPropertyDescriptors(user1);
console.log(nameDescriptor);

for(let key in user1){
    console.log(key);
}

user = {
    name: "Bruce"
};

nameDescriptor = Object.getOwnPropertyDescriptors(user);
Object.defineProperty(user,"name",{
    configurable: true
});

delete user.name;
console.log(user);

// Question 11 - Lock a Property Completely

const employee = {};

Object.defineProperty(employee,"Salary",{
    value: 50000
})

salaryDescriptor = Object.getOwnPropertyDescriptors(employee);
employee.Salary = 25000;
delete employee.Salary;
console.log(salaryDescriptor);

// Question 12 - Hidden Internal ID

product = {
    name: "Laptop"
};

Object.defineProperty(product,"id",{
    value: 101,
});