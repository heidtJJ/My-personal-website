<?php

    $error = ""; 
    $successMessage = "";
     
    if($_POST){
        
        if(!$_POST["email"]){
            $error .= "An email address is required.<br>";
        }
        elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $error .= "The email address is invalid.<br>";
        }
        
        if(!$_POST["subject"]){
            $error .= "The subject field is required.<br>";
        }
        
        if(!$_POST["text-area"]){
            $error .= "The content field is required.<br>";
        }
        
        if($error != ""){
            $error = '<div class="alert alert-danger" role="alert">Oh snap! There were error(s) in your form:<br>'.$error.'</div>';
        }
        else{
            $emailTo = "jaredjheidt@gmail.com";
            $subject = $_POST["subject"];
            $content = $_POST["text-area"];
            $headers = "From: ".$_POST["email"];
            
            if(mail($emailTo, $subject, $content, $headers)){
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, I\'ll get back to you ASAP!</div>';
            }
            else{
                $error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent - please try again later</div>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    
        <link rel="icon" href="img/jh.JPG">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="my-website.css">
        
        <title>Jared Heidt - Let's Connect</title>
        
    </head>
    
    <body data-spy="scroll" data-offset="70">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar-example">
            
            <div class="container-fluid">
                
                    <a class="navbar-brand" href="index.html" id="siteTitle">Reach-New-Heidts.com</a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    
                        <span class="navbar-toggler-icon"></span>
                    
                    </button>
                    
                
                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="nav navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="index.html">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="my-website-employers.html">Employers</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="my-website-connect.php">Let's Connect</a>                
                        </li>

                    </ul>

                </div>                
            
            </div>
                
          
        </nav>

        
        <div class="jumbotron vertical-center" id="jumbtron-top-connect">
            
            <div class="container">
                
                <h1 id="contact-me" class="display-4 text-align-center">Contact Me</h1>  
        
            </div>
        
        </div>        
        
        <br>

        
        <div class="container">
            
            <h1>Get in touch!</h1>
          
            <div id="error"><?php echo $error.$successMessage; ?></div>
          
            <form method="post">
              
              <div class="form-group">
              
                  <label for="input-email">Email address</label>
                
                  <input type="email" class="form-control" id="input-email" aria-describedby="emailHelp" placeholder="Enter your email" name="email">
               
                  <small id="emailHelp" class="form-text text-muted">Your email will never be shared with anyone else.</small>
             
              </div>
              
              <div class="form-group">
                
                  <label for="input-subject">Subject</label>
            
                  <input type="text" name="subject" class="form-control" id="input-subject">
              
              </div>
              
              <div class="form-group">
                
                  <label for="input-text-area">What would you like to say?</label>
                
                  <textarea class="form-control" id="input-text-area" rows="3" name="text-area"></textarea>
              
              </div>
              
              <button type="submit" class="btn btn-primary" id="submit">Submit</button>
          
          </form>
          
        </div>
        <br><br>
        <div class="jumbotron" id="jumbtron-footer">
        
            <a href="https://www.facebook.com/jared.heidt" class="fa fa-facebook"></a>

            <a href="https://www.linkedin.com/in/jared-heidt/" class="fa fa-linkedin"></a>

            <a href="https://www.instagram.com/jaredsheidt/?hl=en" class="fa fa-instagram"></a>
            
            <p id="created-by">Created by Jared James Heidt.</p>

        </div>  
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

        <script type="text/javascript">
        

            $(function () {
                $('[data-toggle="popover"]').popover()
            });

            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

            
            $("form").submit(function (e){

              var error = "";

              if($("#input-email").val() == "") {
                  error += "An email address is required.<br>";
              }

              if($("#input-subject").val() == "") {
                  error += "The subject is required.<br>";
              }

              if($("#input-text-area").val() == "") {
                  error += "The content field is required.";
              }

              if(error != ""){
                  $("#error").html('<div class="alert alert-danger" role="alert"><strong>Oh snap! There were error(s) in your form:</strong><br>' + error + '</div>');
                  return false;

              }
              else{
                  return true;
              }      

          });
          
        </script>
        
    </body>
    
</html>
