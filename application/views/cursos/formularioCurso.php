<!-- /. NAV SIDE CORPO  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Cadastro de curso</h2>   
                <h5>Cadastre as informações do curso. </h5>
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
                                <form role="form"  action="<?php echo base_url('cursos/novo'); ?>" method="post">
                                    <div class="form-group">
                                        <label>Nome do curso</label>
                                        <input type="text" name="nomecurso" class="form-control"  required>
                                    </div>
                                    <div class="form-group">
                                        <label>Valor do curso</label>
                                        <input type="decimal" name="valorcurso" class="form-control" required>
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