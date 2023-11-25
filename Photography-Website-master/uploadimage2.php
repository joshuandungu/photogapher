<?php  
 $connect = mysqli_connect("localhost", "root", "", "photography");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images2(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  

 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Photography Website</title> 
           <link rel="icon" href="img/icon.jpg">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <style>
                body{
            margin: 0;
            padding: 0;
            background-image: url(bg7.jpg);
            -webkit-background-size: cover;
            background-size: cover;
            font-family: Poppins;

        }
        .s{
            color: purple;
            text-align:center;
        }
        </style>
      </head>  

      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  

           <h1 class="s">Upload Photos</h1>
                <br />  
                <form  align="center" method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                     
                     
                </form>  
                <br />  
                <br />  
                
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  