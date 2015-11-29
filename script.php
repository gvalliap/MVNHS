<!-- JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/typed.js"></script>

<script type="text/javascript">
    var welcome = ["<b>M</b>onta <b>V</b>ista <b>N</b>ational <b>H</b>onor <b>S</b>ociety", "<b>MVNHS:</b> Character", "<b>MVNHS:</b> Scholarship", "<b>MVNHS:</b> Service", "<b>MVNHS:</b> Leadership", "Join us and volunteer now!"];
    var enter = ["<b>M</b>onta <b>V</b>ista <b>N</b>ational <b>H</b>onor <b>S</b>ociety", "Character^750, Scholarship^750, Service^750, Leadership", "Join us and volunteer now!"];
    var min = ["Character.", "Scholarship.", "Service.", "Leadership.", "<b>M</b>onta <b>V</b>ista <b>N</b>ational <b>H</b>onor <b>S</b>ociety"];
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
            strings: min,
            typeSpeed: 0
        });
    });
    $('.slider').slider({full_width: true});
</script>
