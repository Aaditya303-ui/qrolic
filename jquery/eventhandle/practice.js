// $(document).ready(function () {
//   $("#menu").on("click", "li", function () {
//     console.log($(this).text());
//   });
// });

// $(document).ready(function () {
//   $("#addItem").click(function () {
//     $("#list").append("<li>Item X</li>");
//   });

//   $("#list").on("click", "li", function () {
//     alert($(this).text());
//   });
// });

// $(document).ready(function () {
//   $("#products").on("click", "button", function (event) {
//     alert($(this).attr("class"));
//   });
// });

// $(document).ready(function () {
//   $("#addProduct").click(function () {
//     $("#products").append(`
//         <div class="product">
//         <span>Product X</span>
//         <button id="delete" class="delete">Delete</button><br>
//         </div>`);
//   });

//   $("#products").on("click", ".delete", function () {
//     $(this).closest(".product").remove();
//   });
// });
