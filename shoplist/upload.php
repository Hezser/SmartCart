<?php
    $con = mysqli_connect("localhost","root","","shoplist");
    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }





mysqli_set_charset($con,"utf8");

  $jsondata = file_get_contents("test.json");
  //echo $jsondata;
  $data=json_decode($jsondata,true);

  foreach($data["items"] as $prod)
  {
    /*echo($prod["desc"]);
    echo "</br>";*/
      $result = mysqli_query($con,"SELECT * FROM products WHERE prod_name ='".$prod["desc"]."'");
      if(mysqli_num_rows($result)==0) {
        $sql = "INSERT INTO products (prod_id, prod_name, prod_price,prod_popularity,prod_category)
        VALUES (0,'" .$prod['desc']. "', " .$prod['net_am']. ", " .$prod['n_unit']. ",0 )";
                  if (mysqli_query($con, $sql)) {
                          echo "New record created successfully";
                      } else {
                          echo "Error: " . $sql . "<br>" . mysqli_error($con);
                      }
      } else {
        $getPopularity = mysqli_fetch_assoc(mysqli_query($con, "SELECT prod_popularity FROM products WHERE prod_name = '".$prod['desc']."'"));
        $userP = $getPopularity['prod_popularity'];
        $userP = $userP + $prod['n_unit'];
        $sql = "UPDATE products SET prod_popularity=".$userP." WHERE prod_name='".$prod['desc']."'";
        mysqli_query($con, $sql);
      }
  }


?>
