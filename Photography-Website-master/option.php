<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Website</title>
    <link rel="icon" href="img/icon.jpg">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        body{
            margin: 0;
            padding: 250px 15px;
            background-image: url(bg3.jpg);
            -webkit-background-size: cover;
            background-size: cover;
            font-family: Poppins;

        }
        .s{
            color: white;
        }
        .button{
    background: #ffffff;
    padding: 10px 15px;
    color: yellow;
    font-weight: bolder;
    text-transform: uppercase;
    font-size: 15px;
    border-radius: 5px;
    box-shadow: 6px 6px 29px -4px rgba(0,0, 0, 0.75);
    margin-top: 12px ;
    text-decoration: none;
    transition: 0.4s;
}
.button:hover{
  background: red;
  color: #ffffff;
}

</style>
</head>
<body>
    
    <center>
        <h1 class="s">Select Album to upload Photos</h1>
    
<a href="uploadimage1.php"><button class="button"> NATURE</button></a>
<a href="uploadimage.php"><button class="button"> ANIMALS </button></a>
<a href="uploadimage2.php"><button class="button"> WEDDING </button></a>


<h2 class="s">or</h2>
<h1 class="s"> See Customers Contact Details</h1>
<a href="Details.php"><button class="button"> DETAILS</button></a>
</center>
</body>
</html>