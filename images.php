<?php
if($_POST){
     $tarih=$_POST["tarih"];
            $baslik=$_POST["baslik"];
            $içerik=$_POST["içerik"];

$conn = mysqli_connect("localhost", "root", "", "yorum-ajax");
if($tarih !="" and $baslik !="" and $içerik !=""){	
if(isset($_FILES['fileImg']['name'])){
	
  global $conn;

  $imageName = $_FILES["fileImg"]["name"];
  $tmpName = $_FILES["fileImg"]["tmp_name"];

  // Image extension validation
  $validImageExtension = ['jpg', 'jpeg', 'png','svg'];
  $imageExtension = explode('.', $imageName);

  $name = $imageExtension[0];
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validImageExtension)){
    echo "Invalid Extension";
    exit;
  }
  else{
    $newImageName = $name . "-" . uniqid(); // Generate new image name
    $newImageName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, 'upload/' . $newImageName);
    $query = "INSERT INTO tb_upload (image) VALUES ('$newImageName')";
    mysqli_query($conn, $query);
    echo "Success";
    exit;
  }
}
} else{
	echo "Lütfen Bütün Alanları Doldurunuz!";
}
}
?>
