<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div id="container">
        <h2 id="heading">Hey Geek,</h2>
        <div id="btnDiv">
            <button class="btn" onclick="sendRequest()">
                Send Data
            </button>
        </div>
        <div id="result"></div>
    </div>
</body>
<script>
    let head = document.getElementById('heading');
    let sendingData = {
        id:1,
        title: "Welcome to gfg",
        body: "A computer science portal for all geeks"
    }
    let data = JSON.stringify(sendingData);
    let url = "https://jsonplaceholder.typicode.com/users";

    function sendRequest(){
        let xhr = new XMLHttpRequest();
        xhr.open('POST',url,true);
        xhr.setRequestHeader('Content-type','application/json; charset=UTF-8');
        xhr.send(data);

        xhr.onload = function(){
            if(xhr.status == 201){
                head.innerHTML = "Data Posted successfully!";
                 document.getElementById("result").innerHTML = xhr.responseText;
            }
        }
    }
</script>
</html>