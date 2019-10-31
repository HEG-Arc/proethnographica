<?php

class QrCodemakerPlugin extends BaseApplicationPlugin {

		# -------------------------------------------------------
		public function __construct($ps_plugin_path) {
			$this->description = _t('Adds a "duplicate" menu listing all recently duplicated items and providing an easy way to create additional duplicates.');
			parent::__construct();
		}
		# -------------------------------------------------------
		/**
		 * Override checkStatus() to return true - the historyMenu plugin always initializes ok
		 */
		public function checkStatus() {
			return array(
				'description' => $this->getDescription(),
				'errors' => array(),
				'warnings' => array(),
				'available' => true
			);
		}
}
