<?php
    session_start();


    if (isset($_SESSION["id"])) {
        echo "<script>
        alert('you have alredy login');
        window.location.href='index.php;

    </script>";
    }
    else {
        echo "<style type=text/css> 
                .acclogo{visibility:hidden;}
                .submitbutton{visibility:hidden;}
            </style>";
    }
?>