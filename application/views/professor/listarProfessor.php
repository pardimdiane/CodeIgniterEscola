<!-- /. NAV SIDE CORPO  -->
<div id="page-wrapper" >
    <div id="page-inner">
    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Professores</h3>
                    <a href="<?php echo base_url('professor/formulario'); ?>" class="btn btn-primary">Cadastrar Professor</a>
                </div>
        <div class="panel-body"> 
            <form class="form-inline my-2 my-lg-0" action="<?php echo base_url('Professor/pesquisar'); ?>" method="post">
                <input class="form-control mr-sm-2" type="text" name="buscaProf" placeholder="Pesquisar por nome" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>     
        </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($professor as $prof) : ?>
                            <tr>
                                <td><?= $prof['NOME']?> </td>
                                <td><a href="" class="btn btn-warning">Editar</a></td>
   
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                    
                    
</div>