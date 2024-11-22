<?php 

$dbconfig = parse_ini_file(__DIR__ . "/../dbconfig.env");

$host = $dbconfig["DB_HOST"];
$dbname = $dbconfig["DB_NAME"];
$dbuser = $dbconfig["DB_USERNAME"];
$password = $dbconfig["DB_PASSWORD"];
// PHP MAILER
// $smtp_host = $dbconfig["SMTP_HOST"];
// $smtp_port = $dbconfig["SMTP_PORT"];
// $smtp_user = $dbconfig["SMTP_USER"];
// $smtp_password = $dbconfig["SMTP_PASSWORD"];
// $smtp_secure = $dbconfig["SMTP_SECURE"];


try {

    $dpdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $password);
    // echo "Connected";

} catch(PDOException $e) {
    // Change error code ---
    echo "Connection failed";
    echo $e->getMessage();
    exit;
}

?>
















