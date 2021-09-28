<!-- /. NAV SIDE CORPO  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Cadastro de disciplina</h2>   
                <h5>Cadastre as informações da disciplina. </h5>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Preencha os campos
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form role="form"  action="<?php echo base_url('disciplinas/novo'); ?>" method="post">
                                    <div class="form-group">
                                        <label>Nome da disciplina</label>
                                        <input type="text" name="nomedisciplina" class="form-control"  required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="cdprofessor" required>
                                            <option> Selecione o professor</option>
                                            <?php foreach ($professores as $professor) { //Faz um for e percorre a tabela?>
                                            <option value="<?= $professor->CDPROFESSOR?>"> <?= $professor->NOME; //Pega o id e nome do professor?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Valor</label>
                                        <input type="decimal" name="valor" class="form-control"  required>
                                    </div>
                                        <button type="submit" class="btn btn-default">Cadastrar</button>        
                                </form>                          
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- End Form Elements -->
            </div>
        </div>     
    </div>                   
  

<!-- FIM page-wrapper -->   