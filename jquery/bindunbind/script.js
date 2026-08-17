// $(document).ready(function () {
//   $("button").bind("click", function (event) {
//     alert("I am clicked");
//   });
// });

// Example 2

// $(document).ready(function () {
//   $("div").bind("mouseenter", function (event) {
//     document.getElementById("demo").innerHTML = "Hey pal";
//   });
// });

// Example 3

// $(document).ready(function () {
//   $("#demo").bind("mouseenter mouseleave", function () {
//     $(this).toggleClass("highlight");
//   });
// });

// function handleEvent(e)
//     {
//         alert(e.data.msg);
//     }

//     $("#demo").bind("click",{
//         msg: "Heading is been clicked"
//     },handleEvent);

// $(document).ready(function(){
//         $("#demo").on('click',function(){
//             alert("I am triggered");
//         })
//     })

//  $('div').on({mouseenter: function(){
//         $(this).css({"backgorund-color": "green","color":"blue"});
//     },
//     mouseout: function(){
//          $(this).css({"background-color": "yellow", "color": "green"});
//     }
// });

// $(document).ready(function(){
//     $('button').on('click',{
//         name: "Aaditya"
//     },
//     function(event){
//         $('span').text(event.data.name+ " is been clicked");
//     }
//     )
//    })

//  $('#clicked').click(function(){
//     alert("I am clicked");
//    });

//    $('#remove').click(function(){
//     $('#clicked').unbind();
//    });

// $(document).ready(function(){
//     $("p").on("click",function(){
//         $(this).css("background-color","pink");
//     });

//     $("button").click(function(){
//         $("p").unbind();
//     })
//   })

//  $(document).ready(function(){
//         $("#myInput").change(function(){
//             $(".result").text($(this).val());
//         });

//         $("button").click(function(){
//             $("#myInput").unbind();
//         });
//     })


// Example 5

