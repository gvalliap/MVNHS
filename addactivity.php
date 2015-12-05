<?php
    include("initialize.php");
    include("variables.php");
    if($admin == 0) {
        header("Location: home.php");
        die;
    }
?>

<?php
    $msg = "";
    if(isset($_POST['submit'])) {
        if($_POST['name'] != null && $_POST['description'] != null && $_POST['location'] != null && $_POST['start-time'] != null && !(empty($_POST['start-aorp'])) && $_POST['end-time'] != null && !(empty($_POST['end-aorp'])) && $_POST['hours'] != null && $_POST['day'] != null && $_POST['month'] != null && $_POST['year'] != null) {
            $row = $connect->query("SELECT * FROM `activites` ORDER BY `AID` DESC LIMIT 1");
            $aid = $row['AID'] + 1;
            $saorp = "PM";
            if($_POST['start-aorp'] == "sam") {
                $saorp = "AM";
            }
            $eaorp = "PM";
            if($_POST['end-aorp'] == "eam") {
                $eaorp = "AM";
            }
            $zero = 0;

            $insert = "INSERT INTO `activites` (`AID`, `name`, `officer`, `description`, `location`, `hours`, `spots`, `closed`, `day`, `month`, `year`, `start_time`, `start_ap`, `end_time`, `end_ap`, `done`) VALUES ";

            $sql = "(".$aid.",".$_POST['name'].",".$name.",".$_POST['description'].",".$_POST['location'].",". $_POST['hours'].",".$_POST['spots'].",".$zero.",".$_POST['day'].",".$_POST['month'].",".$_POST['year'].",".$_POST['start-time'].",".$saorp.",".$_POST['end-time'].",".$eaorp.",".$zero.")";

            $connect->query($insert . $sql);

            $msg = "Event created successfullly!";
        } else {
            $msg = "Please fill out the form!";
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
            <div class="container">
                <h2 class="red-text section-header center">Add an Event</h2>
                <p>Please fill out this form to add a new event to the list!</p>
                <p class="red-text"><?= $msg; ?></p>
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
                            <input id="start-time" name="start-time" type="text" length="5">
                            <label for="start-time">Start Time (i.e. 04:30)</label>
                        </div>
                        <input name="start-aorp" type="radio" value="sam" id="sam">
                        <label for="sam">AM</label>
                        <input name="start-aorp" type="radio" value="spm" id="spm">
                        <label for="spm">PM</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="end-time" name="end-time" type="text" length="5">
                            <label for="end-time">End Time (i.e. 05:30)</label>
                        </div>
                        <input name="end-aorp" type="radio" value="eam" id="eam">
                        <label for="eam">AM</label>
                        <input name="end-aorp" type="radio" value="epm" id="epm">
                        <label for="epm">PM</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 l4">
                            <input id="hours" name="hours" type="text" length="2">
                            <label for="hours">Hours</label>
                        </div>
                        <div class="input-field col s6 l4">
                            <input id="spots" name="spots" type="text" length="2">
                            <label for="spots">Spots</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 l3">
                            <input id="day" name="day" type="text" length="2">
                            <label for="day">Day (i.e. 06)</label>
                        </div>
                        <div class="input-field col s4 l3">
                            <input id="month" name="month" type="text" length="2">
                            <label for="month">Month (i.e. 12)</label>
                        </div>
                        <div class="input-field col s4 l2">
                            <input id="year" value="2015" name="year" type="text" length="4">
                            <label for="year">Year</label>
                        </div>
                    </div>
                    <button id="submit" name="submit" class="btn-large waves-block waves-effect waves-light center-align" type="submit" style="margin: auto;">Submit
                        <i class="material-icons left">send</i>
                    </button>
                </form>
            </div>
        </main>

        <?php include("footer.php"); ?>
        <?php include("script.php"); ?>
    </body>
</html>
