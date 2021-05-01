<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Falahaar</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{% static "css/style.css" %}"/>
    <link rel="stylesheet" href="{% static "fontawesome/css/fontawesome.min.css" %}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!--MenuBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Health</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{%url 'firstapp:index'%}">Home </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="{%url 'firstapp:about' %}">About-Us </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="#">Doctors </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="{% url 'firstapp:services'%}">Services</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="#">Tests </a>
            </li>
        </ul>
    </div>
</nav>
<!--MenuBar-->

<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <h1 class="mb-1">Falahaar</h1>
    <h3 class="mb-5">
      <em>Flavours in you favor</em>
    </h3>
    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
  </div>
  <div class="overlay"></div>
</header>
<!-- Header -->

<!--Menu-->

  <table>
    <tr>
      <th>Id</th>
      <th>Item Name</th>
      <th>Category</th>
      <th>Price</th>
    </tr>
    <?php

      $server="localhost";
      $username="root";
      $password="1234";
      $database="falahaar";

      $conn=mysqli_connect($server,$username,$password,$database);

      if(!$conn)
      {
        die("Connection Failed:".$conn->connect_error);
      }
      echo "Succcesss!!"

      $sql = "SELECT id,item,category,price from menu ";
      $result = $conn->query($sql);

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          //echo "<tr><td>" .$row["id"] ."</tr></td>" .$row["item"] ."</tr></td>".$row["category"]."</tr></td>".$row["price"]."</tr></td>";
          echo "id:".$row["id"]. "-ITEM_NAME" .$row["item"]."Price".$row["Price"]."<br>";
        }
        echo "</table>";
      }
      else{
        echo "0 result";
      }
      $conn->close;
    ?>
  </table>

<!--Menu-->

</body>
</html>
