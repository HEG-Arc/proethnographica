<?php
require __DIR__ . "/vendor/autoload.php";

$target_dir = "import/qr_photos/";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$qrCodeText = NULL;

// Count how many files have been uploaded
$arr_length = count($_FILES["filesToUpload"]["name"]);

for($i=0; $i<$arr_length; $i++){
    $target_file = $target_dir . basename($_FILES["filesToUpload"]["name"][$i]);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filesToUpload"]["tmp_name"][$i]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }
}

//Check if image is a QRCode
    $qrcode = new Zxing\QrReader($_FILES["filesToUpload"]["tmp_name"][$i]);
    $text = $qrcode->text();
    if ($text == NULL){
        $isQRCode = false;
    }
    else {$isQRCode = true;
    $qrCodeText = $text;
    }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Les images n'ont pas pu être préparées à l'import.";
// if everything is ok, try to upload file
} else {
    if ($isQRCode == false){
   $target_file = $target_dir . $qrCodeText . '.' . basename($_FILES["filesToUpload"]["name"][$i]);
    if (move_uploaded_file($_FILES["filesToUpload"]["tmp_name"][$i], $target_file)) {  
        echo "L'image ". basename( $_FILES["filesToUpload"]["name"][$i]). " est prête à être importée.<br>";
    } else {
        echo "L'image n'a pas pu être préparée pour l'import.";
    }} 

}}
?>

<html>
<body>
<div id="wrapper"> 
	 <a href="/../index.php/batch/MediaImport/Index" class="form-button 1576082343">
		<h4>Accédez directement à la page d'import</h4>

		<span class="form-button">
			<i class="caIcon fa fa-check-circle-o " style="font-size: 30px;"></i> 
			Accédez directement à la page d'import
		</span>
	</a>
</div>
</body>
</html>

