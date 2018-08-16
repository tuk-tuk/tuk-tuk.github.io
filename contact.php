
<?php
if($_POST["message"]) {
    mail("bishal.kenari@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>