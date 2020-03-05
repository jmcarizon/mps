<?php
require_once ("class/DBController.php");
require_once ("class/Movies.php");

$db_handle = new DBController();

$action = "";
if (! empty($_GET["action"])) {
    $action = $_GET["action"];
}
switch ($action) {
    // case "attendance-add":
    //     if (isset($_POST['add'])) {
    //         $attendance = new Attendance();
            
    //         $attendance_timestamp = strtotime($_POST["attendance_date"]);
    //         $attendance_date = date("Y-m-d", $attendance_timestamp);
            
    //         if(!empty($_POST["student_id"])) {
    //             $attendance->deleteAttendanceByDate($attendance_date);
    //             foreach($_POST["student_id"] as $k=> $student_id) {
    //                 $present = 0;
    //                 $absent = 0;
                    
    //                 if($_POST["attendance-$student_id"] == "present") {
    //                     $present = 1;
    //                 }
    //                 else if($_POST["attendance-$student_id"] == "absent") {
    //                     $absent = 1;
    //                 }
                    
    //                 $attendance->addAttendance($attendance_date, $student_id, $present, $absent);
    //             }
    //         }
    //         header("Location: index.php?action=attendance");
    //     }
    //     $student = new Student();
    //     $studentResult = $student->getAllStudent();
    //     require_once "web/attendance-add.php";
    //     break;
    
    // case "attendance-edit":
    //     $attendance_date = $_GET["date"];
    //     $attendance = new Attendance();
    //     if (isset($_POST['add'])) {
    //         $attendance->deleteAttendanceByDate($attendance_date);
    //         if(!empty($_POST["student_id"])) {
    //             foreach($_POST["student_id"] as $k=> $student_id) {
    //                 $present = 0;
    //                 $absent = 0;
                    
    //                 if($_POST["attendance-$student_id"] == "present") {
    //                     $present = 1;
    //                 }
    //                 else if($_POST["attendance-$student_id"] == "absent") {
    //                     $absent = 1;
    //                 }
                    
    //                 $attendance->addAttendance($attendance_date, $student_id, $present, $absent);
    //             }
    //         }
    //         header("Location: index.php?action=attendance");
    //     }
        
    //     $result = $attendance->getAttendanceByDate($attendance_date);
        
    //     $student = new Student();
    //     $studentResult = $student->getAllStudent();
    //     require_once "web/attendance-edit.php";
    //     break;
    
    // case "attendance-delete":
    //     $attendance_date = $_GET["date"];
    //     $attendance = new Attendance();
    //     $attendance->deleteAttendanceByDate($attendance_date);
        
    //     $result = $attendance->getAttendance();
    //     require_once "web/attendance.php";
    //     break;
    
    // case "attendance":
    //     $attendance = new Attendance();
    //     $result = $attendance->getAttendance();
    //     require_once "web/attendance.php";
    //     break;

    case "movie-add":
        if (isset($_POST['add'])) {
            $title = $_POST['title'];
            $release_year = $_POST['release_year'];
            $genre = $_POST['genre'];
            $status = $_POST['status'];
            $cost_rent = $_POST['cost_rent'];
            $cost_purchase = $_POST['cost_purchase'];
            
            $movie = new Movies();
            $insertId = $movie->addMovie($title, $release_year, $genre, $status, $cost_rent, $cost_purchase);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Problem in Adding New Record",
                    "type" => "error"
                );
            } else {
                header("Location: index.php");
            }
        }
        require_once "web/movie-add.php";
        break;
    
    case "movie-edit":
        $movie_id = $_GET["id"];
        $movie = new Movies();
        
        if (isset($_POST['add'])) {
            $title = $_POST['title'];
            $release_year = $_POST['release_year'];
            $genre = $_POST['genre'];
            $status = $_POST['status'];
            $cost_rent = $_POST['cost_rent'];
            $cost_purchase = $_POST['cost_purchase'];
            
            $movie->editMovie($title, $release_year, $genre, $status, $cost_rent, $cost_purchase, $movie_id);
            
            header("Location: index.php");
        }
        
        $result = $movie->getMovieById($movie_id);
        require_once "web/movie-edit.php";
        break;
    
    case "movie-delete":
        $movie_id = $_GET["id"];
        $movie = new Movies();
        
        $movie->deleteMovie($movie_id);
        
        $result = $movie->getAllMovie();
        require_once "web/movies.php";
        break;

    case "movie-info":
        $movie_id = $_GET["id"];
        $movie = new Movies();
        
        $result = $movie->getMovieById($movie_id);
        require_once "web/movies-info.php";
        break;

    case "movie-rent":
        $movie_id = $_GET["id"];
        $movie = new Movies();
        
        $result = $movie->getMovieById($movie_id);
        require_once "web/movies-info.php";
        break;
    
    default:
        $movie = new Movies();
        $result = $movie->getAllMovie();
        require_once "web/movies.php";
        break;
}
?>