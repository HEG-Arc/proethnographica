
 <?php
	$o_config = caGetContactConfig();
	$va_errors = $this->getVar("errors");
	$vs_page_title = ($o_config->get("contact_page_title")) ? $o_config->get("contact_page_title") : _t("Contact");
	
?>
<div class="row"><div class="col-sm-12">
	<H1><?php print $vs_page_title; ?></H1>
</div></div>
