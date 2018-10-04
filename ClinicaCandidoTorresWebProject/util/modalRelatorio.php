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

   <!-- MODAL DE ESCOLHA DE SEXO -->
                 <div class="modal fade" id="ModalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE O PERIODO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="../Relatorio/Paciente/RelatorioPacienteSexo.php" method="POST" target="_blank">
                          <div class="modal-body">
                            <div class="conteudo">
                            <div class="row">             
                              <div class="form-group col-sm-6">
                                <label for="diaIni">Data Inicial:</label>
                                <input class="form-control" type="date" name="" id="diaIni">
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="diaFim">Data Final:</label>
                                <input class="form-control" type="date" name="" id="diaFim">
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