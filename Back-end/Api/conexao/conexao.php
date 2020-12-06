<?php
    function query($sql){
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $database = "fseletro"; 
        
        
        $conn = mysqli_connect($servername, $username, $password, $database); 
        $resultado=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $resultado;
    }
    

?>
