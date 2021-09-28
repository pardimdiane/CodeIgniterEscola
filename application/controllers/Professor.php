<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {
        public function listar(){
                $this->load->model("professorModel");
                $lista = $this->professorModel->buscaProfessores();  //Lista é variável q recebe o comando
                $dados = array("professor" => $lista);  //Dados é variável que recebe o array da tabela professor
                $this->load->view('templates/header', $dados);
                $this->load->view("professor/listarProfessor",$dados);
                $this->load->view('templates/footer', $dados);
              

        }
        
        public function formulario(){ //Formulario de professor
                $this->load->view('templates/header');
                $this->load->view("professor/formularioProfessor");
                $this->load->view('templates/footer');
           
        }

        public function Sair(){
		$this->load->view("usuarios/login");
		$this->session->unset_userdata("Usuário logado");
	}


        public function novo(){ //Cadastra novo professor 
                $professor = [
                      "nome" => $this->input->post("nome")
                     
                ];

                $this->load->model("professorModel");
                $this->professorModel->salva($professor);
                $this->session->set_flashdata("success", "Professor cadastrado com sucesso!");

                redirect ('professor/listar');
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
                $this->load->model('ProfessorModel');
                $dados['listagem'] = $this->ProfessorModel->buscar($_POST);
                $this->load->view('professor/pesquisar', $dados);
                $this->load->view('templates/footer');
        }


        /*public function delete($id){
                $this->load->model("professorModel");
                $this->professorModel->deletarProfessores($id);
                $this->session->set_flashdata('success', 'Excluído com sucesso!');
                
                redirect('professor/listar');
        }*/
}
