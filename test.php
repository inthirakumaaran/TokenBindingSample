<?php
/**
 * Created by PhpStorm.
 * User: inthirakumaaranwso2com
 * Date: 9/27/17
 * Time: 7:57 PM
 */
?>
<html>
<head>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="redirect.js"></script>

</head>
<body>
<!--<button type="button" name="button">GO</button>-->
<script type="text/javascript">
//    jQuery(function($){
//        $("button").click(function(){
//            $.redirect("https://localhost.com:4433/password/callback.php",
//                {code: "johnDoe"},
//                "POST",null,null,true);
//        });
//    });
    jQuery(function($){
        $(document).ready( function(){
            $.redirect("https://localhost.com:4433/password/callback.php",
                {code: "johnDoe"},
                "GET",null,null,true);
        });
    });


//    $(document).ready ( function(){
//        $.redirect('callback.php', {'code': 'kumar', 'arg2': 'value2'});
//        alert('ok');
//    });​
//    (function($) {
//        $(document).ready(function() {
//            window.pulse_image = $('.pulse_image');
//            window.pulse_continue_loop = true;
//            PulseAnimation(); // start the loop
//            $.redirect('callback.php', {'code': 'kumar', 'arg2': 'value2'});
//        });
//    })(jQuery);

</script>
</body>
</html>