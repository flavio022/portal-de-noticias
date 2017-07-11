$(function(){
	var boxImg = $("#imagem-noticia-carregar");
	var imgCar = $("#imagem-carregada");
	
	$(boxImg).click(function(){
		$(imgCar).click();
	});
	$(imgCar).change(function(){
		document.getElementById("imagem-noticia-carregar").value = document.getElementById("imagem-carregada").value;
	});
	//Jquery trocar abas
	//Links para as seções

	var linkPublicar = $("#publicar-noticia-menu");
	var linkTodasNot = $("#todas-noticias-menu");
	var linkRascunho = $("#rascunhos-menu");
	var linkLixeira =  $("#lixeira-menu");

	//Seções abas

	var publicarNoticia =$("#publicar-noticia");
	var todasNoticias 	=$("#todas-as-noticias");
	var todasNoticiasRascunho =$("#todas-as-noticias-rascunho");
	var todasNoticiasLixeira =$("#todas-as-noticias-lixeira");

	$(todasNoticias).hide();
	//Publicar
	$(linkPublicar).click(function(){
			$(linkTodasNot).removeClass("activeColor");
			$(linkRascunho).removeClass("activeColor");
			$(linkLixeira).removeClass("activeColor");
			$(linkPublicar).addClass("activeColor");
			
			$(todasNoticias).hide();
			$(publicarNoticia).hide();
			$(todasNoticiasRascunho).hide();
			$(todasNoticiasLixeira).hide();

			$(publicarNoticia).slideDown(500);
	});
	//Todas as noticias
	$(linkTodasNot).click(function(){
			$(linkRascunho).removeClass("activeColor");
			$(linkLixeira).removeClass("activeColor");
			$(linkPublicar).removeClass("activeColor");
			$(linkTodasNot).addClass("activeColor");

			$(publicarNoticia).slideUp(300,function(){
				$(publicarNoticia).hide();
				$(todasNoticiasRascunho).hide();
				$(todasNoticiasLixeira).hide();

			});
			$(todasNoticias).slideDown(500);
	});
		//Rascunho
	$(linkRascunho).click(function(){
			$(linkRascunho).addClass("activeColor");
			$(linkLixeira).removeClass("activeColor");
			$(linkPublicar).removeClass("activeColor");
			$(linkTodasNot).removeClass("activeColor");

			$(publicarNoticia).slideUp(300,function(){
				$(publicarNoticia).hide();
				$(todasNoticias).hide();
				$(todasNoticiasLixeira).hide();

			});
			$(todasNoticiasRascunho).slideDown(500);
	});

	//Lixeira
		$(linkLixeira).click(function(){
			$(linkRascunho).removeClass("activeColor");
			$(linkLixeira).addClass("activeColor");
			$(linkPublicar).removeClass("activeColor");
			$(linkTodasNot).removeClass("activeColor");

			$(publicarNoticia).slideUp(300,function(){
				$(publicarNoticia).hide();
				$(todasNoticias).hide();
				$(todasNoticiasLixeira).hide();
				$(todasNoticiasRascunho).hide();

			});
			$(todasNoticiasLixeira).slideDown(500);
	});


});//Fim do jquery

function validarFormCat(){
	var campo_cat = document.getElementById("categorias-nomes").value;

	if(campo_cat == ""){
		alert("Informe uma categoria para cadastrar ");
		return false;
	}
}