
jQuery(function($) {
    $.mask.definitions['~']='[+-]';
    //Inicio Mascara Telefone
	$('input[type=tel]').mask("(99) 99999-999?9").ready(function(event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		phone = target.value.replace(/\D/g, '');
		element = $(target);
		element.unmask();
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	});
	//Fim Mascara Telefone
	$("#cpf").mask("999.999.999-99");
	$("#cpf2").mask("999.999.999-99");
	$("#rg").mask("99.999.999-*");
	$("#tel").mask("(99)99997-9999");
	$("#data").mask("99/99/9999");
	$("#dataObt").mask("99/99/9999");
	$("#beneficio").mask("999.999.99-9"); 
   });
// ]]>
