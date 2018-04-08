$(document).ready(function(){
	$("#navToggle").click(function(){
		$("#sidebar").toggleClass("sidebar-close");
		$("#nav-header").toggleClass("nav-header-close");
		//untuk contentnya
		$("#content").toggleClass("content-close");
	});



    $('#tbl-list-mhs').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
        ]
    } );


});

