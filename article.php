<?php
header("Content-type: application/json");
$method = $_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        $action = $_GET["action"];
        switch ($action){
            case "articles":
                echo json_encode(getData());
                break;
            case "selected":
                echo json_encode(getApprovedMarkers());
                break;
        }
        break;
    case "POST":
        $article = [];
        $article["title"] = $_POST["title"];
        $article["paragraph"] = $_POST["paragraph"];
        echo json_encode(addArticle($article));
        break;
}

function getData() {
    $i = 0;
    $articles = [];
    $db = mysqli_connect("localhost","root","","gtf");
    $query = "select * from articles";
    $data= mysqli_query($db,$query);
     while($fetch=mysqli_fetch_assoc($data)) {
        $articles[$i]["articleId"] = $fetch["articleId"];
        $articles[$i]["title"] = $fetch["title"];
        $articles[$i]["paragraph"] = $fetch["paragraph"];
        $i++;
     }
     return $markers;
}

function addArticle($data) {
    $query = "insert into article (title, paragraph) values (?,?)";
    $db = mysqli_connect("localhost","root","","gtf");
    $stmt = $db->prepare($query);
    $stmt->bind_param("ss",$title, $paragraph);
    $title = $data["title"];
    $paragraph = $data["paragraph"];
    $stmt->execute();
    if($db->error) {
        return "Err".$db->error;
    }
    return true;
}
?>