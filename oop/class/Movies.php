<?php 
require_once ("class/DBController.php");
class Movies {
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new DBController();
    }
    
    function addMovie($title, $release_year, $genre, $status, $cost_rent, $cost_purchase) {
        $query = "INSERT INTO tbl_movies (title,release_year,genre,status,cost_rent,cost_purchase) VALUES (?, ?, ?, ?, ?, ?)";
        $paramType = "sissis";
        $paramValue = array(
            $title,
            $release_year,
            $genre,
            $status,
            $cost_rent,
            $cost_purchase
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
    
    function editMovie($title, $release_year, $genre, $status, $cost_rent, $cost_purchase, $movie_id) {
        $query = "UPDATE tbl_movies SET title = ?,release_year = ?,genre = ?,status = ?,cost_rent = ?,cost_purchase = ? WHERE id = ?";
        $paramType = "sississ";
        $paramValue = array(
          $title,
          $release_year,
          $genre,
          $status,
          $cost_rent,
          $cost_purchase,
          $movie_id
        );
        
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function deleteMovie($movie_id) {
        $query = "DELETE FROM tbl_movies WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $movie_id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function getMovieById($movie_id) {
        $query = "SELECT * FROM tbl_movies WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $movie_id
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }
    
    function getAllMovie() {
        $sql = "SELECT * FROM tbl_movies ORDER BY id";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
}
?>