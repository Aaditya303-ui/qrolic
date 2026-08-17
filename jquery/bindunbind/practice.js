// 1. Click event with this

// $("button").bind("click", function () {
//   $(this).text("clicked");
// });

// 2. Mouse enter and leave

// $(document).ready(function () {
//   $("div").on({
//     mouseenter: function () {
//       $(this).css({
//         background: "black",
//         color: "white",
//       });
//     },
//     mouseleave: function () {
//       $(this).css({
//         background: "white",
//         color: "black",
//       });
//     },
//   });
// });

//  3. Toggle a class

// $(document).ready(function () {
//   $("#toggleBtn").click(function () {
//     $("#message").toggleClass("highlight");
//   });
// });

// 4. Understand this properly

// $(document).ready(function () {
//   $(".box").on("mouseover", function () {
//     $(this).css("background", "yellow");
//   });
// });

// 5. Pass custom data through an event

// $(document).ready(function (event) {
//   $("button").on("click", { type: "product" }, function (event) {
//     var brand = $(this).text();
//     var itemType = event.data.type;

//     $("#result").text(brand + " is a " + itemType);
//   });
// });

// 6. One handler for multiple events

// $(document).ready(function () {
//   $(".box").on({
//     mouseenter: function () {
//       $(".data").text("Mouse entered");
//     },

//     mouseleave: function () {
//       $(".data").text("Mouse left");
//     },
//   });
// });

// 8. Why does unbind() remove too much?

// $(document).ready(function () {
//   function format() {
//     $(".data").text("Mouse is welcome");
//   }

//   function removeIt() {
//     $(".data").off("mouseenter", format);
//   }

//   function addIt() {
//     $(".data").on("mouseenter", format);
//   }

//   $(".add").on("click", addIt);
//   $(".remove").on("click", removeIt);
// });