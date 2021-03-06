<?php

class QRCodeController extends ActionController {

		protected $opo_config;		// plugin configuration file

public function __construct(&$po_request, &$po_response, $pa_view_paths=null) {
 			// Set view path for plugin views directory
 			if (!is_array($pa_view_paths)) { $pa_view_paths = array(); }
 			$pa_view_paths[] = __CA_APP_DIR__."/plugins/QrCodeMaker/views/".__CA_THEME__."/views";
 			
 			// Load plugin configuration file
 			$this->opo_config = Configuration::load(__CA_APP_DIR__.'/plugins/QrCodeMaker/conf/QrCodeMaker.conf');
 			
 			parent::__construct($po_request, $po_response, $pa_view_pQrCodeMaker);



		}

public function checkStatus() {
			return array(
				'description' => $this->getDescription(),
				'errors' => array(),
				'warnings' => array(),
				'available' => ((bool)$this->opo_config->get('enabled'))
			);
}


public function Index(){

$this->render("index2.php");

}

public function generate(){
    $fulltext=$_POST['qr_text'];
    $numbers = explode(",", $fulltext);
    $target_dir = "app/plugins/QrCodeMaker/views/qrcodes/"; 
   
$files = glob($target_dir.'/*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
} 

      for ($i = 0; $i < count($numbers); $i=$i+1) {
        $number = $numbers[$i];
        $file_name = "qr". $number .".png";      
	$file_name = $target_dir . $file_name;
        $qr = QRcode::png($number, $file_name, QR_ECLEVEL_H, 15);                   }
$this->render("generate_code.php");
}

public function SelectFiles(){
$this->render("selectfiles.php");}

public function upload(){
$this->render("upload.php");

}
}
