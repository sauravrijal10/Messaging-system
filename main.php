<?php
    include("server.php");
?>
<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
       <div class="col-sm-3">
            <?php
                echo '<h3 class="user">'.'<b>'.$_SESSION['firstname']." ".$_SESSION['lastname'].'</b>'.'</h3>';
           ?>
           <hr>
       </div>
       <div class="col-sm-6">
           
       </div>
       <div class="col-sm-3">
       <span><h3>Other Contacts</h3></span>
       <hr>
       <?php
            $query="SELECT firstname, lastname FROM users WHERE id!='".$_SESSION["id"]."'";
                        $result=mysqli_query($conn, $query);
                        $check=mysqli_num_rows($result);
                        if($check>0){
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<div class=friend>'.$row['firstname']." ".$row['lastname'].'<br>'.'</div>';}
                        }
        ?>
       </div>
       </body> 
</html>