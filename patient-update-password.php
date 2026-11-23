<?PHP
include('./admin-panel/db_config.php');
// echo "Email verification page";
    if(isset($_GET['email']) && isset($_GET['token'])) {
        $email = $_GET['email'];
        $token = $_GET['token'];
        $query = "SELECT * FROM patients WHERE email='$email' AND token='$token'";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "<center>";
            echo "<h2>✔ Email Verified Successfully!</h2>";
            echo "<p>Your patient account has been verified.</p>";
            echo "<a href='./patient-reset-new-password.php'>Go to Patient Reset password</a>";
            echo "</center>";
        }else{
            echo "<center>";
            echo "<h3>Invalid Verification Link!</h3>";
            echo "<a href='./patient-forget-password.php?token=".$token."'>Resend Verification Email</a>";
            echo "</center>";
        }
    }else{
        header("Location: ./patient-forget-password.php");
        exit();
    }
?>