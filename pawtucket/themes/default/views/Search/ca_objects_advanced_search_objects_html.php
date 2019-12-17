
<div class="row">
	<div class="col-sm-8 " style='border-right:1px solid #ddd;'>
		<h1>Recherche avancée d'objets</h1>

<?php			
print "<p>Vous pouvez procéder à une recherche avancée sur les termes que vous saisirez dans les champs suivants.</p>";
?>

{{{form}}}

<div class='advancedContainer'>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Recherchez n'importe quel terme dans la base de données.">Mot clé</span>
			{{{_fulltext%width=200px&height=1}}}
		</div>			
	</div>		
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Limitez votre recherche aux intitulés d'objets.">Intitulé d'objet</span>
			{{{ca_objects.preferred_labels.name%width=220px}}}
		</div>
	</div>
<div class='row'>

		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Recherchez des objets amenés par un missionnaire ou explorateur">Collectionneur</span>
			{{{ca_objects.fieldCollector%width=220px}}}
		</div>
	</div>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Recherchez des objets en provenance d'un certain endroit.">Provenance </span>
			{{{ca_objects.written_place%width=200px}}}
		</div>
	</div>
	<br style="clear: both;"/>
	<div class='advancedFormSubmit'>
		<span class='btn btn-default'>{{{reset%label=Annuler}}}</span>
		<span class='btn btn-default' style="margin-left: 20px;">{{{submit%label=Rechercher}}}</span>
	</div>
</div>	

{{{/form}}}

	</div>

	<div class="col-sm-4" >
		<h1>Recherche simple</h1>
		<p>Vous pouvez aussi procéder à une recherche simple en saisissant un mot clé dans la barre de recherche en haut à droite.</p>
	</div><!-- end col -->

</div><!-- end row -->

<script>
	jQuery(document).ready(function() {
		$('.advancedSearchField .formLabel').popover(); 
	});
	
</script>
