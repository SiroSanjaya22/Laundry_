<?php 

    require ('include/koneksi.php');
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendmail($fullName){
        
        require ('PHPMailer/src/PHPMailer.php');
        require ('PHPMailer/src/Exception.php');
        require ('PHPMailer/src/SMTP.php');

        $email_penerima = $_POST['fullname'];

        $mail = new PHPMailer(true);


        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;            
            $mail->Username   = 'm.sirojudin220@gmail.com';
            $mail->Password   = 'tzssyxaqbjzddbfu';                    
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   
            $mail->Port       = 465;                           

            $mail->setFrom($email_penerima);
            $mail->addAddress('m.sirojudin220@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Password Reset link form Aatmaninfo';
            $mail->Body    = "we got a request form you to reset Password! <br>Click the link bellow: <br>
            <a href='http://localhost/laundry/reset-password.php?email=$email_penerima'>reset password</a>";

            $mail->send();
                return true;
        } catch (Exception $e) {
                return false;
        }
    }
    if (isset($_POST['send-link'])) {
        
        $fullname =$_POST['fullname'];

        $sql="SELECT * FROM tbl_user WHERE fullname = '$fullname'";
        $result = $conn->query($sql);
if ($result) {

                if ( sendmail($fullname )) {
                        echo "
                            <script>
                                alert('Password reset link send to mail.');
                                window.location.href='index.php'    
                            </script>"; 
                    }else{
                        echo "
                            <script>
                                alert('Something got Wrong');
                                window.location.href='forgotPassword.php'
                            </script>";
                    }

            }else{
                echo "
                    <script>
                        alert('Email Address Not Found');
                        window.location.href='forgotPassword.php'
                    </script>";
            }   
            
        }else{
            echo "
                <script>
                    alert('Server Down');
                    window.location.href='forgotPassword.php'
                </script>";
        }
    
    
    ?>