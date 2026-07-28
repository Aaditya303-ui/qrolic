<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="validation"></div>
    <input type="text" name="email" id="email">
    <input type="text" name="password" id="password">
    <button onclick="callButton()">onClick</button>
</body>
<script>
    function callButton(){
        let password = document.getElementById("password").value;
        let email = document.getElementById("email").value;

        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                document.getElementById("validation").innerHTML = this.responseText;
            }
        }
        xhr.open("GET","valid.php?email="+email+"&password="+password);
        xhr.send();
    }
</script>
</html>
