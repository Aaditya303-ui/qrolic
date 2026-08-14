// $(document).ready(function () {
//   $("#btn").click(function () {
//     $("p").hide();
//   });
//   $("#head").click(function () {
//     $(".head1").hide();
//   });
// });


// To hide all elements

// $(document).ready(function(){
//     $(".snap").click(function(){
//         $("*").hide();
//     });
// });

// Using this 
// $(document).ready(function(){
//     $('.me').click(function(){
//         $(this).hide();
//     });
// });

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("p:first").hide();
//     });
// });

// To manipulate 2nd para

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("p:eq(0)").hide();
//     });
// });

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("ul li:first").hide();
//     })
// })

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("ul li:eq(1)").hide();
//     })
// })

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("ul li:first-child").hide();
//     })
// })

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("ul li:nth-child(2)").hide();
//     })
// })

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("[href]").hide();
//     });
// });

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("a[target='_blank']").hide();
//     });
// });

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $("a:not([target='_blank'])").hide();
//     });
// });

// Select all buttons elements of type of that element

// $(document).ready(function(){
//     $(".btn").click(function(){
//         $(":button").hide();
//     });
// });

// $(document).ready(function(){
//     $("tr:even").css("background-color","yellow");
//     $("tr:odd").css("background-color","aqua");
// })

// contains
// $(document).ready(function(){
//     $("h3:contains(doom)").css("background-color",'green');
// })

// $(document).ready(function () {
//       $("h3:contains(Doom)").css("background-color", "green");
//       $("h3:contains(Doom)").css("color", "white");
//     });

// $(document).ready(function(){
//       $(":empty").css("background-color",'yellow');
//       $("h3:has(p)").css("border","solid red");

//       $("#show").click(function(){
//         $("h3").show();
//       });

//       $("#hidden").click(function(){
//         $("h3").hide();
//       });

//       $("#style").click(function(){
//         $("h3").css("background-color","green");
//         $("h3").css("color","white");
//       })
//     })

//  $(document).ready(function(){
//       $(":text").css("background-color","yellow");
//       $(":password").css("background-color","green");
//       $(":checkbox").wrap("<span style='background-color:red'>");
//       $(":radio").wrap("<span style='background-color:pink'>");
//       $(":selected").css("background-color","aqua");
//     })