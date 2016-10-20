$(document).ready( function () {

	var filterElementen = [];

	// reset button
	$('#resetButton').on('click', function() {
		// zet de buttons uit
		$('.btn-group .btn-group button').removeClass('active');
		$('.btn-toolbar .btn-group input').removeClass('active');
		// maak array terug leeg
		filterElementen = [];
		// deze var moet gemaakt worden om te zoeken in datatable
		var searchableTable = $('#table').DataTable();
		// zoek naar lege array en draw() hem. dus toon alles opnieuw.
		searchableTable.search(filterElementen).draw();
	});

	// filter button
	$('#filterButton').on('click', function() {
		// deze var moet gemaakt worden om te zoeken in datatable
		var searchableTable = $('#table').DataTable();
		// we maken een var conform de data in de table, zelfde format
		var readabelFilterElementen = "";
		// loop daar array en plaats ze achter elkaar met een spatie tussen
		for(var i = 0; i < filterElementen.length; i++){ 
			 readabelFilterElementen = readabelFilterElementen + " " + filterElementen[i];
		}
		// zoek en draw()
		console.log(readabelFilterElementen);
		searchableTable.search(readabelFilterElementen).draw();
	});

	// filter elementen
	// opleiding en campus knoppen
	$('.col-sm-7 .btn-group .btn-group button').on('click', function(){
		// als de buttons aan staan 
		if($(this).hasClass('active')) {
			// zoek de plaats waar de naam van button staat in de array
			var index = filterElementen.indexOf($(this).text());
			// verwijder element op die plaats
			filterElementen.splice(index, 1);
		}
		// als de buttons uitstaan
		else {
			filterElementen.push($(this).text());
		}
	});
	// tijdstippen knoppen
	$('.btn-toolbar .btn-group input').on('click', function(){
		// als de buttons aan staan 
		if($(this).hasClass('active')) {
			// zoek de plaats waar de naam van button staat in de array
			var index = filterElementen.indexOf($(this).attr("name"));
			// verwijder element op die plaats
			filterElementen.splice(index, 1);
		}
		// als de buttons uitstaan
		else {
			filterElementen.push($(this).attr("name"));
		}
	});


	$('#table').DataTable( {
		"columnDefs": [
			{
				"targets": [0],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [2],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [4],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [5],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [7],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [11],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [12],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [13],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [14],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [15],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [19],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [20],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [21],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [22],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [23],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [25],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [26],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [27],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [28],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [29],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [30],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [31],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [32],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [33],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [34],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [35],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [36],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [37],
				"visible": false,
				"searchable": false
			},
			{
				"targets": [38],
				"visible": false,
				"searchable": false
			}
		],	
        "initComplete" : function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }

	});
});

