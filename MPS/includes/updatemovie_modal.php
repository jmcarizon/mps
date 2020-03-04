<?php
$query = $connection->prepare("SELECT * FROM movies");
$query->execute();
$rs_post = $query->fetchAll();

foreach ($rs_post as $row) {

  if (isset($_GET['movie_update' . $row['id']])) {
 
      $id = $row['id'];
      $title = $_GET['title'];
      $release_year = $_GET['release_year'];
      $genre = $_GET['genre'];
      $status = $_GET['status'];
      $rent_cost = $_GET['rent_cost'];
      $purchase_cost = $_GET['purchase_cost'];
  
      $query = $connection->prepare("SELECT * FROM movies");
      $query->execute();
  
      if ($query) {
          $query = $connection->prepare("UPDATE movies SET TITLE='$title',RELEASE_YEAR='$release_year',GENRE='$genre',STATUS='$status',RENT_COST='$rent_cost',PURCHASE_COST='$purchase_cost' WHERE id='$id'");
          $query->bindParam("title", $title, PDO::PARAM_STR);
          $query->bindParam("release_year", $release_year, PDO::PARAM_STR);
          $query->bindParam("genre", $genre, PDO::PARAM_STR);
          $query->bindParam("status", $status, PDO::PARAM_STR);
          $query->bindParam("rent_cost", $rent_cost, PDO::PARAM_STR);
          $query->bindParam("purchase_cost", $purchase_cost, PDO::PARAM_STR);
          $result = $query->execute();
  
          if ($result) {
              echo '<p class="success">Movie updated successfully!</p>';
          } else {
              echo '<p class="error">Something went wrong!</p>';
          }
      }
  }

}
?>