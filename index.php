<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

// if( $validar == null || $validar = ''){
if ($validar == null || $validar = '') {

    header("Location: ./includes/login.php");
    die();
}


?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de Vendas</title>

    <link rel="stylesheet" href="./css/es.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./package/dist/sweetalert2.css">
</head>

<body id="page-top">

    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h3 class="modal-title" id="exampleModalLabel">Registro de Vendas</h3>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../includes/validar.php" method="POST">
                        <!-- id_vendas, nome, taxa, numNsu, fotoNsu, valor, valorR, pix, operacao, conta, agencia, banco, cpf, 
                         tipConta, data_cadastro, ultima_alteracao, criado_por, alterado_por, situacao -->

                        <div class="form-group">
                            <label for="nome" class="form-label">Nome do Cliente</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="cpf">Cpf:</label><br>
                            <input type="cpf" name="cpf" id="cpf" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="operacao" class="form-label">Operacao</label>
                            <input type="number" id="operacao" name="operacao" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="conta" class="form-label">Conta</label>
                            <input type="number" id="conta" name="conta" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="agencia">Agencia:</label><br>
                            <input type="number" name="agencia" id="agencia" class="form-control" maxlength="5" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="banco" class="form-label">Banco</label>
                            <input type="text" id="banco" name="banco" class="form-control" required>
                        </div>
                        <!-- 
                        <div class="form-group">
                            <label for="tipConta">Tipo de Conta:</label><br>
                            <label>Corrente Fisica:</label>
                            <input type="radio" name="tipConta" value="1" required><br>
                            <label>Poupança:</label>
                            <input type="radio" name="tipConta" value="2" required><br>
                            <label>Caixa Fácil:</label>
                            <input type="radio" name="tipConta" value="3" required><br>
                            <label>Corrente Juridica:</label>
                            <input type="radio" name="tipConta" value="4" required>
                        </div> -->
                        <div class="form-group">
                            <label for="tipConta">Tipo de Conta:</label><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Corrente Fisica:</label>
                                    <input type="radio" name="tipConta" value="1" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Poupança:</label>
                                    <input type="radio" name="tipConta" value="2" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Caixa Fácil:</label>
                                    <input type="radio" name="tipConta" value="3" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Corrente Juridica:</label>
                                    <input type="radio" name="tipConta" value="4" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="taxa" class="form-label">Taxa</label>
                            <input type="number" id="taxa" name="taxa" class="form-control" maxlength="14" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="valor" class="form-label">Valor Passado</label>
                            <input type="number" id="valor" name="valor" class="form-control" maxlength="14" required>
                        </div>
                        <div class="form-group">
                            <label for="valorR">Valor Retirado:</label><br>
                            <input type="text" name="valorR" id="valorR" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="pix">Pix:</label><br>
                            <input type="text" name="pix" id="pix" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="criado_por">Vendedor (a):</label><br>
                            <input type="number" name="criado_por" id="criado_por" class="form-control" placeholder="Informe o seu código" required>
                        </div>
                        <div class="form-group">
                            <label for="numNsu">Numero do Nsu:</label><br>
                            <input type="number" name="numNsu" id="numNsu" class="form-control" maxlength="13" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="loja">LOJA:</label><br>
                                <select name="loja" required>
                                    <option value="1">COMPANY / BARRA</option>
                                    <option value="2">DINCRED/BROTAS</option>
                                    <option value="3">DINCRED/LIBERDADE</option>
                                    <option value="4">GCRED CALÇADA</option>
                                    <option value="5">GCRED LAURO DE FREITAS</option>
                                    <option value="6">GCRED PARIPE</option>
                                    <option value="7">GCRED PERIPERI</option>
                                    <option value="8">GIRO CRED IGUATEMI</option>
                                    <option value="9">GCRED SÃO MARCOS</option>
                                    <option value="10">RV CRED/PLATAFORMA</option>
                                    <option value="11">STOP CLUB EMPRESTIMO</option>
                                    <option value="12">G CRED BOCA DO RIO</option>
                                    <option value="13">EDICRED/SIMÕES FILHO</option>
                                    <option value="14">GCRED SUSSUARANA</option>
                                    <option value="15">GCRED PERNAMBUÉS</option>
                                    <option value="16">VILAS CRED LAURO DE FREITAS-BA</option>
                                    <option value="17">GCRED - PAULO AFONSO</option>
                                    <option value="18">GCRED ALAGOINHAS</option>
                                    <option value="19">G Cred São Sebastião</option>
                                    <option value="20">Platinum Cred - Aracaju</option>
                                    <option value="21">cred certo jaboatao</option>
                                    <option value="22">PLATINUM BOA VIAGEM</option>
                                    <option value="23">CREDITA PAULISTA</option>
                                    <option value="24">SIM CRED SANTO ANTONIO</option>
                                    <option value="25">FAZ CRED BOA VISTA</option>

                                    <option value="26">PLATINUM CRED PRAZERES</option>
                                    <option value="27">FACIL CRED CAVALEIRO</option>
                                    <option value="28">SB CRED - PRAZERES</option>
                                    <option value="29">Super Cred - Abreu e Lima</option>
                                    <option value="30">GCRED Alecrim</option>
                                    <option value="31">Gcred - Parnamirim-RN</option>
                                    <option value="32">FG CRED</option>
                                    <option value="33">PLATINUM CRED MORENO</option>
                                    <option value="34">Platinum Cred Carpina</option>
                                    <option value="35">PLATINUM CRED CAMARAGIBE</option>
                                    <option value="36">PLATINUM CRED-SÃO LORENÇO DA MATA</option>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                            <label for="tipConta" class="form-label">Tipo de Conta</label>
                            <input type="number" id="tipConta" name="tipConta" class="form-control" maxlength="10" required>
                        </div> -->
                            <!-- <div class="form-group">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" >
                        </div> -->
                            <!-- <div class="form-group">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="number" id="telefone" name="telefone" class="form-control" maxlength="14" placeholder="" required>
                        </div> -->
                            <!-- Textos completos
                        				cep	rua	numero	bairro complemento	cidade uf	nascimento	
                        data_cadastro	ultima_alteracao	criado_por	alterado_por	situacao estado	q_cliente	
                         -->
                            <!-- <div class="form-group">
                            <label for="sexo" class="form-label">Sexo</label>
                            <input type="sexo" id="sexo" name="sexo" class="form-control" required>
                        </div> -->
                            <!-- <div class="form-group">
                            <label for="sexo">Sexo:</label><br>
                            <label>Masculino:</label>
                            <input type="radio" name="sexo" value="masculino" required>
                            <label>Feminino:</label>
                            <input type="radio" name="sexo" value="feminino" required>
                        </div> -->
                            <!-- <div class="form-group">
                            <label for="loja">Loja:</label><br>
                            <input type="number" name="loja" id="loja" class="form-control" required>
                        </div> -->
                            <!-- <div class="form-group">
                            <label for="situacao">Situação:</label><br>
                            <select name="situacao" required>
                                <option value="1">Pago</option>
                                <option value="2">Não Pago</option>
                                <option value="3">Concluído</option>
                                <option value="4">Pendente</option>
                                <option value="5">Ativo</option>
                                <option value="6">Inativo</option>
                                <option value="7">Aberto</option>
                                <option value="8">Fechado</option>
                                <option value="9">Em Andamento</option>
                                <option value="10">Encerrado</option>
                                <option value="11">Aprovado</option>
                                <option value="12">Reprovado</option>
                                <option value="13">Enviado</option>
                                <option value="14">Não Enviado</option>
                                <option value="15">Agendado</option>
                                <option value="16">Cancelado</option>
                            </select>
                        </div> -->



                            <!-- <label for="sexo">sexo:</label><br>

                        <label>M:</label>
                        <input type="radio" name="sexo" value="masculino">
                        <label">F:</label>
                        <input type="radio" name="sexo" value="feminino"> -->

                            <!-- 

 -->
                            <!-- <div class="form-group">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" id="estado" name="estado" class="form-control" placeholder="" required>
                        </div> -->
                        
                            <script>
                                function actualizarImg() {
                                    const $inputfile = document.querySelector("#selImg"),
                                        $imgProducto = document.querySelector("#image");
                                    // Escuchar cuando cambie
                                    $inputfile.addEventListener("change", () => {
                                        // Los archivos seleccionados, pueden ser muchos o uno
                                        const files = $inputfile.files;
                                        // Si no hay archivos salimos de la función y quitamos la imagen
                                        if (!files || !files.length) {
                                            $imgProducto.src = "";
                                            return;
                                        }
                                        // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                                        const archivoInicial = files[0];
                                        // Lo convertimos a un objeto de tipo objectURL
                                        const Url = URL.createObjectURL(archivoInicial);
                                        // Y a la fuente de la imagen le ponemos el objectURL
                                        $imgProducto.src = Url;
                                    });
                                }
                            </script>
                            <br>
                        </div>
                        <div class="mb-3">

                            <input type="submit" value="Guardar" id="register" class="btn btn-success" name="registrar">
                            <a href="user.php" class="btn btn-danger">Cancelar</a>

                        </div>


                    </form>

                    <!--<script src="./package/dist/sweetalert2.all.js"></script>
<script src="./package/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var nombre 	= $('#nombre').val();
			var correo 		= $('#correo').val();
			var telefono = $('#telefono').val();
			var password 	= $('#password').val();
			var rol	= $('#rol').val();
            var imagen	= $('#imagen').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: '../includes/validar.php',
					data: {nombre: nombre,correo: correo, telefono: telefono,
                    password: password, rol: rol, imagen:imagen},
					success: function(data){
					Swal.fire({
								'title': '¡Mensaje!',
								'text': data,
                                'icon': 'success',
                                'showConfirmButton': 'false',
                                'timer': '1500'
								}).then(function() {
                window.location = "user.php";
            });
							
					} ,
                    
					error: function(data){
						Swal.fire({
								'title': 'Error',
								'text': data,
								'icon': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
    
	
</script>-->
</body>

</html>