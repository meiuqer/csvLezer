<!DOCTYPE html>
<html>
<head>
	 
	<meta charset="utf-8">
	<!-- IE Edge Meta Tag -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Minified CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-print-1.2.2/fh-3.1.2/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<title>CSV LEZER</title>
</head>
<body>
<div class="container kader">
	<h1>Uurroosters PCVO Limburg</h1>
	<section class="row">
		<div class="col-sm-7">
			<h2>Opleidingen</h2>
			<div class="btn-group btn-group-justified" role="group" data-toggle="buttons-checkbox">
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline left-border" type="button">Bouwen</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Computer</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Fotografie</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Graduaat</button>
	 			</div>
			</div>
			<div class="btn-group btn-group-justified" role="group" data-toggle="buttons-checkbox">
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline left-border" type="button">Groen</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Interieur</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Metaal</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Handel en administratie</button>
	 			</div>
			</div>
			<div class="btn-group btn-group-justified" role="group" data-toggle="buttons-checkbox">
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline left-border" type="button">Voeding</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Voertuigen</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Talen</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">TKO</button>
	 			</div>
			</div>
			<h2>Campussen</h2>
			<div class="btn-group btn-group-justified" role="group" data-toggle="buttons-checkbox">
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline left-border" type="button">Dilsen</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Hasselt</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Diepenbeek</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success-outline" type="button">Maasmechelen</button>
				</div>
			</div>
		</div>

	    <div class="btn-toolbar col-sm-5">
	    	<h2>Lesmomenten</h2>
			<div class="input-group btn-group" data-toggle="button">
				<span class="input-group-addon" id="basic-addon1">Maandag</span>
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="maandagvoormiddag" value="Voormiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="maandagnamiddag" value="Namiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="maandagavond" value="Avond">
			</div>
			<br>
			<br>
			<div class="input-group btn-group" data-toggle="button">
				<span class="input-group-addon" id="basic-addon1">Dinsdag</span>
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="dinsdagvoormiddag" value="Voormiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="dinsdagnamiddag" value="Namiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="dinsdagavond" value="Avond">
			</div>
			<br>
			<br>
			<div class="input-group btn-group" data-toggle="button">
				<span class="input-group-addon" id="basic-addon1">Woensdag</span>
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="woensdagvoormiddag" value="Voormiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="woensdagnamiddag" value="Namiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="woensdagavond" value="Avond">
			</div>
			<br>
			<br>
			<div class="input-group btn-group" data-toggle="button">
				<span class="input-group-addon" id="basic-addon1">Donderdag</span>
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="donderdagvoormiddag" value="Voormiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="donderdagnamiddag" value="Namiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="donderdagavond" value="Avond">
			</div>
			<br>
			<br>
			<div class="input-group btn-group" data-toggle="button">
				<span class="input-group-addon" id="basic-addon1">Vrijdag</span>
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="vrijdagvoormiddag" value="Voormiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="vrijdagnamiddag" value="Namiddag">
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="vrijdagavond" value="Avond">
			</div>
			<br>
			<br>
			<div class="input-group btn-group" data-toggle="button">
				<span class="input-group-addon" id="basic-addon1">Zaterdag</span>
				<input type="button" class="btn btn-sm btn-success-outline form-control left-border" name="zaterdagvoormiddag" value="Voormiddag">
			</div>
			</div>
	</section>
	<section class="row tweedeRij">
		<div class="col-xs-12">
			<div class="btn-group btn-group-justified" role="group">
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-primary" type="button" id="resetButton">Toon alles</button>
				</div>
				<div class="btn-group" role="group">
					<button class="btn btn-sm btn-success" type="button" id="filterButton">Filter</button>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="container">
	<div class="row">
		<table id="table" class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>CursusID</td>
					<td>VestCode</td>
					<td>Nr admgrp</td>
					<td>Opl</td>
					<td>Cursustype</td>
					<td>Code</td>
					<td>Naam</td>
					<td>Uitwisselingscodes</td>
					<td>Sem.</td>
					<td>Begindatum</td>
					<td>Einddatum</td>
					<td>Registratiedatum</td>
					<td>AtlLT</td>
					<td>AtlContact</td>
					<td>AtlIndArbeid</td>
					<td>AtlDelib</td>
					<td>Lesdagen</td>
					<td>Lokaal</td>
					<td>Lesgever</td>
					<td>Atl 3'den</td>
					<td>Atl HvN</td>
					<td>IC</td>
					<td>HIC</td>
					<td>Max</td>
					<td>IG</td>
					<td>Kost</td>
					<td>Fin. bron</td>
					<td>Minprocent</td>
					<td>Opmerking</td>
					<td>Delibdatum1</td>
					<td>Delibdatum2</td>
					<td>Boekjaar1</td>
					<td>Boekjaar2</td>
					<td></td>
					<td></td>
					<td>Gecreëerd</td>
					<td>Coördinatoren</td>
					<td>Organisatievorm</td>
					<td>Nr eenheden</td>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td>CursusID</td>
					<td>VestCode</td>
					<td>Nr admgrp</td>
					<td>Opl</td>
					<td>Cursustype</td>
					<td>Code</td>
					<td>Naam</td>
					<td>Uitwisselingscodes</td>
					<td>Sem.</td>
					<td>Begindatum</td>
					<td>Einddatum</td>
					<td>Registratiedatum</td>
					<td>AtlLT</td>
					<td>AtlContact</td>
					<td>AtlIndArbeid</td>
					<td>AtlDelib</td>
					<td>Lesdagen</td>
					<td>Lokaal</td>
					<td>Lesgever</td>
					<td>Atl 3'den</td>
					<td>Atl HvN</td>
					<td>IC</td>
					<td>HIC</td>
					<td>Max</td>
					<td>IG</td>
					<td>Kost</td>
					<td>Fin. bron</td>
					<td>Minprocent</td>
					<td>Opmerking</td>
					<td>Delibdatum1</td>
					<td>Delibdatum2</td>
					<td>Boekjaar1</td>
					<td>Boekjaar2</td>
					<td></td>
					<td></td>
					<td>Gecreëerd</td>
					<td>Coördinatoren</td>
					<td>Organisatievorm</td>
					<td>Nr eenheden</td>
				</tr>
			</tfoot>
			<tbody>	

		<?php
		ini_set('auto_detect_line_endings', true);
		$f = fopen("csv/informatExport5.csv", "r");
		while (($line = fgetcsv($f)) !== false) {
		        echo "<tr>";
		        foreach ($line as $cell) {
		    	    echo "<td>" . htmlspecialchars($cell) . "</td>";
		        }
		        echo "</tr>\n";
		}
		fclose($f);
		echo "\n</tbody></table>";
		?>	
	</div>
</div>

<!-- FOOTER SECTION - Before closing </body> tag -->
<!-- jQuery -->
<!-- Minified JavaScript -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-print-1.2.2/fh-3.1.2/datatables.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>