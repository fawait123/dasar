<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Document</title>
</head>
<body>
    <h1 id="no">0</h1>
    <button id="prev"><i class="fa fa-angles-left"></i> prev</button>
    <button id="next">next <i class="fa fa-angles-right"></i></button>

<script>
    let prev = document.getElementById('prev');
    let next = document.getElementById('next');
    let display = document.getElementById('no');
    let no = 1;
    display.innerHTML = no;
    next.addEventListener('click',function(){
        no +=1;
        display.innerHTML = no;
    });
</script>
</body>
</html>