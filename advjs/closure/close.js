// let company = "Google";

// function developer()
// {
//     console.log(company);
// }

// developer();

// function company()
// {
//     let project = "Expense";

//     function employee()
//     {
//         console.log(project);
//     }

//     return employee;
// }

// let worker = company();
// worker();

function counter()
{
    let count = 0;

    return function()
    {
        count++;
        console.log(count);
    };
}

// let increment = counter();

// increment();
// increment();

(function work()
{
    console.log("work");
})();

