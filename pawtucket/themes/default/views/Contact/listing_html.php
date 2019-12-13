
 <?php
	$o_config = caGetContactConfig();
	$va_errors = $this->getVar("errors");
	MetaTagManager::setWindowTitle($this->request->config->get("app_display_name").": Contact");
	$vs_page_title = ($o_config->get("contact_page_title")) ? $o_config->get("contact_page_title") : _t("Contact");
	
?>
<div class="row"><div class="col-sm-12">
	<H1><?php print $vs_page_title; ?></H1>

			<h3>Contactez-nous</h3>

				<h6>&nbsp;</h6>	
				<address>Pro Ethnographica<br>Rue<br>	NPA, Ville</address>
				<address>Personne de contact<br><span class="info">Téléphone</span> 212 222.2222<br><span class="info">Email</span> <a href="#">info@domain.ch</a></address>



</div></div>
