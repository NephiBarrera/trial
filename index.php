<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4WRJK9H245"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4WRJK9H245');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover</title>
    <style>
    
body {
    background-color: rgb(22, 22, 22);
    align-items: center;
    justify-content: center;
    display: flex;
    height: 100vh;
    width: 100vw;
}

button {
    display: block;
    position: absolute;
    width: auto;
    height: auto;
    border: 3px solid #ff0000;
    background-color: rgba(0, 0, 0, 0);
    color: aliceblue;
    border-radius: 1rem;
    box-shadow: 0px 5px 10px 0px rgba(240,0,0,0.72);
}
button:hover {
    color: #ffff00;
    border-color: #ffff00;
    box-shadow: 0px 5px 10px 0px rgba(232, 240, 0, 0.72);
    cursor: pointer;
    transform: translateY(-5px);
    transition: 0.2s;
}
button:active {
    opacity: 0.6;
    transform: scale(0.95);
}
    </style>
</head>
<body>
    <div>
        <button>Hover Me</button>
    </div>
</body>
</html>
