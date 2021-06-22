<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Oracle connection</title>
</head>
<body>
<h1>Trying to connect oracle</h1>
<?php
echo phpinfo();
echo "Code Starts from here";
$conn = oci_connect('bipul', 'bipul', 'localhost/ORCLCDB');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM employees');
oci_execute($stid);

    // $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SERVICE_NAME=ORCLCDB.localdomain)))" ;
    // var_dump($db);
    // if($c = OCILogon("bipul", "bipul", $db))
    // {
    //     echo "Successfully connected to Oracle.\n";
    //     OCILogoff($c);
    // }
    // else
    // {
    //     $err = OCIError();
    //     echo "Connection failed." . $err[text];
    // }
    echo "nothing shows";
?>
</body>
</html>