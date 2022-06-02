<?php
function createRows() {
   
      if(isset($_POST['submit'])) {
  
      if ((isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message']))) {
  
     
      // global $connection;
      
      $name = validate_input($_POST["name"]);
      $email = validate_input($_POST["email"]);
      $phone = validate_input( $_POST['phone']);

      $subject = validate_input($_POST["subject"]);
      $message = validate_input($_POST["message"]);

 if(empty($name)){
     return;
 } else if(empty($email)){
     return;
 }else if(empty($phone)){
    return;
 }else if(empty($subject)){
    return;
 }else if(empty($message)){
  return;
}
      
$connection = new mysqli("sql11.freemysqlhosting.net", "sql11495962", "Hj4c75TUDS", "sql11495962");

  $queryread = "SELECT * FROM contact WHERE email = '$email'";
      $resultread = mysqli_query($connection,$queryread);
      if ($resultread) {
        if (mysqli_num_rows($resultread) > 0) {
              
          header("Location: contact.php?error=EMAIL_ALREADY_TAKEN!!");
        } 
       else if (isset($_POST['email']) == true && empty($_POST['email']) == false) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
              header("Location: contact.php?error=INVALID_EMAIL_FORMAT_TRY_AGAIN!!");
             
            }
            
            else{
              // $insert_statement = $GLOBALS['connection']->prepare("INSERT INTO tasks (task, date_added, done) VALUES(?, now(),0);");



              $stmt = $connection->prepare("INSERT INTO contact (name ,email,phone,subject,message) VALUES (?, ?, ?, ?, ?);");
              $stmt->bind_param('ssiss', $name, $email, $phone, $subject ,$message);
              if($stmt){
              
                if(!$stmt->execute() || $stmt->affected_rows !=1){
                  print_r('error'.$stmt->err);
                  return;
              }
              $stmt->close();
              
            
              // $query = "INSERT INTO contact(name,email,phone,subject,message) ";
              // $query .= "VALUES ('$name', '$email', '$phone', '$subject', '$message')";
              // header("Location: contact.php?");
            
            }
           }
            
          // $insert_statement = $GLOBALS['conn']->prepare($query);
          // $insert_statement->bindParam('name', $name ,PDO::PARAM_STR);
          // $insert_statement->bindParam('email', $email, PDO::PARAM_STR);
          // $insert_statement->bindParam('phone', $phone, PDO::PARAM_INT);
          // $insert_statement->bindParam('subject', $subject, PDO::PARAM_STR);
          // $insert_statement->bindParam('message', $message, PDO::PARAM_STR);
          
        //  $result = mysqli_query($connection, $query);
  
        
           
           }
    }
    } }
 }
    function validate_input($data)
{
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
