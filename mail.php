

<?php
    $to      = 'ismsharma497@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From:sonoojaiswal@javatpoint.com'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    

       if(mail($to, $subject, $message, $headers) ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }
?>