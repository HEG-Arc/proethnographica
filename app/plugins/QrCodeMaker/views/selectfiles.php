<!DOCTYPE html>

<html>
<body>

<div id="wrapper">
    <form id="form2" action="upload" method="post" enctype="multipart/form-data">
 	<h1>Sélectionnez les images, avec les QR Codes, que vous souhaitez préparer pour l'import :</h1>
    	<input type="file" name="filesToUpload[]" multiple="multiple" id="filesToUpload">
	<a href="javascript:;" onclick="document.getElementById('form2').submit();" class="form-button 1576082343">
		<span class="form-button">
			<i class="caIcon fa fa-check-circle-o " style="font-size: 30px;"></i> 
			Valider
		</span>
	</a>
</form>
</div>

</body>
</html>

