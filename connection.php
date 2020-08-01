<?php

    $link = mysqli_connect("shareddb-t.hosting.stackcp.net", "SecretDiary-313331f176", "kevinr@78", "SecretDiary-313331f176");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>