// php -S localhost:8000

// $(document).ready(function () {
//   $("button").click(function () {
//     $.ajax({
//       url: "gfg.txt",
//       success: function (result) {
//         $("#h11").html(result);
//       },
//       error: function (xhr, status, error) {
//         console.log(error);
//       },
//     });
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $.ajax({
//       url: "gfg.txt",
//       success: function (result) {
//         $("#h11").html(result);
//       },
//       error: function (xhr, status, error) {
//         console.log(error);
//       },
//     });
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $("#h11").load("gfg.txt");
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $("#h11").load(
//       "data.php",
//       {
//         name: "Aaditya",
//       },
//       function (response, status) {
//         if (status == "success") {
//           alert("file is been loaded");
//         }
//         alert(response);
//       },
//     );
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $.getJSON(
//       "result.json",
//       {
//         role: "Web Developer",
//         college: "Marwadi University",
//       },
//       function (d) {
//         $("#content").html(
//           "<p>Name: " +
//             d.name +
//             "</p>" +
//             "<p>Name: " +
//             d.age +
//             "</p>" +
//             "<p>Name: " +
//             d.sex +
//             "</p>" +
//             "<p>Name: " +
//             d.city +
//             "</p>",
//         );
//       },
//     );
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $.getJSON(
//       "data.php",
//       {
//         name: "Aaditya",
//         age: 22,
//       },
//       function (d) {
//         console.log(d.message);
//       },
//     );
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $.ajax({
//       url: "result.json",
//       method: "GET",
//       dataType: "json",

//       success: function (response) {
//         console.log(response);
//       },
//     });
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $.ajax({
//       url: "data.php",
//       method: "POST",

//       //contentType: 'application/json',

//       data: {
//         name: "Aaditya",
//         age: 22,
//       },

//       success: function (response) {
//         console.log(response);
//       },
//     });
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $.get(
//       "data.php",
//       {
//         name: "Aaditya",
//         age: 22,
//       },
//       function (data) {
//         $("#content").html(data.message + "<br>" + data.age);
//       },
//       "json",
//     );
//   });
// });

// $(document).ready(function () {
//   $("button").click(function () {
//     $.post(
//       "data.php",
//       {
//         name: "Aaditya",
//         age: 22,
//       },
//       function (data) {
//         $("#content").html(data.message);
//       },
//       "json",
//     );
//   });
// });

// $.getJSON("products.json", function (product) {
//   $.each(product, function (index, p) {
//     $("#user").append(
//       "Products: " + p.name + "<br>" + "Prices: " + p.price + "<hr>",
//     );
//   });
// });


