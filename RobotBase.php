<?php
 $db_host = 'localhost';
 $db_user = 'root';
 $db_password = '';
 $db_db = 'mydb2';
 $db_port = 3306;

 $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

 if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;


  if(isset($_POST['Left'] )) { 

    $Right=$_POST['Right'];
    $Left=$_POST['Left'];
    $Stop=$_POST['Stop'];
    $Forward=$_POST['Forward'];
    $Backward=$_POST['Backward'];

      echo "<br>";
  

      $my_query = "INSERT INTO mydb2 (Right, Left, Stop , Forward, Backward) VALUES ('$Right', '$Left', '$Stop', '$Forward', '$Backward')";
      $result = mysqli_query($connection, $my_query);
       
      if(mysqli_query($connection,$my_query))
      {
          echo "Item successfuly Added!";
      }
      else "Error:".$sql. "<br>"
      .mysqli_error($connection); 
      }
     
      if(isset($_POST['Stop'])) {
          echo "<br>";
      
          $my_query = "";
      
          $my_query = "select * from Stop_values WHERE 1 ";
          $result = mysqli_query($connection, $my_query);
          $my_query = "INSERT INTO Stop_values (isStop) VALUES (1)";
          $result = mysqli_query($connection, $my_query);
          
          if(mysqli_query($connection,$my_query))
          {
              echo "Item successfuly Added!";
          }
          else "Error:".$my_query. "<br>"
          .mysqli_error($connection); 
          }
       
          if(isset($_POST['Right'])) {
            echo "<br>";
        
            $my_query = "";
        
            $my_query = "select * from  Right_values WHERE 1 ";
            $result = mysqli_query($connection, $my_query);
            $my_query = "INSERT INTO  Right_values (isRight) VALUES (1)";
            $result = mysqli_query($connection, $my_query);
            
            if(mysqli_query($connection,$my_query))
            {
                echo "Item successfuly Added!";
            }
            else "Error:".$my_query. "<br>"
            .mysqli_error($connection); 
            }
  
            if(isset($_POST['Forward'])) {
                echo "<br>";
            
                $my_query = "";
            
                $my_query = "select * from Forward_values WHERE 1 ";
                $result = mysqli_query($connection, $my_query);
                $my_query = "INSERT INTO Forward_values (isForward) VALUES (1)";
                $result = mysqli_query($connection, $my_query);
                
                if(mysqli_query($connection,$my_query))
                {
                    echo "Item successfuly Added!";
                }
                else "Error:".$my_query. "<br>"
                .mysqli_error($connection); 
                }

                if(isset($_POST['Backward'])) {
                    echo "<br>";
                
                    $my_query = "";
                
                    $my_query = "select * from Backward_values WHERE 1 ";
                    $result = mysqli_query($connection, $my_query);
                    $my_query = "INSERT INTO Backward_values (isBackward) VALUES (1)";
                    $result = mysqli_query($connection, $my_query);
                    
                    if(mysqli_query($connection,$my_query))
                    {
                        echo "Item successfuly Added!";
                    }
                    else "Error:".$my_query. "<br>"
                    .mysqli_error($connection); 
                    }
  
  mysqli_close($connection);
  ?> 
