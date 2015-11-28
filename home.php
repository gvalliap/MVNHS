<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <div id="home-navbar" class="navbar-fixed">
            <nav>
                <div class="nav-wrapper light-blue darken-3">
                    <a href="#" class="brand-logo center">Monta Vista NHS</a>
                    <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-small-only">
                        <li><a class="waves-effect waves-light modal-trigger" href="#register"><i class="material-icons left">group</i>Register</a></li>
                        <li><a class="waves-effect waves-light modal-trigger" href="#login"><i class="material-icons left">send</i>Login</a></li>
                    </ul>
                    <ul id="mobile-nav" class="side-nav">
                        <li><a href="register.html"><i class="material-icons left">group</i>Register</a></li>
                        <li><a class="modal-trigger" href="#login"><i class="material-icons left">send</i>Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div id="home-banner" class="parallax-container">
            <div class="parallax"><img src="https://wallpaperscraft.com/image/crowd_people_dance_silhouette_57172_3840x2160.jpg"></div>
        </div>

        <div class="container">
            <div class="section">
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
                            <h2 class="center red-text"><i class="material-icons large">description</i></h2>
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
                            <h2 class="center red-text"><i class="material-icons large">grade</i></h2>
                            <h4 class="center red white-text col-content">Leadership</h4>
                            <p>
                                Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. New get described applauded incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting everything.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="https://wallpaperscraft.com/image/crowd_people_dance_silhouette_57172_3840x2160.jpg"></div>
        </div>

        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m6">

                    </div>
                </div>
            </div>
        </div>

        <div id="login" class="modal">
            <form class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="text" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">label</i>
                    <input id="pass" type="password" class="validate">
                    <label for="pass">Password</label>
                </div>
                <div style="text-align: center;">
                    <button class="btn-large waves-effect waves-light center-align" type="submit" name="action" style="margin: auto;">Login
                        <i class="material-icons left">send</i>
                    </button>
                </div>
            </form>
        </div>

        <div id="register" class="modal">
            <p>Swag Google Form</p>
        </div>

        <!-- JS -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.parallax').parallax();
                $('.modal-trigger').leanModal({
                    dismissible: true, // Modal can be dismissed by clicking outside of the modal
                    opacity: .9, // Opacity of modal background
                    in_duration: 300, // Transition in duration
                    out_duration: 200, // Transition out duration
                });
                $(".button-collapse").sideNav();
            });
        </script>
    </body>
</html>
