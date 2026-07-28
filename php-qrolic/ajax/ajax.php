<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>The XMLHttpRequest Object</h2>
        <div id="demo"></div>
        <button type="button" onclick="loadData()">Change Content</button>

    <label>Name: </label>
    <input type="text" name="search" onkeyup="showResult(this.value)">
    <div><span id="suggest"></span></div>
<script>
    function loadData(){
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('demo').innerHTML = this.responseText;
            }
        };
        xhr.open('POST','ajax_info.php',false);
        xhr.send("q=Anna");
    }

    function showResult(str){
        if(str.length == 0){
            document.getElementById("suggest").innerHTML = "";
        }else{
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    document.getElementById("suggest").innerHTML = this.responseText;
                }
            }
            xhr.open('GET','work.php?q='+str,true);
            xhr.send();
        }
    }
</script>
</body>
</html>