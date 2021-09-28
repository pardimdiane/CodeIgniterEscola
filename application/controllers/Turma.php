<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma extends CI_Controller {
        public function listar(){ 
                $this->load->model("turmaModel");
                $lista = $this->turmaModel->buscaTurmas();  //Lista é variável q recebe o comando
                $dados = array("turma" => $lista);  //Dados é variável que recebe o array da tabela turma
                $this->load->view('templates/header', $dados);
                $this->load->view("turma/listarTurmas",$dados);
                $this->load->view('templates/footer', $dados);

        }

        public function Sair(){
		$this->load->view("usuarios/login");
		$this->session->unset_userdata("Usuário logado");
	}
        
        public function formulario(){ //Formulario de turma
                $this->load->view('templates/header');
                $this->load->view("turma/formularioTurma");
                $this->load->view('templates/footer');
    
        }


        public function novo(){ //Cadastra nova turma 
                $turma = [
                      "nometurma" => $this->input->post("nometurma")
                     
                ];

                $this->load->model("turmaModel");
                $this->turmaModel->salva($turma);
                $this->session->set_flashdata("success", "Turma cadastrada com sucesso!");

                redirect ('turma/listar');
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
                $this->load->model('TurmaModel');
                $dados['listagem'] = $this->TurmaModel->buscar($_POST);
                $this->load->view('turma/pesquisar', $dados);
                $this->load->view('templates/footer');
        }


        /*public function delete($id){
                $this->load->model("turmaModel");
                $this->turmaModel->deletarTurmas($id);
                $this->session->set_flashdata('success', 'Excluído com sucesso!');
                
                redirect('turma/listar');
        }*/
}
