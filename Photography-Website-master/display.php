<html>
    
<head><title>photography website</title>
<link rel="icon" href="img/icon.jpg">
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
$con = mysqli_connect("localhost", "root", "", "photography");
$select = mysqli_query($con, "select * from tbl_images");
 while($row = mysqli_fetch_array($select))  
                {  
                     echo '  
                            
                        <a href="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" data-lightbox="image-1" data-title="Nature"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" /></a>  
                               
    
                     ';  
                }  
?>  

<script src="js/lightbox-plus-jquery.js" type="text/javascript"></script>

</body>
</html>                