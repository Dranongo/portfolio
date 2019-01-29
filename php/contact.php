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

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width-device-width, initial scale-1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.min.css" rel="stylesheet">

<link href="../css/contact.css" rel="stylesheet" id="bootstrap-css">

  </head>
  <body>

<?php require('../include/navbar.php'); ?>



    <h2 class="h1-responsive font-weight-bold text-center my-4 ">Me contacter</h2>
    <p class="text-center w-responsive mx-auto mb-5">Si vous avez la moindre question, n'hésitez-pas à me contacter directement grâce au formulaire ou mes coordonnées ci-dessous.</p>

	<div class="row container-fluid">

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
       	<div class="col-md-3 text-center bg-info">
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


      <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script src="script.js"></script>-->

<script>
      $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function () {
        particlesJS('particles-js',
            {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#1EC2F3"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            }
        );

    });
</script>

</body>
</html>

