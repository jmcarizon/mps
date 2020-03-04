<?php
  if (isset($_POST['movie_add'])) {
 
    $title = $_POST['title'];
    $release_year = $_POST['release_year'];
    $genre = $_POST['genre'];
    $status = $_POST['status'];
    $rent_cost = $_POST['rent_cost'];
    $purchase_cost = $_POST['purchase_cost'];
 
    $query = $connection->prepare("SELECT * FROM movies WHERE TITLE=:title");
    $query->bindParam("title", $title, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The movie is already added!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO movies(TITLE,RELEASE_YEAR,GENRE,STATUS,RENT_COST,PURCHASE_COST) VALUES (:title,:release_year,:genre,:status,:rent_cost,:purchase_cost)");
        $query->bindParam("title", $title, PDO::PARAM_STR);
        $query->bindParam("release_year", $release_year, PDO::PARAM_STR);
        $query->bindParam("genre", $genre, PDO::PARAM_STR);
        $query->bindParam("status", $status, PDO::PARAM_STR);
        $query->bindParam("rent_cost", $rent_cost, PDO::PARAM_STR);
        $query->bindParam("purchase_cost", $purchase_cost, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Movie added successfully!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
  }
?>

<div class="modalPop modal_addMovie">
  <div class="modal_wrapper">
    <div class="modal_header">
      <span class="modal_title">Add Movie</span>
      <a href="javascript:;" class="modal_close">+</a>
    </div>
    <div class="modal_body">
      <form method="post" action="" name="movieadd-form">
        <div class="form-element">
            <label>Title</label>
            <input type="text" name="title" required />
        </div>
        <div class="form-element">
            <label>Year of Release</label>
            <input type="text" name="release_year" required />
        </div>
        <div class="form-element">
            <label>Genre</label>
            <input type="text" name="genre" required />
        </div>
        <div class="form-element">
            <label>Status</label>
            <input type="text" name="status" required />
        </div>
        <div class="form-element">
            <label>Rental Cost</label>
            <input type="text" name="rent_cost" required />
        </div>
        <div class="form-element">
            <label>Purchase Cost</label>
            <input type="text" name="purchase_cost" required />
        </div>
        <button type="submit" name="movie_add" value="movie_add" class="btn_custom">Add Movie</button>
    </form>
    </div>
  </div>
</div>