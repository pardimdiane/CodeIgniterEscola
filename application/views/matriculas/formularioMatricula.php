<!-- /. NAV SIDE CORPO  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Matricular aluno</h2>   
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
                                <form role="form"  action="<?php echo base_url('matriculas/novo'); ?>" method="post">
                                <div class="form-group">
                            <label>Curso</label>
                            <select class="form-control" name="cdcurso" required>
                                <option> Selecione o curso</option>
                                <?php foreach ($cursos as $curso) { //Faz um for e percorre a tabela?>
                                <option value="<?= $curso->CDCURSO?>"> <?= $curso->NOMECURSO; //Pega o id e nome do curso?> </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Aluno</label>   
                            <select class="form-control" name="cdaluno" required>
                                <option>Selecione o aluno</option>
                                <?php foreach ($alunos as $aluno){ //Faz um for e percorre a tabela?>
                                <option value="<?= $aluno->CDALUNO?>"> <?= $aluno->NOME; //Pega o id e nome do aluno?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Semestre</label>
                            <select class="form-control" name="cdsemestre" required>
                                <option>Selecione o semestre</option>
                                <?php foreach ($semestres as $semestre){ //Faz um for e percorre a tabela?>
                                <option value="<?= $semestre->CDSEMESTRE?>"> <?= $semestre->ANO; //Pega o id e nome do aluno?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Valor</label>
                            <input type="decimal" name="valor" class="form-control"  required>
                        </div>

                        <div class="form-group">
                            <label>Turma</label>
                            <select class="form-control" name="cdturma" required>
                                <option>Selecione a turma</option>
                                <?php foreach ($turmas as $turma){ //Faz um for e percorre a tabela?>
                                <option value="<?= $turma->CDTURMA?>"> <?= $turma->NOMETURMA; //Pega o id e nome do aluno?></option>
                                <?php } ?>
                            </select>
                        </div>
                            <button type="submit" class="btn btn-default">Matricular</button>        
                              
              
                    </div>
                </div>
                        <!-- End Form Elements -->
            </div>
        </div>     
    </div>                   
  

<!-- FIM page-wrapper -->   