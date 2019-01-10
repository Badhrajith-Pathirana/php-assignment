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
        $city = $_POST["city"];
        $description = $_POST["desc"];
        // $imageName = $_FILES['image']['name'];
        // $imagePath = "upload/".$imageName;
        $arr['city'] = $city;
        $arr['desc'] = $description;
        // $arr['imageName'] = $imageName;
        $arr['lat'] = $_POST['lat'];
        $arr['lng'] = $_POST['lng'];
        echo json_encode(saveData($arr));
        // if(move_uploaded_file($_FILE['image']['tmp_name'],$imagePath)){
        //     echo json_encode(saveData($arr));
        // } else{
        //     echo "Image uploading failed";
        // }
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
?>