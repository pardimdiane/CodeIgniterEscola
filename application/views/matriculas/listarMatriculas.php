<!-- /. NAV SIDE CORPO  -->
<div id="page-wrapper" >
    <div id="page-inner">
    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Matrículas</h3>
                    <a href="<?php echo base_url('matriculas/formulario'); ?>" class="btn btn-primary">Nova matrícula</a>
                </div>
        <div class="panel-body"> 
            
        </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Aluno</th>
                            <th>Semestre</th>
                            <th>Valor</th>
                            <th>Turma</th>
                            <th></th>
                            
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($matricula as $mat) : ?>
                            <tr>
                                
                                <td><?= $mat['NOMECURSO']?> </td>
                                <td><?= $mat['NOME']?> </td>
                                <td><?= $mat['ANO']?> </td>
                                <td><?= $mat['VALOR']?> </td>
                                <td><?= $mat['NOMETURMA']?> </td>
                                
                                <td><a href="<?= base_url('index.php/matDisciplina/novo'.$mat['CDMATRICULA']); ?>" class="btn btn-success">Matricular em disciplinas</a></td>
                                <td><a href="" class="btn btn-warning">Editar</a></td>

                            </tr>
                        <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                    
                    
</div>