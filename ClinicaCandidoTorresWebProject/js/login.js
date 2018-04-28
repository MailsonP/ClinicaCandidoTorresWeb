var modal_aberto = false;

$ (document).ready(function() {
	var cont_login = $('.container-login');
	var bts_abre_fecha_modal = $('.bot-fecha-container-login, .open_div');
	
	bts_abre_fecha_modal.click(function(e) {
		e.preventDefault();
		if(modal_aberto){
			cont_login.fadeOut();
		}else{
			cont_login.fadeIn();
		}

		modal_aberto = !modal_aberto;
	});
});