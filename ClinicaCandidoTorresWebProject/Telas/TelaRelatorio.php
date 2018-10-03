<?php
session_start();
include_once '../Login/ProtectPaginas.php';
include_once '../Medico/Medico.php';
include_once '../Paciente/Paciente.php';
include_once '../Atendimento/Atendimento.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}
   
   //PARA LISTAR NO COMBOBOX DO MODAL
   $medic = new Medico();
   $pac = new Paciente();
   $tipoAten = new Atendimento();
   $medic->retornaTudo($medic);
   $pac->retornaTudo($pac);
   $tipoAten->retornaTudo($tipoAten);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Relatório</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  	<style type="text/css">
		*{
			box-sizing: border-box;
		}

  		@media screen and (max-width: 575px){
  			div .row{
  				margin: 0 20px;
  			}
  		}
  	</style>	
</head>
<body>
	<div class="container">
		<div class="row" style="text-align: center; cursor: pointer;">
			<div class="col-sm-3" style="background: cyan; height: 50px; line-height: 50px; font-weight: 600;">
				<a data-toggle="modal" data-target="#ModalMedico">PROFISSIONAL</a>
			</div>
			<div class="col-sm-3" style="background: #f23355; height: 50px; line-height: 50px; font-weight: 600;">
				<a data-toggle="modal" data-target="#ModalPaciente">PACIENTE</a>
			</div>
			<div class="col-sm-3" style="background: cyan; height: 50px; line-height: 50px; font-weight: 600;">
				<a data-toggle="modal" data-target="#ModalAtendimento">ATENDIMENTO</a>
			</div>
			<div class="col-sm-3" style="background: #f23355; height: 50px; line-height: 50px; font-weight: 600;">
				d
			</div>
		</div>
	</div>

	<!-- MODAL DE ESCOLHA DE MEDICO -->
                 <div class="modal fade" id="ModalMedico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE UM MÉDICO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Agenda/RelatorioAgendaProfissional.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">              
              					     	<select class="custom-select" style="text-transform: uppercase;" name="medico">
                                <?php while ($dadoMedic = $medic->retornaDados("object")) { ?>  
              									<option value="<?php echo $dadoMedic->IDMEDICO; ?>"><?php echo $dadoMedic->NOME; ?></option>
                                <?php  }  ?>
              								</select>
                            </div>
                          </div>
                          <div class="modal-footer">
                          	<button type="submit" class="btn btn-success" style="margin: 0 auto;">GERAR RELATÓRIO</button>
                          </div>
                        </form>
                        </div>
                      </div>
                  </div>
 <!-- F I M  M O D A L -->

 <!-- MODAL DE ESCOLHA DE PACIENTE -->
                 <div class="modal fade" id="ModalPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE UM PACIENTE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Agenda/RelatorioAgendaPaciente.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">              
                              <select class="custom-select" style="text-transform: uppercase;" name="paciente">
                                <?php while ($dadoPac = $pac->retornaDados("object")) { ?>  
                                <option value="<?php echo $dadoPac->IDPACIENTE; ?>"><?php echo $dadoPac->NOME; ?></option>
                                <?php  }  ?>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success" style="margin: 0 auto;">GERAR RELATÓRIO</button>
                          </div>
                        </form>
                        </div>
                      </div>
                  </div>
 <!-- F I M  M O D A L -->
 <!-- MODAL DE ESCOLHA DE ATENDIMENTO -->
                 <div class="modal fade" id="ModalAtendimento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE UM PACIENTE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Agenda/RelatorioAgendaPaciente.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">              
                              <select class="custom-select" style="text-transform: uppercase;" name="paciente">
                                <?php while ($dadoAtend = $tipoAten->retornaDados("object")) { ?>  
                                <option value="<?php echo $dadoAtend->IDATENDIMENTO; ?>"><?php echo $dadoAtend->TIPOATENDIMENTO; ?></option>
                                <?php  }  ?>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success" style="margin: 0 auto;">GERAR RELATÓRIO</button>
                          </div>
                        </form>
                        </div>
                      </div>
                  </div>
 <!-- F I M  M O D A L -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>