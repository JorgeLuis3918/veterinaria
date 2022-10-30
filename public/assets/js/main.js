$.validate({
	modules: 'location, date, security, file',
	lang: 'es'
});
$('#example').DataTable({
	"language": {
		"lengthMenu": "Ver los _MENU_ Primeros Registros",
		"info": "_END_ de _TOTAL_ registros",
		"infoEmpty": "No se encontraron registros",
		"infoFiltered": "(Filtrado de _MAX_ total entradas)",
		"loadingRecords": "Cargando...",
		"processing": "Procesando...",
		"sSearch": "BUSCAR:",
		"sZeroRecords": "No se encontraron resultados",
		"sEmptyTable": "Ningún dato disponible en esta tabla",

		"oPaginate": {
			"sFirst": "Primero",
			"sLast": "Último",
			"sNext": "Siguiente",
			"sPrevious": "Anterior"
		},
		"fnInfoCallback": null
	},
	dom: 'Bfrtip',
	buttons: [
	{
		extend: 'excelHtml5',
		title: 'APC',
		className: 'btn btn-success',
		text: '<i class="far fa-file-excel"></i> EXCEL',
		exportOptions: { columns: ":not(.no-export)" }
	},
	{
		extend: 'pdfHtml5',
		title: 'APC',
		orientation: 'landscape',
		className: 'btn btn-danger',
		text: '<i class="far fa-file-pdf"></i> PDF',
		exportOptions: { columns: ":not(.no-export)" }
	},
	]

});

$('.select2').select2();

$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

$('.decimal').keypress(function (event) {
	return isNumber(event, this)
});

function isNumber(evt, element) {

	var charCode = (evt.which) ? evt.which : event.keyCode

	if (
		(charCode != 46 || $(element).val().indexOf('.') != -1) &&
		(charCode < 48 || charCode > 57))
		return false;

	return true;
}
/* Loading Ajax */
var screen = $('#loading-screen');
// configureLoadingScreen(screen);

function loading(name){
	if(name == "show"){
		screen.fadeIn();
	}else if(name == "hide"){
		screen.fadeOut();
	}
}

function configureLoadingScreen(screen){
	$(document)
	.ajaxStart(function () {
		screen.fadeIn();
	})
	.ajaxStop(function () {
		screen.fadeOut();
	});
}
$('[data-toggle="tooltip"]').tooltip();

/*Dropzone*/
$(".dropzone").change(function() {
	readFile(this);
});

function readFile(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			var htmlPreview =
			'<img src="' + e.target.result + '" class="img-dropzone" />';
			var wrapperZone = $(input).parent();
			var previewZone = $(input).parent().parent().find('.preview-zone-'+input.dataset.imagen);
			var boxZone = $(input).parent().parent().find('.preview-zone-'+input.dataset.imagen).find('.box').find('.box-body');
			$(".dropzone-wrapper-"+input.dataset.imagen).css({"display":"none"});
			wrapperZone.removeClass('dragover');
			previewZone.removeClass('hidden');
			boxZone.empty();
			boxZone.append(htmlPreview);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

function reset(e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
}


$('.dropzone-wrapper').on('dragover', function(e) {
	e.preventDefault();
	e.stopPropagation();
	$(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
	e.preventDefault();
	e.stopPropagation();
	$(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
	var boxZone = $(this).parents('.preview-zone-'+this.dataset.imagen).find('.box-body');
	var previewZone = $(this).parents('.preview-zone-'+this.dataset.imagen);
	var dropzone = $(this).parents('.form-group').find('.dropzone-'+this.dataset.imagen);
	boxZone.empty();
	previewZone.addClass('hidden');
	reset(dropzone);
	$(".dropzone-wrapper-"+this.dataset.imagen).css({"display":"block"});
});
/*Fin Dropzone*/


function deleteRegister(id){
	Swal.fire({
		title: 'Esta seguro de eliminar este registro?',
		text: "",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Confirmar',
		cancelButtonText: 'Cancelar'
	}).then((result) => {
		if (result.value) {
			$("#registros"+id).submit();
		}
	})
}

$(".check").click(function() {
	var check = $(this).is(':checked');
	if(check){
		$(`.check-${this.dataset.check}`).attr("disabled",false);
	}else{
		$(`.check-${this.dataset.check}`).attr("disabled",true);
		$(`.check-${this.dataset.check}`).val("");
	}
});

function validaNumericos(event) {
	if(event.charCode >= 48 && event.charCode <= 57){
		return true;
	}
	return false;        
}