<?php include("initialize.php"); ?>
<?php
    if(isset($_POST['user'])) {
        if($_SESSION['user']){
            header("Location: home.php");
            die;
        }
    }
    if(isset($_POST['user']) && isset($_POST['pass'])) {
        if($_POST['user'] && $_POST['pass']){
        	$user = stripslashes($_POST['user']);
        	$pass = stripslashes($_POST['pass']);
        	$query = $connect->query("SELECT * FROM `users` WHERE `email`='$user' AND `pass` = '$pass' LIMIT 1");
        	if($query->num_rows > 0){
        		$row = mysqli_fetch_array($query, MYSQLI_BOTH);
        		$_SESSION['user'] = $user;
        		$_SESSION['id'] = $row['ID'];
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['pass'] = $pass;
        		$connect->query("UPDATE `users` SET `date`='$time' WHERE `email` = '$user' AND `pass` = '$pass'");
        		header("Location: home.php");
        		die;
        	}
        	else
        		$fail = true;
        }
    }
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
                <div class="parallax"><img src="http://devrieslegal.com/wp-content/uploads/2014/04/bigstock-volunteer-group-raising-hands-195439581.jpg" class="responsive-img"></div>
            </div>
            <div class="light-blue darken-3 hide-on-large-only white-text center">
                <h2 class="section-header">Monta Vista National Honor Society</h2>
            </div>
            <div class="light-blue darken-3 hide-on-med-and-down">
                <div id="animation" class="white-text section-header center">
                    <div class="animated-typing" style="display: inline; width: auto;"></div>
                </div>
            </div>
            <div class="container">
                <div class="section">
                    <h3 class="center red-text section-header">News</h3>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="card red">
                                <div class="card-content white-text">
                                    <span class="card-title">One</span>
                                    <p>Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who. Entreaties mr conviction dissimilar me astonished estimating cultivated. On no applauded exquisite my additions. Pronounce add boy estimable nay suspected. You sudden nay elinor thirty esteem temper. Quiet leave shy you gay off asked large.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card red">
                                <div class="card-content white-text">
                                    <span class="card-title">One</span>
                                    <p>Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who. Entreaties mr conviction dissimilar me astonished estimating cultivated. On no applauded exquisite my additions. Pronounce add boy estimable nay suspected. You sudden nay elinor thirty esteem temper. Quiet leave shy you gay off asked large.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="card red">
                                <div class="card-content white-text">
                                    <span class="card-title">One</span>
                                    <p>Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who. Entreaties mr conviction dissimilar me astonished estimating cultivated. On no applauded exquisite my additions. Pronounce add boy estimable nay suspected. You sudden nay elinor thirty esteem temper. Quiet leave shy you gay off asked large.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card red">
                                <div class="card-content white-text">
                                    <span class="card-title">One</span>
                                    <p>Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who. Entreaties mr conviction dissimilar me astonished estimating cultivated. On no applauded exquisite my additions. Pronounce add boy estimable nay suspected. You sudden nay elinor thirty esteem temper. Quiet leave shy you gay off asked large.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="parallax-container">
                <div class="parallax"><img src="https://wallpaperscraft.com/image/crowd_people_dance_silhouette_57172_3840x2160.jpg" class="responsive-img"></div>
            </div>

            <div class="container">
                <div class="section">
                    <h3 class="center red-text section-header">What is NHS?</h3>
                    <div class="row">
                        <div class="col s12 l3 white">
                            <div class="icon-block">
                                <h2 class="center red-text"><i class="material-icons large">perm_identity</i></h2>
                                <h4 class="center red white-text col-content">Character</h4>
                                <p>
                                    Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. New get described applauded incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting everything.
                                </p>
                            </div>
                        </div>
                        <div class="col s12 l3 white">
                            <div class="icon-block">
                                <h2 class="center red-text"><i class="material-icons large">library_books</i></h2>
                                <h4 class="center red white-text col-content">Scholarship</h4>
                                <p>
                                    Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. New get described applauded incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting everything.
                                </p>
                            </div>
                        </div>
                        <div class="col s12 l3 white">
                            <div class="icon-block">
                                <h2 class="center red-text"><i class="material-icons large">view_list</i></h2>
                                <h4 class="center red white-text col-content">Service</h4>
                                <p>
                                    Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. New get described applauded incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting everything.
                                </p>
                            </div>
                        </div>
                        <div class="col s12 l3 white">
                            <div class="icon-block">
                                <h2 class="center red-text"><i class="material-icons large">stars</i></h2>
                                <h4 class="center red white-text col-content">Leadership</h4>
                                <p>
                                    Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. New get described applauded incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting everything.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include("footer.php"); ?>

        <?php include("modal.php"); ?>

        <?php include("script.php"); ?>
    </body>
</html>
