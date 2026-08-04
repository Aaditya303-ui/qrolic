class crick{

    constructor(name,nick,team){
        this.name = name;
        this.nick = nick;
        this.team = team;
    }

    work(){
        console.log("I am super class and will work");
    }

    describe(){
        console.log(`${this.name} his nickname is ${this.nick} and his team is ${this.team}`);
    }
}

class stats extends crick{
    status(desc){
        super.work();
        console.log(desc);
    }
}

const virat = new crick("Virat Kohli","King","Rcb");
rohit = new crick("Rohit Sharma","Hit-Man","Mi");

vs = new stats();
vs.status("Virat to play 2027 wc");
// rohit.describe();
// virat.describe();