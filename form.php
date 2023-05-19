<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Ordem de Serviço</title>
	<link rel="stylesheet" href="css/form.css">
	<!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
            crossorigin="anonymous"></script>
	<!-- Adicionando Javascript -->
    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
</head>
<style>
	 body{
		 margin:auto;
         background-image: url(tec.png);
      	 background-repeat: no-repeat;
    	 background-position: center;
         background-size: cover;
      	 height: 100%;
      	 width: 70%;
		 
	 }
	 
	#nome {
  	border: 1px solid #272ac2;
	}
    #cep {
  	border: 1px solid #272ac2;
	}
    #rua {
  	border: 1px solid #272ac2;
	}
    #bairro {
  	border: 1px solid #272ac2;
	}
    #cidade {
  	border: 1px solid #272ac2;
	}
    #uf {
  	border: 1px solid #272ac2;
	}
	#email {
  	border: 1px solid #272ac2;
	}
	#telefone {
  	border: 1px solid #272ac2;
	}
	#endereco {
  	border: 1px solid #272ac2;
	}
	#servico {
  	border: 1px solid #272ac2;
	}
	#descricao {
  	border: 1px solid #272ac2;
	}
	#data {
  	border: 1px solid #272ac2;
	}
	::placeholder {
       color: black;
    }
    input[type="text"] {
        color: black; 
    }
    input, select, textarea {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-bottom: 20px;
    color: black;
    }
</style>
<body>
	<h1>O.S  CFTV</h1>
	<form action="insert_service.php" method="post">
		

		<label for="nome">Nome</label>
		<input type="text" id="nome" name="nome" placeholder="Digite o nome do cliente"><br><br>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="Digite o email"><br><br>
		
		<label for="telefone">Telefone:</label>
		<input type="tel" id="telefone" name="telefone" placeholder="Digite o telefone"><br><br>
		
		<label for="cep"> Cep: </label>
        <input type="text" name="cep" type="text" id="cep" value="" size="10" maxlength="9" placeholder="Digite o Cep"></label><br />

        <label for="rua"> Rua: </label>
        <input type="text" name="rua" type="text" id="rua" size="60" placeholder="Digite o Bairo"></label><br/>

        <label for="bairro"> Bairro: </label>
        <input type="text" name="bairro" type="text" id="bairro" size="40" placeholder="Digite o Cep"></label><br/>

        <label for="cidade"> Cidade: </label>
        <input type="text" name="cidade" type="text" id="cidade" size="40" placeholder="Digite o Cidade"></label><br />

        <label for="estado"> Estado: </label>
        <input type="text" name="uf" type="text" id="uf" size="2"placeholder="Digite o Estado"></label><br />

		<label for="servico">Serviço:</label>
		<select id="servico" name="servico" placeholder="Selecione o serviço">
			<option value="">--Selecione--</option>
			<option value="manutencao">Manutenção</option>
			<option value="instalacao">Instalação</option>
			<option value="reparo">Reparo</option>
		</select><br><br>
		
		<label for="descricao">Descrição do serviço:</label><br>
		<textarea id="descricao" name="descricao" placeholder="Descreva o serviço"></textarea><br><br>
		
		<label for="data">Data de entrada:</label>
		<input type="date" id="data" name="data" placeholder="Selecione a data"><br><br>
		
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
