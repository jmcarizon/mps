<?php
include('config.php');
session_start();

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
 
include('includes/header.php');
?>

<body>
  <?php
    $query = $connection->prepare("SELECT * FROM movies");
    $query->execute();
    $rs_post = $query->fetchAll();
    foreach ($rs_post as $row) {
      echo '<form method="get" action="" name="movieupdate-form">';
        echo '<div class="form-element">';
          echo '<label>Title</label>';
          echo '<input type="text" name="title" value="' . $row['title'] . '"/>';
          echo '<label>Year of Release</label>';
          echo '<input type="text" name="release_year" value="' . $row['release_year'] . '"/>';
          echo '<label>Genre</label>';
          echo '<input type="text" name="genre" value="' . $row['genre'] . '"/>';
          echo '<label>Status</label>';
          echo '<input type="text" name="status" value="' . $row['status'] . '"/>';
          echo '<label>Rental Cost</label>';
          echo '<input type="text" name="rent_cost" value="' . $row['rent_cost'] . '"/>';
          echo '<label>Purchase Cost</label>';
          echo '<input type="text" name="purchase_cost" value="' . $row['purchase_cost'] . '"/>';
        echo '</div>';
        echo '<button type="submit" name="movie_update' . $row['id'] . '" value="movie_update">Update Movie</button>';
      echo '</form>';
    }
  ?>
</body>
<?php
   include 'includes/footer.php';
?>