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

$this->render("create_qrcode.php");

}

}
