<?php
    $email = $_POST['email'];
    $name = $_POST['nama'];
    $subject = $_POST['subjek'];
    $message = $_POST['pesan'];

    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    // Konfigurasi SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'amiruzg@gmail.com';
    $mail->Password = 'gunesanakmm3';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);

    // Menambahkan penerima
    $mail->addAddress('admin@tahuraradensoerjo.or.id');

    // Menambahkan cc atau bcc 
    $mail->addCC('amiruzg@gmail.com');

    // Subjek email
    $mail->Subject = $subject.' - '.$name;

    // Mengatur format email ke HTML
    $mail->isHTML(true);

    // Konten/isi email
    $mailContent = '<strong>Pesan - </strong>'.$message;
    $mail->Body = $mailContent;

    $mail->send();

    // // Kirim email
    // if(!$mail->send()){
    //     echo 'Pesan tidak dapat dikirim.';
    //     echo 'Mailer Error: ' . $mail->ErrorInfo;
    // }else{
    //     echo 'Pesan telah terkirim';
    //     alert("dfgfd");
    // }
?>