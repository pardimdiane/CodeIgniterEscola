<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplinas extends CI_Controller {
        public function listar(){
                $this->load->model("disciplinasModel");
                $lista = $this->disciplinasModel->buscaDisciplinas();
                $dados = array("disciplina" => $lista);  //Dados é variável que recebe o array da tabela disciplina
                $this->load->view('templates/header', $dados);
                $this->load->view("disciplinas/listarDisciplinas",$dados);
                $this->load->view('templates/footer', $dados);
        
        }
        
        public function formulario(){ //Formulario das disciplinas
                $this->load->model('disciplinasModel');
                $dados = $this->disciplinasModel->retornaProfessores();
                $data = array(
                        'professores' => $dados
                );
                $this->load->view('templates/header');
                $this->load->view("disciplinas/formularioDisciplina");
                $this->load->view('templates/footer');


        }


        public function Sair(){
		$this->load->view("usuarios/login");
		$this->session->unset_userdata("Usuário logado");
	}


        public function novo(){ //Cadastra nova disciplina 
                $disciplina = [
                      "nomedisciplina" => $this->input->post("nomedisciplina"),
                      "cdprofessor" =>$this->input->post("cdprofessor"),
                      "valor" => $this->input->post("valor")  
                ];

                $this->load->model("disciplinasModel");
                $this->disciplinasModel->salva($disciplina);
                $this->session->set_flashdata("success", "Disciplina cadastrada com sucesso!");

                redirect ('disciplinas/listar');
        }


        public function index(){ //Listar alunos
                $this->load->model("alunosModel");
                $lista = $this->alunosModel->buscaAlunos();  //Lista é variável q recebe o comando
                $dados = array("aluno" => $lista);  //Dados é variável que recebe o array da tabela aluno
                $this->load->view('templates/header', $dados);
                $this->load->view('alunos/index', $dados); //Passa $dados para minha view
                $this->load->view('templates/footer', $dados);
        }


        public function pesquisar(){
                $this->load->view('templates/header');
                $this->load->model('DisciplinasModel');
                $dados['listagem'] = $this->DisciplinasModel->buscar($_POST);
                $this->load->view('disciplinas/pesquisar', $dados);
                $this->load->view('templates/footer');
        }
}
