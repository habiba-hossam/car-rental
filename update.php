<?php include('finaldatabase.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Update Status</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&family=Rubik:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <script>
    function validate() {
      let x = document.forms["updateform"]["plate"].value;

      if (x == "") {
        alert("please fill the plate id field");
        return false;
      }

    }
  </script>
  <style>
    body {
      background-color: #2D4263;
    }
  </style>
</head>

<body>
  <div class="update">
    <h1>Update the satus of a car</h1>
    <form class="" name="updateform" action="#" onsubmit="return validate()" method="post">
      <label>Plate ID</label>
      <br>
      <input type="text" style="width:60%" id="plate" name="plate"><br><br>
      <label>Status</label>
      <select name="cars" id="cars">
        <option value="Active">Active</option>
        <option value="out_of_service">Out of service</option>
        <option value="Rented">Rented</option>
      </select>


      <br><br><br><br>

      <button type="submit" style="margin-right : 50px" class="" name="submit"><a class="indexa">Submit</a></button>
      <button type="button" class="" name="back"><a class="indexa" href="systemview.php">Back</a></button>
    </form>
  </div>

</body>

</html>