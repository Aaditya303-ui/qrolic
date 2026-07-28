<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <select name="users" onchange="showUser(this.value)">
            <option value="">Select a person:</option>
            <option value="101">anil</option>
            <option value="102">Bhumika</option>
            <option value="103">Chetan</option>
            <option value="104">dhruv</option>
            <option value="105">emanuel</option>
            <option value="106">farah</option>
        </select>
    </form>
    <div id="txtHint">
        People Info will be listed here
    </div>
</body>
<script>
    function showUser(str){
        if(str.length == ""){
            document.getElementById("txtHint").innerHTML = "";
        }else{
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('txtHint').innerHTML = this.responseText;
                }
            }
            xhr.open('GET','demo.php?q='+str,true);
            xhr.send();
        }
    };
</script>
</html>