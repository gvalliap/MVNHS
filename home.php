<?php include("initialize.php");?>
<?php
    if(!$_SESSION['user']){
        header("Location: index.php");
        die;
    }
    include("variables.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <header>
            <?php include("navbar.php"); ?>
        </header>
        <main>
            <div class="parallax-container">
                <div class="parallax"><img src="http://www.sonl.ca/wp-content/uploads/2009/11/volunteer-wordle-pic2.jpg" class="responsive-img"></div>
            </div>
            <div class="light-blue darken-3 hide-on-large-only white-text center">
                <h2 class="section-header">Hello Ganesh Valliappan!</h2>
            </div>
            <div class="light-blue darken-3 hide-on-med-and-down">
                <div id="animation" class="white-text section-header center">
                    <div class="animated-typing" style="display: inline; width: auto;"></div>
                </div>
            </div>
            <div class="container">

            </div>
        </main>

        <div id="typed-strings" class="hide">
            <p>Welcome <?=$fname ?> <?=$lname ?>!</p>
        </div>

        <?php include("footer.php"); ?>

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/typed.js"></script>
        <script type="text/javascript">
            var min = ["Hello^500 Ganesh Valliappan!"];

            $(document).ready(function(){
                $('.parallax').parallax();
                $('.modal-trigger').leanModal({
                    dismissible: true, // Modal can be dismissed by clicking outside of the modal
                    opacity: .9, // Opacity of modal background
                    in_duration: 300, // Transition in duration
                    out_duration: 200, // Transition out duration
                });
                $(".button-collapse").sideNav();
                $(".animated-typing").typed({
                    stringsElement: $('#typed-strings'),
                    typeSpeed: 0
                });
            });
            $('.slider').slider({full_width: true});
        </script>
    </body>
</html>
