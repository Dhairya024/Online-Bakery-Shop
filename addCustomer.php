<?php
    include "./connection/connection.php";
    if(isset($_POST["add_customer"])){
        $c_email = $_POST["email"];
        $c_password = $_POST["password"];
        $c_name = $_POST["name"];
        $c_contact = $_POST["contact"];
        $c_address = $_POST["address"];
        $hash = password_hash($c_password , PASSWORD_DEFAULT );

        if(mysqli_query($connection,"INSERT INTO customertb(email,password,name,contact,address) values ('$c_email','$hash','$c_name','$c_contact','$c_address')")){
            ?>
                <script>
                    window.location.href = "./?msg=New Customer Add";
                    
            alert("Register successfully.");
                </script>
            <?php
        }
        else{
            ?>
            <script>
            alert("Not registered.");
            </script>
            <?php
        }
    }
    
?>