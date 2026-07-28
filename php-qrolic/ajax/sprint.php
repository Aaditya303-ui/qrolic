<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <input type="text" name="name" onkeyup="showSearch(this.value)">
    <div id="cart"></div> -->

    <!-- <h3>Student details</h3>
    <input type="text" name="name" onkeyup="studSearch(this.value)">
    <div id="cart"></div> -->

    <!-- <h3>Product Price Lookup</h3>
    <input type="text" name="name" onkeyup="priceSearch(this.value)">
    <div id="show"></div> -->

    <!-- <div id="work">
        Name: <input type="text" id="username">
        Password: <input type="text" id="password">
        <button onclick="login()">Submit</button>
    </div> -->

    <!-- <div id="work">
        <input type="email" id="email">
        <button onclick="verifyIt()">submit</button>
    </div> -->
    <!-- <div id="work">
        Name: <input type="text" id="name">
        email: <input type="email" id="email">
        message: <input type="text" id="message">
        <button onclick="submitData()">Submit</button>
    </div> -->

    <!-- EmpId: <input type="text" name="id" id="id">
    <button onclick="findById()">search</button>
    <div id="display"></div> -->

    <!-- <input type="text" name="product" id="product">
    <button onclick="onSearch()">search</button>
    <div id="content"></div> -->

    <!-- <input type="text" name="user" id="user">
    <button onclick="showWork()">create Account</button>
    <div id="content"></div> -->

    <!-- <input type="text" name="user" id="title">
    <input type="text" name="body" id="msg">
    <button onclick="showData()">create Account</button>
    <div id="content"></div> -->

    <!-- <input type="text" id="username">
    <input type="text" id="password">
    <div id="content"></div>
    <button onclick="triggerEvent()">valid it</button> -->

    <input type="text" id="product_name">
    <input type="text" id="product_price">
    <button onclick="returnContent()">submit</button>
    <div id="content"></div>

