<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculas extends CI_Controller {
        
        
        public function formulario(){ //Formulario das matriculas
                $this->load->model('matriculasModel');


                //Array de inserção
                $variavel['cursos'] = $this->matriculasModel->retornaCursos();
                $variavel['alunos'] = $this->matriculasModel->retornaAlunos();
                $variavel['semestres'] = $this->matriculasModel->retornaSemestres();
                $variavel['turmas'] = $this->matriculasModel->retornaTurmas();


                $this->load->view('templates/header');
                $this->load->view('matriculas/formularioMatricula', $variavel);
                $this->load->view('templates/footer');
          

        }

        public function Sair(){
                $this->load->view("usuarios/login");
                $this->session->unset_userdata("Usuário logado");
        }
        

        public function novo(){ //Cadastra nova matricula 
                $matricula = [
                      "cdcurso" => $this->input->post("cdcurso"),
                      "cdaluno" =>$this->input->post("cdaluno"),
                      "cdsemestre" => $this->input->post("cdsemestre"),
                      "valor" => $this->input->post("valor"),
                      "cdturma" =>$this->input->post("cdturma")  
                ];

                $this->load->model("matriculasModel");
                $this->matriculasModel->salva($matricula);
                $this->session->set_flashdata("success", "Matrícula realizada com sucesso!");

                redirect ('matriculas/listar');
        }


        public function listar(){
                $this->load->model("matriculasModel");
                $lista = $this->matriculasModel->buscaMatriculas();
                $dados = array("matricula" => $lista);  //Dados é variável que recebe o array da tabela matricula
                $this->load->view('templates/header', $dados);
                $this->load->view("matriculas/listarMatriculas",$dados);
                $this->load->view('templates/footer', $dados);
                

        }


        public function index(){ //Listar alunos
                $this->load->model("alunosModel");
                $lista = $this->alunosModel->buscaAlunos();  //Lista é variável q recebe o comando
                $dados = array("aluno" => $lista);  //Dados é variável que recebe o array da tabela aluno
                $this->load->view('templates/header', $dados);
                $this->load->view('alunos/index', $dados); //Passa $dados para minha view
                $this->load->view('templates/footer', $dados);
        }




}
