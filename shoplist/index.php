<html>
<head>
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<script src="script.js"></script>

<title>SmartCart</title>

<script>


</script>
<script>

function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
    console.log(li);
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
function checkTrue(event)
{
	event.target.childNodes[0].checked= 1-event.target.childNodes[0].checked;
}
</script>


</head>
<body>
<img src="vegetables.jpg" class="viewport">
<img src="logo.png" class="logo">


  <input type="text" class="filter1" id="myInput" onkeyup="myFunction()" placeholder="Search for products..">
  <form action="suggestions.php" method="GET">
  <div class="scroll">

      <ul id="myUL" name="categ" value="categ">
        <?php
            $con = mysqli_connect("localhost","root","","shoplist");
            if (mysqli_connect_errno())
              {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

            mysqli_set_charset($con,"utf8");
            $sql="SELECT * FROM products";
            $result=mysqli_query($con,$sql);

            $k =0;
            while($row = mysqli_fetch_array($result)) {
              $k=$k+1;
    $name = $row['prod_name'];
    $price = $row['prod_price'];
                echo "<li onclick='checkTrue(event)'><input type='checkbox' id=".$k." name=".$k." >".$name."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: ".$price."</li>";
            }
            // Associative array
          /*  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            printf ("%s (%s)\n",$row["Lastname"],$row["Age"]);*/


            ?>

</ul>

</div>

<div class="cheap_popularity">
  <ul>
<li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="cheap" >Cheap</li>
<li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="popularity" >Popularity</li>
</ul>

</div>

<input class="btn" type="submit" value="Get Reccomendations"></input>



    <div class="scroll3">

        <ul id="myUL">

      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="alcohol" >Alcohol</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="cheese">Cheese</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="charcuterie">Charcuterie</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="dessert">Dessert</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="drink">Drink</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="fruits">Fruits</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="fish">Fish</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="ingredients">Ingredients</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="nuts">Nuts</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="others">Others</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="pets">Pets</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="precooked">Pre-cooked</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="pasta">Pasta</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="sweet">Sweet</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="snacks">Snacks</a></li>
      <li onclick='checkTrue(event)'><input type='checkbox' id="checkbox" name="vegetables">Vegetables</a></li>
      </ul>
    </div>
</form>


</body>
</html>
