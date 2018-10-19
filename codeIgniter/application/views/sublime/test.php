<?php
	$nom = $this->Mindex->SELECT();
	foreach($nom as $i):
		echo $i->nomProduit;
	endforeach;
?>