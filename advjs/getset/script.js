let demo = document.getElementById("demo");

const person = {
    firstName: "Aaditya",
    lastName: "Jadeja",
    language: "EN",
    get lang(){
        return this.language;
    }
};

const person1 = {
    language: "",
    set lang(lang){
        this.language = lang.toUpperCase();
    }
};

// person1.lang = "Hindi";

// demo.innerHTML = person1.language;

const count = {
    c: 0,

    set reset(value){
        this.c = 0;
    },

    set increment(value){
        this.c++;
    },

    set decrement(value){
        this.c--;
    },

    set add(value){
        this.c+=value;
    },

    get counter(){
        return this.c;
    }
};

// count.add = 5;
// count.increment = true;
// count.increment = true;
// count.reset = true;
// demo.innerHTML = count.counter;
content = demo.innerHTML;

let user = {
    name: "John",
    surname: "Smith",

    // get FullName(){
    //     return `${this.name} ${this.surname} is rockstar`;
    // },

    // set FullName(value){
    //     [this.name,this.surname] = value.split(" ");
    // }
}

Object.defineProperty(user,'FullName',{
    get(){
        return `${this.name} ${this.surname}`;
    },

    set(value){
        [this.name, this.surname] = value.split(" ");
    }
});

// user.FullName = "Virat Kohli";
// demo.innerHTML = user.name;
// demo.innerHTML = user.surname;
// demo.innerHTML = FullName;
// demo.innerHTML = user.FullName;

function User(name,birthday){
    this.name = name;
    this.birthday = birthday;

    Object.defineProperty(this,'age',{
        get(){
            currentDate = new Date().getFullYear();
            return currentDate - this.birthday.getFullYear();
        }
    });
}

let john = new User("John",new Date(2003,11,6));
demo.innerHTML = john.age;

function P(name){
    this._name = name;

    Object.defineProperty(this,"name",{
        get(){
            return `His name is ${this._name}`;
        },
        set(value){
            this._name = value;
        }
    });
}

const res = new P("Aaditya");
// res._name = "Om";
console.log(res.name);
