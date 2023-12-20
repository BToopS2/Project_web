<?php
session_start();
require_once("../../backend/auth.php");
require_once("../../utils/checkEmpty.php");
require("../../PHPMailer/src/PHPMailer.php");
require("../../PHPMailer/src/SMTP.php");
// Bao gồm các lớp PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Hàm gửi email đăng ký
function sendRegistrationEmail($email, $otp) {
    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "storetvh105@gmail.com";
        $mail->Password = "urcrunhh biqyebvs";
        $mail->SetFrom("storetvh105@gmail.com");
        $mail->Subject = "HUS STORE (OTP)";
        $mail->Body = "Cảm ơn bạn đã đăng ký tài khoản! <br>Vui lòng nhập mã OTP sau đây để hoàn tất quá trình đăng ký : <strong>$otp</strong><p></p><img src='https://i.pinimg.com/originals/6f/39/35/6f393516f4f2876c5ff1b8ddcf57c638.jpg' alt='Ảnh mô tả'>";
        $mail->AddAddress($email);

        // Gửi email
        $mail->send();
    } catch (Exception $e) {
        echo "Không thể gửi tin nhắn. Lỗi Mailer: {$mail->ErrorInfo}";
    }
}

// Kiểm tra xem biểu mẫu đăng ký đã được gửi chưa

// Kiểm tra xem biểu mẫu đăng ký đã được gửi chưa
if (isset($_POST['submit'])) {
    if(CheckEmpty::checkEmpty(['username', 'password', 'fullname', 'address', 'dob', 'email', 'phone'])) {
        // Generate and store OTP
        if (Auth::checkExist('username', $_POST['username']) && Auth::checkExist('email', $_POST['email'])){
        $otp = mt_rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['registration_data'] = $_POST; // Save registration data to session

        // Send OTP via email
        sendRegistrationEmail($_POST['email'], $otp);

        // Redirect to OTP verification page
        header('Location: otp.php');
        exit();
    }
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Đăng Ký Tài Khoản</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Đăng Ký</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input minlength="5" maxlength="20" class="input--style-4" type="text" name="username">
                                </div>
                            </div>
   

<div class="col-2">
    <div class="input-group">
        <label class="label">Mật khẩu</label>
        <input minlength="8" maxlength="50" class="input--style-4" type="password" name="password" oninput="validatePassword()">
    </div>
</div>

<script>
    function validatePassword() {
        var passwordInput = document.getElementsByName("password")[0];
        var password = passwordInput.value;

        // Biểu thức chính quy để kiểm tra ít nhất một chữ cái viết hoa, một ký tự đặc biệt và một chữ số
        var uppercaseRegex = /[A-Z]/;
        var specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;
        var digitRegex = /\d/;

        // Kiểm tra xem mật khẩu đáp ứng yêu cầu hay không
        var isUppercasePresent = uppercaseRegex.test(password);
        var isSpecialCharPresent = specialCharRegex.test(password);
        var isDigitPresent = digitRegex.test(password);

        // Hiển thị thông báo lỗi nếu yêu cầu không được đáp ứng
        if (!isUppercasePresent || !isSpecialCharPresent || !isDigitPresent) {
            passwordInput.setCustomValidity("Mật khẩu phải chứa ít nhất một chữ cái viết hoa, một ký tự đặc biệt và một chữ số.");
        } else {
            passwordInput.setCustomValidity(""); // Xóa thông báo lỗi tùy chỉnh
        }
    }
</script>


                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Fullname</label>
                                    <input  minlength="5" maxlength="100" class="input--style-4" type="text" name="fullname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input  minlength="5" maxlength="100" class="input--style-4" type="text" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input readonly class="input--style-4 js-datepicker" type="text" name="dob">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" value=1 name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value=0 name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input  minlength="10" maxlength="50" class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input  minlength="10" maxlength="10" class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> -->
                        <div class="p-t-15">
                            <button name='submit' class="btn btn--radius-2 btn--blue" type="submit">Đăng Ký</button>
                        </div>
                        <div class="p-t-15">
                        <a href="../login/index.php">Bạn đã có tài khoản?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
