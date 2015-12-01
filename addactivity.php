<?php
    include("initialize.php");
    include("variables.php");
    if($admin == 0) {
        header("Location: home.php");
        die;
    }
?>

<?php
    
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
            <div class="container">
                <h2 class="red-text section-header center">Add an Event</h2>
                <p>Please fill out this form to add a new event to the list!</p>
                <form method="post">
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input id="name" name="name" type="text">
                            <label for="name">Event Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l8">
                            <textarea id="description" name="description" class="materialize-textarea"></textarea>
                            <label for="description">Description</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l8">
                            <textarea id="location" name="location" class="materialize-textarea"></textarea>
                            <label for="location">Location (include address)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="start-time" name="start-time" type="text" length="2">
                            <label for="start-time">Start Time (i.e. 04:30)</label>
                        </div>
                        <input name="start-aorp" type="radio" id="am">
                        <label for="am">AM</label>
                        <input name="start-aorp" type="radio" id="pm">
                        <label for="pm">PM</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="end-time" name="end-time" type="text" length="2">
                            <label for="end-time">End Time (i.e. 05:30)</label>
                        </div>
                        <input name="end-aorp" type="radio" id="am">
                        <label for="am">AM</label>
                        <input name="end-aorp" type="radio" id="pm">
                        <label for="pm">PM</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s3 l2">
                            <input id="hours" name="hours" type="text" length="2">
                            <label for="hours">Hours</label>
                        </div>
                        <div class="input-field col s3 l2">
                            <input id="day" name="day" type="text" length="2">
                            <label for="day">Day (i.e. 06)</label>
                        </div>
                        <div class="input-field col s3 l2">
                            <input id="month" name="month" type="text" length="2">
                            <label for="month">Month (i.e. 12)</label>
                        </div>
                        <div class="input-field col s3 l2">
                            <input id="year" value="2015" name="year" type="text" length="4">
                            <label for="year">Year</label>
                        </div>
                    </div>
                    <button id="login-btn" name="login" class="btn-large waves-block waves-effect waves-light center-align" type="submit" style="margin: auto;">Submit
                        <i class="material-icons left">send</i>
                    </button>
                </form>
            </div>
        </main>

        <?php include("footer.php"); ?>
        <?php include("script.php"); ?>
    </body>
</html>
