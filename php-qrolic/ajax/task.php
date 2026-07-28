<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        Search: <input type="text" name="name" id="cric" onkeyup="showResults(this.value)">
        <div id="suggest"></div>
        <button onclick="showPlayers()">show players</button>
        <div class="show" id="show"></div>
        
        
        <h2>Displaying users</h2>
        <button onclick="displayUser()">Display All</button>
        <div id="users"></div>
</body>
<script>
    function showResults(str){
        if(str.length == 0){
            document.getElementById('suggest').innerHTML = "";
        }else{
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                document.getElementById('suggest').innerHTML = this.responseText;
            }
            xhr.open('GET','show.php?q='+str,true);
            xhr.send();
        }
    }

    function displayUser(){
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('users').innerHTML = this.responseText;
            }
            if(xhr.status == 404){
                $error = '<span style="color: red">error in showing</span>';
                document.getElementById('show').innerHTML = $error;
            }
        }
        xhr.open('GET','work.php',true);
        xhr.send();
    }

</script>
</html>