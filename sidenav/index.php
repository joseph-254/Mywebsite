<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>joseph's</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <section class="sidebar">
           <div class="brand" >
                    <!--<a href="#" class="nav-link">my web</a>-->
                    <img src="logo.png" alt="">
            </div>

            <nav >            
                <span id="toggle-nav" onclick="toggleNav()">
                    <i class="fa fa-bars"></i>
                </span>
                
                <ul id="nav-list">
                    <li class="items">
                        <a href="#"  class="a active">Home</a>
                    </li>
                    <li class="items">
                        <a href="#"  class="b">About</a>
                    </li>
                    <li class="items">
                        <a href="#"  class="c">gallery</a>
                    </li>
                    <li class="items">
                        <a href="#"  class="d">files</a>
                    </li>
                    <li class="items">
                        <a href="#"  class="e">contact</a>
                    </li>
                    
                </ul>
                
            </nav>
           
        </section>
        <section class="main-content">
          <div class="content">   
            <section class="home">
                <h1>I am JOSEPH</h1>
                <h6>Web designer</h6>
                <p>Passion, Discipline, Success</p><br><br>
                <h1 class="quote">Simply the best</h1>
            </section>
        

            <section class="about">
                <p><b>Hello pals,</b></p><br>
		        <p>Welcome to my website. I am a graduate from Taita Taveta University having pursed a Bachelor degree in Business Information Technology.</p>
                <p>I am well versed in website development including languages such as HTML, CSS, PHP and JavaScript. Some of my websites are a personal website 
                    containing my self-profile and an online shopping cart for electronic goods and phone accessories.</p> <p>I am a self-motivated person who is
                    result oriented, enthusiastic and positive with a mindset put to absorb challenges related to any job assigned. As well, I have excellent written 
                    and verbal communication skills. My computer abilities and organizational skills are undoubted as they allow me to explain concrete concepts and 
                    complex processes to others in simple terms.</p>


            </section>
            <section class="gallery">
                    <div class="column">
                      
                      <img src="images/image1.jpg">
                      <img src="images/image2.jpg">                  
                      
                      </div>
                      <div class="column">
                      <img src="images/image3.jpg">               
                      <img src="images/image4.jpg">
                        
                    </div>
                    <div class="column">
                      <img src="images/image5.jpg">            
                      <img src="images/image6.jpg">
                         
                    </div>
                    <div class="column">
                      <img src="images/image4.jpg">
                      <img src="images/image1.jpg">
                           
                    </div>
                
        
            </section>
            
            <section class="files">
              <div class="myfile">
                <i class="fas fa-mail-bulk"></i>

                <h1>My files</h1>
                <?php

                ?>
                <form method="POST" enctype="multipart/form-data" action="Upload.php">
                    <input type="file" name="file">
                    <input type="submit" value="upload">

                </form><br>

                <?php
                    //for displaying uploaded files
     
                    $files = scandir("uploads");
                    for ($i=2; $i < count($files); $i++) { 
      	            //displaying links
                ?>
                <p>
                <a download="<?php echo $files[$i] ?>" href="uploads/<?php echo $files[$i] ?>"><?php echo $files[$i] ?></a>
                </p>
                <?php
                }
 	            ?>   


               </div>
            </section>

            <?php include('contact.php'); ?>
            <section class="contact">

              <div class="cnt">
                <h1>Contact me</h1>
                <br>
                <div class="formholder">
                <form  method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                    <ul>
                        <li>
                            <label for="name"> Name</label>
                            <input type="text" name="fullname" id="name">
                            <span class="error"><?= $name_error ?></span>
                        </li>
                        <br>
                        <li>
                            <label for="email"> Email</label>
                            <input type="email" name="e-mail" id="email">
                            <span class="error"><?= $email_error ?></span>
                        </li>
                        <br>
                        <li>
                            <label for="message"> Message</label>
                            <textarea id="message" name="message"></textarea>
                        </li>
                        <br>
                        <li>
                            <button type="submit" name="submit" id="button">Send</button>
                        </li>
                        <div class="success"><?= $success; ?></div>
                    </ul>

                </form>
                    
                </div>
               </div>
            </section>
          </div>
        </section>
        <footer class="footer">
            <div class="contactme">
                <h1>contact</h1>
            </div>
            <div class="Mycontacts">
                <div class="item">
                    <i class="fas fa-phone"></i>
                    <div class="cont">
                        <h1>Phone</h1>
                        <p>0707544959</p>
                        <br>
                        <p>0781998805</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fas fa-envelope"></i>
                    <div class="cont">
                        <h1>Email</h1>
                        <p>josephkamanga2030@gmail.com</p>
                        <br>
                        <p>jkamanga56@gmail.com</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fas fa-map-marker"></i>
                    <div class="cont">
                        <h1>Address</h1>
                        <p>568-20117</p>
                        <br>
                        <p>Naivasha</p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>


    <script>
    
    var nav = document.getElementById('nav-list');

    function toggleNav () {       

        if ( nav.style.display === "" )
        nav.style.display = "block";

        else
        nav.style.display = "";
    }


    function windowResizeHandler () {
        if ( screen.width > 500 )
        nav.style.display = "";
    }

    window.addEventListener("resize", windowResizeHandler);

    </script>
    
    <script type="text/javascript">
    
       $(document).ready(function(){
            $('a').click(function(){

                var selected = $(this);
                $('a').removeClass('active');
                $(selected).addClass('active');
            });
    
            var $a =$('.a'),
            $b = $('.b'),
            $c = $('.c'),
            $d = $('.d'),
            $e = $('.e'),
            $home = $('.home'),
            $about = $('.about'),
            $gallery = $('.gallery'),
            $files = $('.files'),
            $contact = $('.contact');

            $a.click(function(){
                $home.fadeIn();
                $about.fadeOut();
                $gallery.fadeOut();
                $files.fadeOut();
                $contact.fadeOut();
            });
            $b.click(function(){
                $about.fadeIn();
                $home.fadeOut();
                $gallery.fadeOut();
                $files.fadeOut();
                $contact.fadeOut();
            });
            $c.click(function(){
                $gallery.fadeIn();
                $home.fadeOut();
                $about.fadeOut();
                $files.fadeOut();
                $contact.fadeOut();
            });
            $d.click(function(){
                $files.fadeIn();
                $home.fadeOut();
                $about.fadeOut();
                $gallery.fadeOut();
                $contact.fadeOut();
            });
            $e.click(function(){
                $contact.fadeIn();
                $home.fadeOut();
                $about.fadeOut();
                $gallery.fadeOut();
                $files.fadeOut();
            });
    
    
    });
    </script>

</body>
</html>