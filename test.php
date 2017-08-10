  <?php
  session_start();
$con=mysqli_connect("localhost","ravikanth","rktheboss","test");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else
  {
  }$sql="INSERT INTO  `test`.`contact` (
`name` ,
`email` ,
`website` ,
`msg`
)
VALUES('$_POST[name]','$_POST[email]','$_POST[website]','$_POST[message]')";
   if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  else
  {
  echo "sucess";

  }
  ?>