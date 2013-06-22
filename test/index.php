<?php

$msg="";
if(isset($_POST['submit'])) {
    /* ****Important!****

    replace name@your-web-site.com below 

    with an email address that belongs to 

    the website where the script is uploaded.

    For example, if you are uploading this script to

    www.my-web-site.com, then an email like

    form@my-web-site.com is good.

    */

	$from_add = "test@b.uweb.mn"; 
	$to_add = "mr.unagaldai@gmail.com";
	$subject = "Ажилын байрны анкет ирлээ!";
	$message = "<html>
	  <body>
	    <table rules='all' style='border-color: #666;' cellpadding='10'>
	      <tr style='background: #EEE'>
		<td><b>Таны сонирхож буй албан тушаал:</b></td>
		<td>Түгээлтийн жолооч</td>
	      </tr>
	      <tr style='background: #EEE'>
		<td><b>Таны хүсч буй цалин:</b></td>
		<td>Таны хүсч буй цалин:</td>
	      </tr>
	      <tr>
		<td><b>Таны сонирхож буй албан тушаал:</b></td>
		<td>Түгээлтийн жолооч</td>
	      </tr>
	      <tr>
		<td><b>Таны хүсч буй цалин:</b></td>
		<td>Таны хүсч буй цалин:</td>
	      </tr>
	      <tr>
		<td><b>Таны сонирхож буй албан тушаал:</b></td>
		<td>Түгээлтийн жолооч</td>
	      </tr>
	      <tr>
		<td><b>Таны хүсч буй цалин:</b></td>
		<td>Таны хүсч буй цалин:</td>
	      </tr>
	      <tr>
		<td><b>Таны сонирхож буй албан тушаал:</b></td>
		<td>Түгээлтийн жолооч</td>
	      </tr>
	      <tr>
		<td>Таны хүсч буй цалин:</td>
		<td>Таны хүсч буй цалин:</td>
	      </tr>
	    </table>
	  </body>
	</html>";
	$headers = "From: ".$from_add." \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	if(mail($to_add, $subject, $message, $headers)) {
            $msg = "Mail sent OK";
	} else {
 	   $msg = "Error sending email!";
	}
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
    <head>
        <title>Test form to email</title>
    </head>
    <body>
    <?php echo $msg ?>
        <p>
            <form action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>
                <input type='submit' name='submit' value='Submit'>
            </form>
        </p>
    </body>
</html>
