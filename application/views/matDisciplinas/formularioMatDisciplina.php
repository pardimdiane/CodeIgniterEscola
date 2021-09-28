<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min") ?>">
        <link rel="stylesheet" href="<?= base_url("bootstrap/css2/estilo.css") ?>">


        <title>Sistema Escolar - Cadastro</title>
    </head>
    <body>
        <div class="container">

            <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>


            <div class="botoes">
                <?= anchor("alunos/index", "Alunos", array("class" => "btn btn-primary")) //Lista aluno?>

                <?= anchor("cursos/listar", "Cursos", array("class" => "btn btn-primary")) //Lista curso?>

                <?= anchor("disciplinas/listar", "Disciplinas", array("class" => "btn btn-primary")) //Nova disciplina?>

                <?= anchor("matriculas/listar", "Matricular", array("class" => "btn btn-primary")) //Nova matricula?>

                <?= anchor("", "Matrícula em disciplinas", array("class" => "btn btn-primary")) //Nova matdisc?>

                <?= anchor("", "Notas", array("class" => "btn btn-primary")) //Nova matricula?>

                <?= anchor("professor/listar", "Professores", array("class" => "btn btn-primary")) //Novo professor?>

                <?= anchor("semestre/listar", "Semestres", array("class" => "btn btn-primary")) //Novo semestre?>

                <?= anchor("turma/listar", "Turmas", array("class" => "btn btn-primary")) //Nova turma?>

                <?= anchor("usuarios/formulario", "Usuários", array("class" => "btn btn-primary")) //Novo usuario?>

              

                <?= anchor("login/logout", "Sair", array("class" => "btn btn-primary")) //Logout?> 


            </div>
           

            <h2>Matricular em Disciplinas</h2>
            
            <?php echo form_open("MatDisciplina/novo")?> 
                <input type="hidden" name="CDMATRICULA" value="">

                <div class="form-group">
                    <label>Aluno</label>   
                    <select class="form-control" name="cdaluno" required>
                        <option>Selecione o aluno</option>
                        <?php foreach ($alunos as $aluno){ //Faz um for e percorre a tabela DISCIPLINA?>
                        <option value="<?= $aluno->CDALUNO?>"> <?= $aluno->NOME; //Pega o id e nome do aluno?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Média</label>
                    <input type="decimal" name="valor" class="form-control"  required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <input type="decimal" name="valor" class="form-control"  required>
                </div>

                <div class="form-group">
                    <label>Professor</label>   
                    <select class="form-control" name="cdaluno" required>
                        <option>Selecione o aluno</option>
                        <?php foreach ($alunos as $aluno){ //Faz um for e percorre a tabela PROFESSOR?>
                        <option value="<?= $aluno->CDALUNO?>"> <?= $aluno->NOME; //Pega o id e nome do aluno?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Valor</label>
                    <input type="decimal" name="valor" class="form-control"  required>
                </div>

                


                



                <button type="submit" class="btn btn-primary">Cadastrar</button>
            <?php echo form_close()?>




        </div>

    </body>

</html>