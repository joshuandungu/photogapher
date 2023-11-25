
<html>
    <head>
        <meta charset="UTF-8">
        <title>Photograpy Website</title>
    <link rel="icon" href="img/icon.jpg">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <style>
          body{
  margin: 0;
  padding: 0;
  background: url(contact.jpg);
  background-size: cover;
  
}
.contact-form{
  width: 85%;
  max-width: 600px;
  background: #ffffff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  padding: 30px 40px;
  box-sizing: border-box;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 0 20px #000000b3;
  font-family: "Montserrat",sans-serif;
}
.contact-form h1{
  margin-top: 0;
  font-weight: 200;
}

</style>
    </head>
    <body>
        <div class="container">

            <div class="row">
                
                

              
                    
                    

                    <form role="form" class="contact-form" action="data.php" method="post">

                    <center>      <h1>Contact us</h1></center>
                        
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="email" class="form-control" name="contact-email" autocomplete="off" id="contact-email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="service" autocomplete="off" id="service" placeholder="Service required">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn get-start" >Send </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>