<?php
            include("connection.php");
            if($_POST['submit'])
            {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $message = $_POST['message'];

              $query = "INSERT INTO contact_details VALUES('$name','$email','$message')";
              $data = mysqli_query($conn,$query);

              if($data)
              {
                echo "data inserted";
              }
              else
              {
                echo "failed";
              }

            }

         ?>