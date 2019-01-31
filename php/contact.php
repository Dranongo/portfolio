<?php 
    $name = "";
    $email = "";
    $message = "";
    $subject = "";

    $emailTo = "maximilien.fonteyn@gmail.com";

    if(isset($_POST["submit"])) {
        if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        }

        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }

        if (isset($_POST['subject'])) {
            $subject = $_POST['subject'];
        }

        if (isset($_POST['message'])) {
            $message = $_POST['message'];
        }

        mail($emailTo, $subject, $message, "From:" .$email);
    }
?>

<?php require('../include/header.php'); ?>

<?php require('../include/navbar.php'); ?>


  <h2 class="h1-responsive font-weight-bold text-center my-4 ">Me contacter</h2>
  <p class="text-center w-responsive mx-auto mb-5">Si vous avez la moindre question, n'hésitez-pas à me contacter directement grâce au formulaire ou mes coordonnées ci-dessous.</p>

	<div class="row container-fluid" id="formulaire">
    <div class="col-md-9 mb-md-0 mb-5">
      <form role="form" id="contacForm" name="contactForm" action="contact.php" method="POST">
       	<div class="row">
         	<div class="col-md-6">
           	<div class="md-form mb-0">
             	<label for="name" class="">Votre nom</label>
             	<input type="text" id="name" class="form-control">
           	</div>
        	</div>
          <div class="col-md-6">
         	  <div class="md-form mb-0">
              <label for="email" class="">Votre e-mail</label>
              <input type="text" id="email" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
         	<div class="col-md-12">
            <div class="md-form mb-0">
            	<label for="subject" class="">Objet</label>                            
              <input type="text" id="subject" class="form-control">
           	</div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="md-form">
              <label for="message">Votre message</label>
              <textarea type="text" id="message" rows="2" class="form-control md-textarea"></textarea>
            </div>
          </div>
        </div>

        <div class="text-center mt-2">
          <button type="submit" id="form-submit" name="submit" class="btn btn-primary btn-lg">Envoyer</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <!--<div class="clearfix"></div>-->
        </div>
      </form>
    </div>
    <div class="col-md-3 text-center bg-info" id="hello">
      <ul class="list-unstyled mb-0">
        <li><i class="fas fa-map-marker-alt fa-2x"></i>
          <p class="mt-4">Rouen, Normandie FRANCE</p>
        </li>
        <li><i class="fas fa-phone mt-4 fa-2x"></i>
          <p>+33 7 67 95 71 34</p>
        </li>
        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
          <p>maximilien.fonteyn@gmail.com</p>
        </li>
      </ul>
    </div>
  </div>

  <div id="particles-js">
    <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"></canvas>
  </div>

  <?php require('../include/footer.php'); ?>

  <script type="text/javascript" src="../js/contact.js"></script>

  </body>
</html>

