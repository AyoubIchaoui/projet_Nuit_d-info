<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Breezed HTML Bootstrap Template</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>HOME</h6>
                            
                        </div>
                       
                         
            <?php
include("connexion.php");
$sql="SELECT * FROM user";
$res=mysqli_query($connect,$sql);
?>


<form action="rechercher.php" method="post">
  <table align="center">
    <tr>
      <td>
        <input type="text" name="rech">
      </td>
      <td>
        <input type="submit" value="Recherche">
        <a href="inscription.html"><button type="button">inscrire</button></a>
      </td>
    </tr>
  </table>
</form>
    

<table align="center" border="1" >
    <tr>
        <th><h6>id</h6></th>
        <th><h6>nom</h6></th>
        <th><h6>prenom</h6></th>
        <th><h6>login</h6></th>
        <th><h6>password</h6></th>
        <th><h6>idrole</h6></th>
        <th><h6>email</h6></th>
     
       
        <th><h6>Action</h6></th>
    
        
    
    </tr>
    <?php

if(mysqli_num_rows($res)>0)
{

while($row=mysqli_fetch_assoc($res))
{
?>

    <tr>
        <td>
            <?php echo $row['id']   ?>
        </td>
        <td>
            <?php echo $row['nom']   ?>
        </td>
        <td>
            <?php echo $row['prenom']   ?>
        </td>
        <td>
            <?php echo $row['login']   ?>
        </td>
        <td>
            <?php echo $row['password']   ?>
        </td>
        <td>
            <?php echo $row['idrole']   ?>
        </td>
        <td>
            <?php echo $row['email']   ?>
        </td>
        
      
        
        <td>
      <a href='modifier.php?id=<?php echo $row['id'] ?>'><button type='button'>Modifier</button></a>
      <a href='supprimer.php?id=<?php echo $row['id'] ?>'><button type='button'>Supprimer</button></a>
    </td>
        
      
    </td>

    </tr>


    <?php
}

}
else
{
?>
<tr>
    <td colspan="9" align="center"><font color="red">Pas de données disponible</font></td>
</tr>
<?php
}
?>


                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; 2020 Breezed Co., Ltd. 
                        
                        - Design: <a rel="nofollow noopener" href="https://templatemo.com">TemplateMo</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Follow Us</p></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>