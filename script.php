<!-- JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/typed.min.js"></script>

<script type="text/javascript">
    var welcome = ["Hi Ganesh Valliappan!<br> ^2000Welcome to the NHS website"];
    $(document).ready(function(){
        $('.parallax').parallax();
        $('.modal-trigger').leanModal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .9, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
        });
        $(".button-collapse").sideNav();
        $(".element").typed({
            strings: welcome,
            typeSpeed: 0
        });
    });
    $('.slider').slider({full_width: true});
</script>
