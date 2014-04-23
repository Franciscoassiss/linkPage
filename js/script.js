$(document).ready(function(){
	$('#cadastro').validate({
		rules:{
			name:{
				required: true,
				minlength: 3
			},
			user:{
				required: true,
				minlength: 3
			},
			pass:{
				required: true,
				minlength: 6
			},
			pass_confirm:{
				required: true,
				equalTo: "#pass"
			}
		},
		messages:{
			name:{
				required: "Campo nome é obrigatório para o cadastro!",
				minlength: "O nome deve ter no mínimo 3 caracteres!"
			},
			user:{
				required: "Campo usuário é obrigatório para o cadastro!",
				minlength: "O usuário deve ter no mínimo 3 caracteres!"
			},
			pass:{
				required: "Campo senha é obrigatório para o cadastro!",
				minlength: "A senha deve ter no mínimo 6 caracteres!"
			},
			pass_confirm:{
				required: "Campo confirmar senha é obrigatório para o cadastro!",
				equalTo: "Senhas não são identicas!"
			}
		}
	});
});

$(document).ready(function(){
	$('#login').validate({
		rules:{
			user:{
				required: true,
				minlength: 3
			},
			pass:{
				required: true,
				minlength: 6
			}
		},
		messages:{
			user:{
				required: "Campo usuário deve ser preenchido!",
				minlength: "O usuário deve ter no mínimo 3 caracteres!"
			},
			pass:{
				required: "Campo senha deve ser preenchido!",
				minlength: "A senha deve ter no mínimo 6 caracteres!"
			}
		}
	});
});

$(document).ready(function(){
	$('#edit').validate({
		rules:{
			name:{
				required: true,
				minlength: 3
			},
			user:{
				required: true,
				minlength: 3
			},
			pass:{
				required: true,
				minlength: 6
			},
			newPass:{
				minlength: 6
			},
			confirmNewPass:{
				equalTo: "#newPass"
			}
		},
		messages:{
			name:{ 
				required: "Você não pode simplesmente não ter um nome!!",
				minlength: "O nome deve ter no mínimo 3 caracteres!"
			},
			user:{
				required: "Você precisa ter um nome de usuário!",
				minlength: "O usuário deve ter no mínimo 3 caracteres!"
			},
			pass:{
				required: "Confirme a senha para validar as alterações!",
				minlength: "A senha deve ter no mínimo 6 caracteres!"
			},
			newPass:{
				minlength: "A senha deve ter no mínimo 6 caracteres!"
			},
			confirmNewPass:{
				equalTo: "Senhas não são identicas!"
			}
		}
	});
});

$(document).ready(function(){
	$('#cadastrarProduto').validate({
		rules:{
			name:{
				required: true,
				minlength: 3
			},
			area:{
				required: true,
				maxlength: 120
			},
			value:{
				required: true,
				number: true
			},
			quantity:{
				required: true,
				number: true
			},
			image:{
				required: true,
				minlength: 3
			}
		},
		messages:{
			name:{
				required: "Digite o nome do produto",
				minlength: "Digite no mínimo 3 caracteres"
			},
			area:{
				required: "Preencha as caracteristicas do produto",
				maxlength: "Digite no máximo 120 caracteres"
			},
			value:{
				required: "Digite o valor do produto",
				number: "Digite apenas números, separe as casas decimais usando ponto ."
			},
			quantity:{
				required: "Digite a quantidade deste produto",
				number: "Digite apenas números"
			},
			image:{
				required: "Digite o nome da imagem do produto (sem .jpg)",
				minlength: "Digite no mínimo 3 caracteres"
			}
		}
	});
});

$(document).ready(function(){
	$('#editProduct').validate({
		rules:{
			name:{
				required: true,
				minlength: 3
			},
			area:{
				required: true,
				maxlength: 120
			},
			value:{
				required: true,
				number: true
			},
			quantity:{
				required: true,
				number: true
			},
			image:{
				required: true,
				minlength: 3
			}
		},
		messages:{
			name:{
				required: "Digite o nome do produto",
				minlength: "Digite no mínimo 3 caracteres"
			},
			area:{
				required: "Preencha as caracteristicas do produto",
				maxlength: "Digite no máximo 120 caracteres"
			},
			value:{
				required: "Digite o valor do produto",
				number: "Digite apenas números, separe as casas decimais usando ponto ."
			},
			quantity:{
				required: "Digite a quantidade deste produto",
				number: "Digite apenas números"
			},
			image:{
				required: "Digite o nome da imagem do produto (sem .jpg)",
				minlength: "Digite no mínimo 3 caracteres"
			}
		}
	});
});

/*$(document).ready(function(){
	$('.produto').validate({
		rules:{
			quantity:{
				required: true
			},
			messages:{
				required: "Informe a quantidade"
			}
		}
	});
});
*/
$(document).ready(function(){
	$("#session li a").mouseover(function(){
 		var index = $("#session li a").index(this);
 		$("#session li").eq(index).children("ul").slideDown();
 		if($(this).siblings('ul').size() > 0){
 			return false;
 		}
 	});

 	$("#session li").mouseleave(function(){
 		var index = $("#session li").index(this);
 		$("#session li").eq(index).children("ul").slideUp();
 	});

 	$(".buy").mouseover(function(){
 		$(this).animate({
 			width: "170px"
		}, 300 );
		$(this).val("Adicionar ao Carrinho");
 	});

 	$(".buy").mouseleave(function(){
 		$(this).animate({
 			width: "5.3em"
 		}, 300);
 		$(this).val("Comprar");
 	});

 	$("#login #submit").click(function(){
 		$('#user').text('a');
 	});
});