<?php
// Debugging tools. Only turn these on in your development environment.
// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");


if (isset($_POST['add'])){

        ini_set("mail.log", "/tmp/mail.log");
        ini_set("mail.add_x_header", TRUE);

        $name = $_POST['Fname'];
        $email = $_POST['email'];
        $message = $_POST['msg'];
        $to = 'prateek@mngca.in';
        $subject = 'Mail From Muchhal & Gupta (Website)';
        $message = "Dear, Muchhal & Gupta \r\n\r\n". $message."\r\n\r\n".$name."\r\n".$email;
        $headers = implode("\r\n", [
         'From: noreply@mngca.in',
         'Reply-To: noreply@mngca.in',
         'X-Mailer: PHP/' . PHP_VERSION
        ]);

        $result = mail($to, $subject, $message, $headers);
        if ($result) {
         header('Location: index.php', true, 303);
         exit;
        }
        else {
         echo "<script> alert('FAILED');location.href = 'index.php';</script>";
        }
      }