</body>
<script>
    // function showSearch(str){
    //     let xhr = new XMLHttpRequest();
    //     xhr.onreadystatechange = function(){
    //         if(xhr.readyState == 4 && xhr.status == 200){
    //             document.getElementById('cart').innerHTML = this.responseText;
    //         }
    //     };
    //     xhr.open('GET','demo.php?q='+str,true);
    //     xhr.send();
    // }

    // function studSearch(str){
    //     if(str.length == 0){
    //         document.getElementById("suggest").innerHTML = "";
    //     }else{
    //         let xhr = new XMLHttpRequest();
    //         xhr.onreadystatechange = function(){
    //             if(xhr.readyState == 4 && xhr.status == 200){
    //                 document.getElementById('cart').innerHTML = this.responseText;
    //             }
    //         };
    //         xhr.open('GET','demo.php?q='+str,true);
    //         xhr.send();
    //     }
    // }

    // function priceSearch(str){
    //     if(str.length == 0){
    //         document.getElementById('show').innerHTML = "";
    //     }else{
    //         let xhr = new XMLHttpRequest();
    //         xhr.onreadystatechange = function(){
    //             document.getElementById('show').innerHTML = this.responseText;
    //         }
    //         xhr.open('GET','demo.php?q='+str,true);
    //         xhr.send();
    //     }
    // }

    // function login(){
    //     let name = document.getElementById('username').value;
    //     let pass = document.getElementById('password').value;
    //     let xhr = new XMLHttpRequest();

    //     let data = "u="+name + "&p="+pass;
    
    //     xhr.open("POST", "demo.php", true);
    //     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    //     xhr.onreadystatechange = function(){
    //         if(this.readyState == 4 && this.status == 200){
    //             document.getElementById('work').innerHTML = this.responseText;
    //         }
    //     };
    //     xhr.send(data);
    // }

    // function verifyIt(){
    //     let email = document.getElementById('email').value;
    //     let data = "e="+email;
    //     let xhr = new XMLHttpRequest();

    //     xhr.open('POST','demo.php',true);
    //     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //     xhr.onreadystatechange = function(){
    //         if(this.readyState == 4 && this.status == 200){
    //             document.getElementById('work').innerHTML = this.responseText;
    //         }
    //     }
    //     xhr.send(data);
    // }

    // function submitData(){
    //     let fname = document.getElementById('name').value;
    //     let femail = document.getElementById('email').value;
    //     let fmsg = document.getElementById('message').value;

    //     let xhr = new XMLHttpRequest();
        
    //     let data = {
    //         name: fname,
    //         email: femail,
    //         msg: fmsg
    //     };
    //     xhr.open("POST",'demo.php',true);
    //     xhr.setRequestHeader('Content-Type','application/json');

    //     xhr.onreadystatechange = function(){
    //         if(xhr.readyState == 4 && xhr.status == 200){
    //             document.getElementById('work').innerHTML = this.responseText;
    //         }
    //     };
    //     xhr.send(JSON.stringify(data));
    // }

    // function findById(){
    //     let id = document.getElementById('id').value;
    //     let xhr = new XMLHttpRequest();
    //     xhr.onreadystatechange = function(){
    //         if(xhr.readyState == 4 && xhr.status == 200){
    //             document.getElementById('display').innerHTML = this.responseText;
    //         }
    //     }
    //     xhr.open('GET','demo.php?id='+id,true);
    //     xhr.send();
    // }

    // function onSearch(){
    //     let product = document.getElementById('product').value;
    //     let xhr = new XMLHttpRequest();
    //     xhr.onreadystatechange = function(){
    //         if(xhr.readyState == 4 && xhr.status == 200){
    //             document.getElementById('content').innerHTML = this.responseText;
    //         }
    //     }
    //     xhr.open('GET','demo.php?p='+product,true);
    //     xhr.send();
    // }

    // function showWork(){
    //     let user = document.getElementById('user').value;
    //     let xhr = new XMLHttpRequest();
    //     xhr.onreadystatechange = function(){
    //         if(this.readyState == 4 && this.status == 200){
    //             document.getElementById('content').innerHTML = this.responseText;
    //         }
    //     }
    //     xhr.open('GET','demo.php?u='+user,true);
    //     xhr.send();
    // }

    // function showData(){
    //     let xhr = new XMLHttpRequest();

    //     let ptitle = document.getElementById('title').value;
    //     let pmsg = document.getElementById('msg').value;

    //     let sendingData = {
    //         title: ptitle,
    //         body: pmsg
    //     };

    //     let data = JSON.stringify(sendingData);
    //     xhr.setRequestHeader('Content-type','application/json' ,'charset=UTF-8');
    //     xhr.send(data); 

    //     request.open('POST', 'demo.php', true);
    //     xhr.onreadystatechange = function(){
    //         if(xhr.readyState == 1 && xhr.status == 200){
    //             document.getElementById('work').innerHTML = this.responseText;
    //         }
    //     }
    // }

//     function triggerEvent(){
//     let xhr = new XMLHttpRequest();
//     let user = document.getElementById('username').value;
//     let pass = document.getElementById('password').value;

    
//     let postData = "username=" + user + "&password=" + pass;
    
//     xhr.open('POST', 'demo.php', true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

//     xhr.onreadystatechange = function(){
//         if(xhr.readyState == 4 && xhr.status == 200){
//             document.getElementById('content').innerHTML = this.responseText;
//         }
//     };
    
//     xhr.send(postData);
// }

function returnContent(){
    let xhr = new XMLHttpRequest();

    let nameVal = document.getElementById('product_name').value;
    let priceVal = document.getElementById('product_price').value;
    let postData = "product_name="+nameVal+ "&product_price="+priceVal;

    xhr.open('POST','demo.php',true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onreadystatechange = function(){
        if(xhr.readystate == 4 && xhr.status == 200){
            let responseData = JSON.parse(this.responseText);
            let contentDiv = document.getElementById('content');

            if(contentDiv){
                contentDiv.innerHTML = responseData.message;
            }
        }
    };
    xhr.send(postData);
}
</script>
</html>