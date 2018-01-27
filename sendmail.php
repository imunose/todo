<?php
include "config.php";
// multiple recipients
$to  = 'libracoder@gmail.com' . ', '; // note the comma

// subject
$subject = 'TODO TASKS';






$sometasks = mysqli_query($connection, "SELECT * FROM tasks ORDER BY id DESC  LIMIT 4 ");

$tasks_from_db="";
while ($row = $sometasks->fetch_assoc()) {
    $tasks_from_db.= '<li>
                                <a href="">
                                           <p class="tasktitle">  ' . $row["title"] . '</p>
                                </a>

                                   <span class="small" >' . $row["deadline"] . '</span><br>
                              
                              </li>';
}



// message
$message = "<html>
<head>
  <title>TODO TASKS</title>
</head>
<body>
  <p>Here are all your tasks!</p>
  <table>
     $tasks_from_db
</table>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Precious <okwuprecious@gmail.com>' . "\r\n";
//$headers .= 'From: TodoList <itoyaedith@gmail.com>' . "\r\n";
// Mail it
mail($to, $subject, $message,$headers);

header("Location:dashboard.php?email=1");
?>