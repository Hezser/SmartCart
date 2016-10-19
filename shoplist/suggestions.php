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
<font class="cart">This is your Cart right now...</font>


<?php
$fr = array();
$fr["fruits"]=0;
$fr["vegetables"]=0;
$fr["desserts"]=0;
$fr["fish"]=0;
$fr["others"]=0;
$fr["charcuterie"]=0;
$fr["sweets"]=0;
$fr["precooked"]=0;
$fr["nuts"]=0;
$fr["ingredients"]=0;
$fr["pasta"]=0;
$fr["drinks"]=0;
$fr["alcohol"]=0;
$fr["snacks"]=0;
$fr["pets"]=0;
$fr["cheese"]=0;

$avg = array();
$avg["fruits"]=4.49;
$avg["vegetables"]=2.2;
$avg["desserts"]=4.9;
$avg["fish"]=3.5;
$avg["others"]=11.2;
$avg["charcuterie"]=9.0;
$avg["sweets"]=4.2;
$avg["precooked"]=6.2;
$avg["nuts"]=2;
$avg["ingredients"]=1.9;
$avg["pasta"]=1;
$avg["drinks"]=8.5;
$avg["alcohol"]=12.6;
$avg["snacks"]=2.2;
$avg["pets"]=3;
$avg["cheese"]=3.5;

$avgpop = array();
$avgpop["fruits"]=1.2;
$avgpop["vegetables"]=1;
$avgpop["desserts"]=1;
$avgpop["fish"]=2;
$avgpop["others"]=2.4;
$avgpop["charcuterie"]=2.2;
$avgpop["sweets"]=1;
$avgpop["precooked"]=1.2;
$avgpop["nuts"]=1.5;
$avgpop["ingredients"]=1.3;
$avgpop["pasta"]=1;
$avgpop["drinks"]=2.11;
$avgpop["alcohol"]=1.5;
$avgpop["snacks"]=1.5;
$avgpop["pets"]=1.5;
$avgpop["cheese"]=1.5;

$itemOk = array();
for ($i = 0; $i < 2000; $i++)
{
    array_push($itemOk, (int)0);
    //or $array[] = $some_data; for single items.
}
$strings=array(
  1=>"fruits",
  2=>"vegetables",
  3=>"desserts",
  4=>"fish",
  5=>"others",
  6=>"charcuterie",
  7=>"sweets",
  8=>"precooked",
  9=>"nuts",
  10=>"ingredients",
  11=>"pasta",
  12=>"drinks",
  13=>"alcohol",
  14=>"pets",
  15=>"cheese"
);


$con = mysqli_connect("localhost","root","","shoplist");
if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM products";
$result=mysqli_query($con,$sql);
foreach ($_GET as $key => $value) {
    if(gettype($key)=="string")
    {

    $fr[$key]=1;

    }
    else {
      $itemOk[$key] = 1;
    }
}
mysqli_set_charset($con,"utf8");
  $sql="SELECT * FROM products";
  $result=mysqli_query($con,$sql);

  $k=0;
  $total=0;
  echo "<form action='final.php' method='GET'><ul class=\"first\">";
  while($row = mysqli_fetch_array($result)) {
    $k=$k+1;
    $category = $row['prod_category'];
    $name = $row['prod_name'];
    $price = $row['prod_price'];

    $popularity = $row['prod_popularity'];
    if($itemOk[$k]==1)
      {
        $total=$total+$price;
        echo "<li><input type='checkbox' style='display:none' name=".$k." checked=on>".$name."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: ".$price."</li>"; // those we are sure of
      }
    }

    echo "</ul><p class=\"suggestions\">Suggestions to complete your cart ...</p><ul class=\"second\">";
    $k=0;
    $result=mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result)) {
    $k=$k+1;
    $category = $row['prod_category'];
    $name = $row['prod_name'];
    $price = $row['prod_price'];
    $popularity = $row['prod_popularity'];
    if($itemOk[$k]==0) {
        foreach ($strings as $key => $value)
          if($fr[$value] && strpos($category, $value) !== false)
          {

            if(array_key_exists("cheap",$_GET) && array_key_exists("popularity",$_GET))
              {
                if( $price<=$avg[$value] ||  $popularity>=$avgpop[$value])
                  echo "<li value=".$price."><input type='checkbox' id=".$k." name=".$k." >".$name."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: ".$price."</li>";
              }
            else  if(array_key_exists("popularity",$_GET))
              {
                  if( $popularity>=$avgpop[$value])
                      echo "<li value=".$price."><input type='checkbox' id=".$k." name=".$k." >".$name."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: ".$price."</li>";
              }
            else  if(array_key_exists("cheap",$_GET))
              {
                if( $price<=$avg[$value])
                    echo "<li value=".$price."><input type='checkbox' id=".$k." name=".$k." >".$name."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: ".$price."</li>";
              }
            else {
                echo "<li value=".$price."><input type='checkbox' id=".$k." name=".$k." >".$name."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: ".$price."</li>";
            }

          }
    }
  }
  echo "</ul><center>
  <input type=text readonly value=".$total." id='totalprice'>
  <input class='submt' type='submit'></center>
  </form>";

?>

</body>
</html>
