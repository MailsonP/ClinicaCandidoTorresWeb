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
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE UM ATENDIMENTO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Agenda/RelatorioAgendaAtendimento.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">              
                              <select class="custom-select" style="text-transform: uppercase;" name="atendimento">
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

  <!-- MODAL DE ESCOLHA DE SEXO -->
                 <div class="modal fade" id="ModalSexo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE UM SEXO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Paciente/RelatorioPacienteSexo.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">              
                              <select class="custom-select" style="text-transform: uppercase;" name="sexo">
                                <option value="Masculino">MASCULINO</option>
                                <option value="Feminino">FEMININO</option>
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

   <!-- MODAL DE AGENDAMENTOS POR DATA -->
                 <div class="modal fade" id="ModalAgendaData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE O PERIODO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Agenda/RelatorioAgendaPorMes.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">
                            <div class="row">             
                              <div class="form-group col-sm-6">
                                <label for="diaIni">Data Inicial:</label>
                                <input class="form-control" type="date" name="DataInicial" id="diaIni" required>
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="diaFim">Data Final:</label>
                                <input class="form-control" type="date" name="DataFinal" id="diaFim" required>
                              </div>
                            </div>
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

   <!-- MODAL DE PACIENTES CADASTRADOS POR DIA -->
                 <div class="modal fade" id="ModalPacienteDia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE DATA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Paciente/RelatorioPacienteDia.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">
                            <div class="row">             
                              <div class="form-group col-sm-6" style="margin: 0 auto; ">
                                <label for="date">DATA DE CADASTRO:</label>
                                <input class="form-control" type="date" name="data_registro_paciente" id="date" value="<?php echo date("Y-m-d"); ?>" required>
                              </div>
                            </div>
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

  <!-- MODAL DE PACIENTES CADASTRADOS POR MES -->
                 <div class="modal fade" id="ModalPacienteMes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE O MÊS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Paciente/RelatorioPacienteMes.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">
                            <label for="mes_registro_paciente">MÊS DE CADASTRO:</label>
                            <select class="custom-select" style="text-transform: uppercase;" name="mes_registro_paciente">
                                <option value="Janeiro">JANEIRO</option>
                                <option value="Fevereiro">FEVEREIRO</option>
                                <option value="Marco">MARÇO</option>
                                <option value="Abril">ABRIL</option>
                                <option value="Maio">MAIO</option>
                                <option value="Junho">JUNHO</option>
                                <option value="Julho">JULHO</option>
                                <option value="Agosto">AGOSTO</option>
                                <option value="Setembro">SETEMBRO</option>
                                <option value="Outubro">OUTUBRO</option>
                                <option value="Novembro">NOVEMBRO</option>
                                <option value="Dezembro">DEZEMBRO</option>
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

  <!-- MODAL DE PACIENTES CADASTRADOS POR ANO -->
                 <div class="modal fade" id="ModalPacienteMes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE O MÊS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Paciente/RelatorioPacienteMes.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">
                            <label for="mes_registro_paciente">MÊS DE CADASTRO:</label>
                            <select class="custom-select" style="text-transform: uppercase;" name="mes_registro_paciente">
                                <option value="Janeiro">JANEIRO</option>
                                <option value="Fevereiro">FEVEREIRO</option>
                                <option value="Marco">MARÇO</option>
                                <option value="Abril">ABRIL</option>
                                <option value="Maio">MAIO</option>
                                <option value="Junho">JUNHO</option>
                                <option value="Julho">JULHO</option>
                                <option value="Agosto">AGOSTO</option>
                                <option value="Setembro">SETEMBRO</option>
                                <option value="Outubro">OUTUBRO</option>
                                <option value="Novembro">NOVEMBRO</option>
                                <option value="Dezembro">DEZEMBRO</option>
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

  <!-- MODAL DE PACIENTES CADASTRADOS POR ANO -->
                 <div class="modal fade" id="ModalPacienteAno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE O ANO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Paciente/RelatorioPacienteAno.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="form-group col-sm-6" style="margin: 0 auto; ">
                                <label for="date">ANO DE CADASTRO:</label>
                                <input type="text" name="anoRegistroPaciente" id="anoCadastro" class="form-control" required>
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

   <!-- MODAL DE PACIENTES POR MES DE NASCIMENTO -->
                 <div class="modal fade" id="ModalPacienteMesNiver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE O ANO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Paciente/RelatorioPacienteMesNiver.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">
                            <label for="mes_registro_paciente">MÊS DE NASCIMENTO:</label>
                            <select class="custom-select" style="text-transform: uppercase;" name="dataMesNiver">
                                <option value="Janeiro">JANEIRO</option>
                                <option value="Fevereiro">FEVEREIRO</option>
                                <option value="Marco">MARÇO</option>
                                <option value="Abril">ABRIL</option>
                                <option value="Maio">MAIO</option>
                                <option value="Junho">JUNHO</option>
                                <option value="Julho">JULHO</option>
                                <option value="Agosto">AGOSTO</option>
                                <option value="Setembro">SETEMBRO</option>
                                <option value="Outubro">OUTUBRO</option>
                                <option value="Novembro">NOVEMBRO</option>
                                <option value="Dezembro">DEZEMBRO</option>
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

  <!-- MODAL DE PACIENTES POR ANO DE NASCIMENTO -->
                 <div class="modal fade" id="ModalPacienteAnoNiver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE O ANO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Paciente/RelatorioPacienteAnoNiver.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="form-group col-sm-6" style="margin: 0 auto; ">
                                <label for="date">ANO DE NASCIMENTO:</label>
                                <input type="text" name="dataAnoNiver" id="anoCadastro" class="form-control" required>
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

 