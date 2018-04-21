/* 1. exercicio 1: funçao criada no ficheiro externo que mostra uma mensagem*/
function Mensagem(){
alert ('AIA');
}

/* 2. exercicio 2: funçao criada no ficheiro que Abri uma janela com um numero aleatorio entre 0 e 50*/
function numeroaleatorio(){
	alert(Math.floor(Math.random() * 50 ));
}

/* 3. exercicio 3: funçao criada para Abrir janela com o site http://www.imdb.com*/
function janelasite(url){
	window.open(url, "janelasite")
}

/* 4. exercicio 4: funçao que altera o titulo da janela do browser atraves do javaScript*/
document.title="AIA 2009-2010";


/* 5. exercicio 5: funçao criada para mostrar o resto da divisão de 25 por 5*/
var a=25;
var b=3;
function restodivisao(){
	alert (a%b);
}

/* 6. exercicio 6: criando caixas de dialogo com mensagem*/
function caixas(argument) {
		var txt;
		if(confirm("Press a idCampo1? se sim click OK se nao click CANCELAR")){
			document.getElementById("idCampo1").style.color="blue"; 
			document.getElementById("idCampo1").style.backgroundColor="green";
			//txt="click no OK";
			txt="PRIMEIRA CAIXA ATIVADA :)"; 
		
		}else{
		 	(confirm("Press a idCampo2? se sim click OK"))
		 	document.getElementById("idCampo2").style.backgroundColor="red";
		 	//txt="click em Cancelar";
		 		txt="perdeu o foco :(";
		 	}
			document.getElementById("paragrafoParaLog").innerHTML=txt; 
}	

 /*7. exercicio 7: Criando caixa de texto com botao que mostra mensagem dependendo do valor inserido*/
 		function funcao() {
			var valor = form.caixa1.value;

			if (valor<0) {
				alert("insira valores maiores ou iagual a zero");
			}
			if (valor>=0 && valor<10) {
				alert("insuficiente");
			}
			if (valor>=10 && valor<14) {
				alert("Bom");
			}if (valor>=14) {
				alert("muito bom");
			}	
		}
/*8. exercicio 8: Criando caixa de texto que mostra mensagem com parametro*/
		function funcao_2() {
			var i;
		
			var num1=document.getElementById("num").value;
			for(i=1;i<=num1;i++){

				alert("AIA" + " "+ i + ", ")
			}
			//var valor = formu.caixa.value;
			//alert("AIA" + valor);
		}