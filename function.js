/*Menu Mobile*/
$(document).ready(function(){
	$("#esconder_menu").click(function(){
	$("#mostra_menu").slideToggle(1000);
	});
});

/*Busca CEP Automático - EMPRESA DO CLIENTE*/
$(document).ready(function(){
	$("#zipcode").blur(function(e){
		if($.trim($("#zipcode").val()) != ""){
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#zipcode").val(), function(){
				if(resultadoCEP["resultado"]){
					$("#address").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
					$("#neighborhood").val(unescape(resultadoCEP["bairro"]));
					$("#city").val(unescape(resultadoCEP["cidade"]));
					$("#state").val(unescape(resultadoCEP["uf"]));
				}else{
					alert("N&atilde,o foi poss&iacute,vel encontrar o endere&ccedil,o");
				}
			});
		}
	})
});

/*Busca CEP Automático - SUA AGÊNCIA*/
$(document).ready(function(){
	$("#zip").blur(function(e){
		if($.trim($("#zip").val()) != ""){
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#zip").val(), function(){
				if(resultadoCEP["resultado"]){
					$("#add").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
					$("#neigh").val(unescape(resultadoCEP["bairro"]));
					$("#cit").val(unescape(resultadoCEP["cidade"]));
					$("#stat").val(unescape(resultadoCEP["uf"]));
				}else{
					alert("N&atilde,o foi poss&iacute,vel encontrar o endere&ccedil,o");
				}
			});
		}
	})
});

/*Função de Auto Load de Capas e Imagens*/

var loadFile = function(event){
	var reader = new FileReader();
	reader.onload = function(){
		var output = document.getElementById("output");
		output.src = reader.result;
	},
	reader.readAsDataURL(event.target.files[0]);
};

/*Máscara Moeda*/
$(function() {
    $(".money").maskMoney();
 })
  
  
/*Máscara de Telefone*/

jQuery("input.telefone")
.mask("(99) 9999-9999?9")
.focusout(function (event) {  
	var target, phone, element,  
	target = (event.currentTarget) ? event.currentTarget : event.srcElement,  
	phone = target.value.replace(/\D/g, '');
	element = $(target);  
	element.unmask();  
	if(phone.length > 10) {  
		element.mask("(99) 99999-999?9");  
	} else {  
		element.mask("(99) 9999-9999?9");  
	}  
});

/*Máscara Data de Nascimento*/
jQuery("input.nascimento")
.mask("99/99/9999")
.focusout(function (event) {  
	var target, date, element;  
	target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
	date = target.value.replace(/\D/g, '');
	element = $(target);  
	element.unmask();  
	if(date.length > 10) {  
		element.mask("99/99/9999");  
	}else{
		 element.mask("99/99/9999");  
	}
});

/*Máscara CEP*/
jQuery("input.cep")
.mask("99999-999")
.focusout(function (event) {  
	var target, cep, element;  
	target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
	cep = target.value.replace(/\D/g, '');
	element = $(target);  
	element.unmask();  
	if(cep.length > 9) {  
		element.mask("99999-999");  
	}else{
		 element.mask("99999-999");  
	}
});

/*Adicionar Nova Linha na Tabela*/
$(function(){
	$(".add").click(function(){
		var input ="<tr><td class="border-1px"><input type="text" name="products[]" id="product" class="bgcolor-gray product"></td>"; 
		$(document).ready(function() { $.getJSON("return_product.php", function(data){  var cliente = []; $(data).each(function(key, value) {   cliente.push(value.product_name);   });  $(".product").autocomplete({ source: cliente, minLength: 1});  }); });
		input += "<td class="border-1px"><input type="text" name="quantity_products[]" id="qtde" class="bgcolor-gray"></td>";
		input += "<td class="border-1px"><select name="size[]" id="size" class="bgcolor-gray"><option name="Unidades">Unidades</option><option name="Pacotes">Pacotes</option></select></td>";
		input += "<td class="border-1px"><button onclick="RemoveTableRow(this)" type="button" class="link-bgcolor-red-dark color-white">Remover</button></td></tr>";
		
		$(".campos").append(input);
		return false;
		
	});

/*Remover Linha na Tabela*/
(function($) {

		  RemoveTableRow = function(handler) {
			var tr = $(handler).closest("tr");

			tr.fadeOut(400, function(){ 
			  tr.remove(); 
			}); 

			return false;
		  };
		})(jQuery);
});

