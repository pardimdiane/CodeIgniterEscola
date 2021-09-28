<!-- /. NAV SIDE CORPO  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Cadastro de turma</h2>   
                <h5>Cadastre as informações da turma. </h5>
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
                                <form role="form"  action="<?php echo base_url('turma/novo'); ?>" method="post">
                                    <div class="form-group">
                                        <label>Nome da turma</label>
                                        <input type="text" name="nometurma" class="form-control" required>
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