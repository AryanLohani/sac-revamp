<?php
  
include_once('connection.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $email = test_input($_POST["name"]);
    $password = test_input($_POST["dob"]);
    $stmt = $conn->prepare("SELECT `email`,`dob` FROM aam");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['email'] == $email) && 
            ($user['dob'] == $password)) {

                $stmt2 = $conn->prepare("SELECT `reciept` FROM aam");
                $stmt->execute();
                $recpt = $stmt->fetchAll();

                foreach($recpt as $rpt) {
                    if(($rpt['reciept'] == null) )  {
                        header("Location: adminpage.php");
                    }
                    else{
                        echo "<script language='javascript'>";
                        echo "alert('Successfully Resigter')";
                        echo "</script>";
                        header("Location: AAM.php");
                    }
                }

                /* code reciept empty hogi adminpage me jaye 
                ek page you are done set time 5 sec home page me bej dege */
                //header("Location: adminpage.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
  
?>