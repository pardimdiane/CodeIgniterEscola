<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema acadêmico</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>public/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url(); ?>public/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>public/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='index'>SisAcademic</a> 
        </div>
        <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
       <a href='Sair' class="btn btn-danger square-btn-adjust">Sair</a> 
       </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url(); ?>public/img/fotoPer.png" class="user-image img-responsive">
					</li>
                     <li>
                        <a href="<?php echo base_url('Alunos/index');?>"><i class=""></i>Alunos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Cursos/listar');?>"><i class=""></i>Cursos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Disciplinas/listar');?>"><i class=""></i>Disciplinas</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Professor/listar');?>"><i class=""></i>Professores</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Semestre/listar');?>"><i class=""></i>Semestres</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Turma/listar');?>"><i class=""></i>Turmas</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Matriculas/formulario');?>"><i class=""></i>Matrículas</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('usuarios/formulario');?>"><i class=""></i>Usuários</a>
                    </li>
                
                </ul>
               
            </div>
            
        </nav>

<!-- /. NAV SIDE CORPO  -->
