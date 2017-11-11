//Cargando el modal usuario guardado correctamente según el valor del id
$(document).ready( modal() );

function modal(){
	var modal_value = $("#modal-success").text();
        console.log(modal_value);
	if(modal_value == 88){
		$('#myModalConfirm').modal('show');
	}
		
}