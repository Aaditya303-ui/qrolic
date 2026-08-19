// $(document).ready(function () {
//   $("#loadbtn").click(function () {
//     $.ajax({
//       url: "gfg.txt",
//       success: function (message) {
//         $("#message").html(message);
//       },
//     });
//   });
// });

// $.ajax({
//   url: "profile.txt",
//   success: function (msg) {
//     $("#result").html(msg);
//   },
//   error: function (xhr, status, error) {
//     console.log("Unable to load");
//   },
// });

// $(document).ready(function () {
//   $("#news").load("gfg.txt");
// });

// $("#loadBtn").click(function () {
//   $("#content").load("gfg.txt", null, function (response, status) {
//     alert(status);
//   });
// });

// $("#searchBtn").click(function () {
//   let username = $("#username").val();

//   $.get(
//     "demo.php",
//     {
//       username: username,
//     },
//     function (response) {
//       $("#result").html(response);
//     },
//   );
// });

// $("#login").click(function () {
//   email = $("#email").val();
//   password = $("#password").val();

//   $.post(
//     "demo.php",
//     {
//       email: email,
//       password: password,
//     },
//     function (response) {
//       $("#result").html(response);
//     },
//   );
// });

// $("#update").click(function () {
//   name = $("#name").val();
//   age = $("#age").val();

//   $.post(
//     "demo.php",
//     {
//       name: name,
//       age: age,
//     },
//     function (data) {
//       $("#result").html(data);
//     },
//   );
// });

// $("button").click(function () {
//   name = $("#name").val();
//   $("#result").load(
//     "demo.php",
//     {
//       name: name,
//     },
//     function (response, status, xhr) {
//       console.log(response);
//       console.log(status);
//     },
//   );
// });

// $(document).ready(function () {
//   $("#loaduser").click(function () {
//     $.getJSON("user.json", function (user) {
//       $("#user").html(user.city);
//     });
//   });
// });

// $.ajax({
//   url: "user.json",
//   method: "GET",
//   dataType: "json",
//   success: function (message) {
//     console.log("Name: " + message.name);
//     console.log("age: " + message.age);
//     console.log("city: " + message.city);
//   },
// });

// $(document).ready(function () {
//   $.getJSON("products.json", function (products) {
//     $.each(products, function (index, product) {
//       $("#products").append(
//         "<li>" + product.name + " - " + product.price + "</li>",
//       );
//     });
//   });
// });

// $(document).ready(function () {
//   $("#getUser").click(function () {
//     proid = $("#proId").val();
//     $.get(
//       "demo.php",
//       {
//         id: proid,
//       },
//       function (data) {
//         $("#result").html(
//           "id: " +
//             data.id +
//             "<br>" +
//             "id: " +
//             data.name +
//             "<br>" +
//             "id: " +
//             data.price +
//             "<br>",
//         );
//       },
//       "json",
//     );
//   });
// });

// $("#getUser").click(function () {
//   name = $("#name").val();
//   $.get(
//     "user.json",
//     {
//       name: name,
//     },
//     function (users) {
//       $.each(users, function (index, user) {
//         if (user.name == name) {
//           $("#result").html(
//             "place: " + user.city + "<br>" + "name: " + user.name + "<br>",
//           );
//         }
//       });
//     },
//   );
// });

// $(document).ready(function () {
//   $("#loading").hide();
//   $("#search").click(function () {
//     $("#loading").show();
//     username = $("#username").val();
//     $.ajax({
//       url: "use.json",
//       method: "GET",
//       data: {
//         username: username,
//       },
//       dataType: "json",
//       beforeSend: function () {
//         $("#loading").show();
//         console.log("loading screen");
//       },
//       success: function (users) {
//         $.each(users, function (index, user) {
//           if (user.name == username) {
//             $("#result").html(
//               "Name: " + user.name + "<br>" + "City: " + user.city,
//             );
//           }
//         });
//       },
//       error: function (error) {
//         console.log(error);
//       },
//       complete: function () {
//         $("#loading").hide();
//         console.log("completed");
//       },
//     });
//   });
// });
