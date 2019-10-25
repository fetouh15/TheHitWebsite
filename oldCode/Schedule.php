
    <?php include_once("Navbar.html"); ?>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName="Hit";
    // Create connection
    $connect = new mysqli($servername, $username, $password,$dbName);
    
    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }?>


<div class=" jumbotron" style="background-color:#373537"> <!-- 1 -->
     <div class="row"> <!-- 2 -->
<?php
        $sqlQuery= "Select Name From Classes";
        $result = $connect->query($sqlQuery);
        $classNames= array();
        
        if ($result->num_rows > 0) {
            
            
            while($row=  $result->fetch_assoc())
            {
                $classNames[]=$row;
                
                
            }
            
            
            foreach($classNames as $className)
            {  ?>

                <div class="col-sm-12 col-md-6" > <!-- 3 -->
                <div class="card" id="class-card" > <!-- 4 -->
                <div class="card-header" style="background-color:#8F1924; color:white; text-align: left;">
<!-- 5 -->
<h2>   <?php print_r( $className['Name']); ?></h2>
</div>
 <div class="card-body"> <!-- 4 -->
<?php
    $end="'";
            $sqlQuery= "Select Day,Time,Coach_Name From Schedule Where Class_Name='" . $className['Name'] . $end;
            
            $result = $connect->query($sqlQuery);
            
            if ($result->num_rows > 0) {
                
                
                
                while($row=  $result->fetch_assoc())
                {
                    
                    switch($row['Day']){
                            
                        case "1":
                            $Day="Saturday";
                            break;
                        case "2":
                            $Day="Sunday";
                            break;
                        case "3":
                            $Day="Monday";
                            break;
                        case "4":
                            $Day="Tuesday";
                            break;
                        case "5":
                            $Day="Wednesday";
                            break;
                        case "6":
                            $Day="Thursday";
                            break;
                        case" 7":
                            $Day="Friday";
                            break;
                            
                    }
                    
                    
                ?>
                
                
                
            


      <!-- 5-->
           <blockquote class="blockquote mb-0">
<p style="color: white; text-align: left;"><?php echo $Day; echo" "; echo $row['Time']; echo" "; echo $row['Coach_Name']; }}?> </p>

           </blockquote>
       </div> <!-- 4 -->
   </div> <!-- 3 -->
</div><!-- 2-->
<!-- 1 -->
<!-- 1 -->

<?php
    
    }
    
    }
    mysqli_close($connect);
    ?>




</div>
</div>



 <?php include_once("Footer.html"); ?>

</body>
</html>











