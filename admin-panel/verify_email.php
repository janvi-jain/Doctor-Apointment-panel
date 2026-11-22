<?PHP
include('./db_config.php');
// echo "Email verification page";
    if(isset($_GET['email']) && isset($_GET['token'])) {
        $email = $_GET['email'];
        $token = $_GET['token'];
        $query = "SELECT * FROM patients WHERE email='$email' AND token='$token'";
        $result = mysqli_query($conn, $query);
        if($result){
            $updatequery = "UPDATE patients SET `status`='active' WHERE email='$email' AND token='$token'";
            $updateresult = mysqli_query($conn, $updatequery);
            if($updateresult){
                echo "<center>";
                echo "<h2>✔ Email Verified Successfully!</h2>";
                echo "<p>Your patient account has been verified.</p>";
                echo "<a href='../patient-login.php'>Go to Patient Login</a>";
                echo "</center>";
            }else{
                echo "<center>";
                echo "<h3>Invalid Verification Link!</h3>";
                echo "<a href='../patient-registration.php'>Register Again</a>";
                echo "</center>";
            }
            
        }else{
            echo "<center>";
            echo "<h3>Invalid Verification Link!</h3>";
            echo "<a href='../patient-registration.php'>Register Again</a>";
            echo "</center>";
        }
    }else{
        header("Location: ../patient-registration.php");
        exit();
    }
?>