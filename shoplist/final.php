<html>
<head>
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
  $('li').click(function() {
    if(!$(this).hasClass("lib"))
      {$(this).addClass('lib');
        $("#totalprice").attr("value",parseFloat($("#totalprice").attr("value"))+parseFloat($(this).attr("value")));
    }
      else {

      $(this).removeClass("lib");
      $("#totalprice").attr("value",parseFloat($("#totalprice").attr("value"))-parseFloat($(this).attr("value")));
    }
    $(this).find("input").prop('checked', 1-$(this).find("input").prop('checked'));

  });

});

</script>

<title>SmartCart</title>
</head>
<body>


    <div class="black"></div>
    <img src="pic.jpg" class="viewport2">



<?php
if(isset($_POST['submit'])){
    echo "<font class='cart'>Order sent !</font>";
    $to = $_POST['email']; // this is your Email address
    $from ="email@example.com"; // this is the sender's Email address
    $subject = "Your Carrefour Order";
    $message =" wrote the following:" . "\n\n";

    $headers = "From:" . $from;
    //mail($to,$subject,$message,$headers);
    echo "Order sent. Thank you, come to the shop and collect your cart.";
    }
else
{
  echo "<font class='cart'>Your order is ready !</font>";
  echo "<form action='' method=post>";
$con = mysqli_connect("localhost","root","","shoplist");
if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM products";
$result=mysqli_query($con,$sql);
$k=0;
$total=0;
echo "<ul class=\"first\">";
while($row = mysqli_fetch_array($result)) {
  $k=$k+1;
  $category = $row['prod_category'];
  $name = $row['prod_name'];
  $price = $row['prod_price'];

  $popularity = $row['prod_popularity'];
  if(array_key_exists($k,$_GET))
    {
      $total=$total+$price;
      echo "<li><input type='checkbox' style='display:none' name=".$k." checked=on>".$name."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: ".$price."</li>"; // those we are sure of
}
  }
  echo "</ul>";
  echo "<br/><font class=\"suggestions\">Total price is: ".$total;
  echo "</font><br/><input type='email' class=\"mail\" name='email' placeholder='email' required><input class=\"done\" type='submit' name='submit'> </form>";
}
 ?>
