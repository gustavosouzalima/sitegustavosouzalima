<?php

// Contact name
$name =$_POST["name"];

// messages
$message=$_POST["message"];

// Mail of sender
$mail_from=$_POST["customer_mail"];

// From
$header="from: $name <$mail_from>";

// Enter your email address
$to ='gudesouzalima@gmail.com';
$send_contact=mail($to,$name,$message,$header);

// Check, if message sent to your email
if($send_contact){
echo "Contato enviado!";
echo "
    <script type='text/JavaScript'>
        setTimeout('location.href = \"http://gustavosouzalima.com.br\";',1500);
    </script>
";
}
else {
echo "ERRO NO ENVIO";
}
?>