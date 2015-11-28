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
                <h2 class="center red-text section-header">Volunteer Opportunities</h2>
                <p>Click on an event name to sign-up for it or to see a brief description of it.</p>
                <table class="highlight centered">
                    <thead class="red white-text">
                        <th data-field="id">Event Name</th>
                        <th data-field="date">Date</th>
                        <th data-field="time">Time</th>
                        <th data-field="hours">Hours</th>
                        <th data-field="spots">Spots</th>
                    </thead>
                    <tbody class="light-blue darken-3 white-text">
                        <tr>
                            <td>Event #1</td>
                            <td>1/1/1</td>
                            <td>4:30pm - 5:30pm</td>
                            <td>1</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Event #2</td>
                            <td>1/1/1</td>
                            <td>4:30pm - 5:30pm</td>
                            <td>1</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Event #3</td>
                            <td>1/1/1</td>
                            <td>4:30pm - 5:30pm</td>
                            <td>1</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Event #4</td>
                            <td>1/1/1</td>
                            <td>4:30pm - 5:30pm</td>
                            <td>1</td>
                            <td>10</td>
                        </tr>
                </table>
            </div>
        </main>

        <?php include("footer.php"); ?>

        <?php include("script.php"); ?>
    </body>
</html>
