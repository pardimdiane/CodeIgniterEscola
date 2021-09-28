<!-- /. NAV SIDE CORPO  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Cadastro de usuário</h2>   
                <h5>Cadastre as informações do usuário. </h5>
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
                                <form role="form"  action="<?php echo base_url('usuarios/novo'); ?>" method="post">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Seu nome" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Seu email" required>
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control" placeholder="Sua senha" required>
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