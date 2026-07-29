// bind(): returns the new value by by permanently set this value

let nameobj = {
    name: "Aaditya"
}

let printName = {
    name: "Om",
    sayHi: function(){
        console.log(this.name);
    }
}

let hiFun = printName.sayHi.bind(nameobj);
hiFun();