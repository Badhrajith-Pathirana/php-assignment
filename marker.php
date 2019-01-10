<?php
header("Content-type: application/json",true);
$method = $_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        $action = $_GET["action"];
        switch ($action){
            case "markers":
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


 function getData(){
     $i=0;
     $markers=[];
     $query = "select * from locations";
     $db= mysqli_connect('localhost','root','','gtf');
     $data= mysqli_query($db,$query);
     while($fetch=mysqli_fetch_assoc($data)) {
        $markers[$i]['locID'] = $fetch['locID'];
        $markers[$i]['lat'] = $fetch['lat'];
        $markers[$i]['lng'] = $fetch['lng'];
        $markers[$i]['description'] = $fetch['description'];
        $markers[$i]['loc_status'] = $fetch['loc_status'];
        $i++;
     }
     return $markers;

 }

 function saveData($data){
    $db= mysqli_connect('localhost','root','','gtf');
    $query= "insert into locations (lat,lng,description,imagePath,loc_status) values(?,?,?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ddssi",$lat,$lng,$desc,$imgPath,$loc_status);

    $lat = $data['lat'];
    $lng = $data['lng'];
    $desc = $data['desc'];
    $imgPath = "ffff";
    $loc_status = 0;
    $stmt->execute();
    if($db->error) {
        return $db->error;
    }
    $stmt->close();
    $db->close();
    return true;

 }

 function getMarker($id) {
    $db= mysqli_connect('localhost','root','','gtf');
    $query= "select * from locations where locID=?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("d",$locId);
    $locId = $id;
    $data = $stmt->executeQuery();

    if($db->error) {
        return $db->error;
    }
    while($fetch=mysqli_fetch_assoc($data)) {
        $markers['locID'] = $fetch['locID'];
        $markers['lat'] = $fetch['lat'];
        $markers['lng'] = $fetch['lng'];
        $markers['description'] = $fetch['description'];
        $markers['loc_status'] = $fetch['loc_status'];
    
     }

    $stmt->close();
    $db->close();
    return $markers;
 }

 function getApprovedMarkers() {
    $i=0;
    $markers=[];
    $query = "select * from locations where ";
    $db= mysqli_connect('localhost','root','','gtf');
    $data= mysqli_query($db,$query);
    while($fetch=mysqli_fetch_assoc($data)) {
       $markers[$i]['locID'] = $fetch['locID'];
       $markers[$i]['lat'] = $fetch['lat'];
       $markers[$i]['lng'] = $fetch['lng'];
       $markers[$i]['description'] = $fetch['description'];
       $markers[$i]['loc_status'] = $fetch['loc_status'];
       $i++;
    }
    return $markers;
 }
?>