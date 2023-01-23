<?php
    $email = $_POST['email'];
    $ppassword = $_POST['ppassword'];
    $con = new mysqli("localhost","root","","sahodb");
    if($con->connect_error)
    {
        die("Failed to connect : ".$con->connect_error);
    }
    else
    {
    $stmt = $con->prepare("select * from sahotable where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['ppassword'] === $ppassword)
        {
            ?>
            <!DOCTYPE HTML>
<html>
<style>
div {
  margin-bottom: 15px;
  padding: 4px 12px;
}

.success {
  background-color: #ddffdd;
  border-left: 6px solid #04AA6D;
}
</style>
<body>
<div class="success">
<p style="font-size:30px"><strong>Login Successful!!!</strong></p>
</div>
<img src="https://xd.adobe.com/ideas/wp-content/uploads/2020/01/How-to-Write-Design-User-Friendly-Error-Messages-1257x550.jpg">
<a href="http://localhost/saho/settime.php"><p style="font-size:30px"><strong>Click here to Set your Available Time</strong></p></a>
</body>
</html>
            <?php
        }
        else{
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
    else{
        echo "<h2>Invalid Email or Password</h2>";
    }
}
?>
