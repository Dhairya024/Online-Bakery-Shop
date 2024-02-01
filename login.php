<?php
    include "./connection/connection.php";
    if(isset($_POST["index.php"])){
        require_once './connection/connection.php';

        $email = $_POST['email'];
        $password = $_POST['password'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = filter_var($password, FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM customertb WHERE email = ? AND password = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param('ss', $email, $password);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {

            session_start();
            $_SESSION['user_id'] = $result->fetch_assoc()['id'];

            header('Location: home.php');

        } else {

            echo 'Invalid email or password.';

        }
        $connection->close();
    }
        
    else{
        ?>
        <script>
        alert("Please check the details once again.");
        </script>
        <?php
    }
    
?>
