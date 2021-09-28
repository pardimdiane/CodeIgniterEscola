<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semestre extends CI_Controller {
        public function listar(){ 
                $this->load->model("semestreModel");
                $lista = $this->semestreModel->buscaSemestres();  //Lista é variável q recebe o comando
                $dados = array("semestre" => $lista);  //Dados é variável que recebe o array da tabela semestre
                $this->load->view('templates/header', $dados);
                $this->load->view("semestre/listarSemestres",$dados);
                $this->load->view('templates/footer', $dados);
          

        }
        
        public function formulario(){ //Formulario do semestre
                $this->load->view('templates/header');
                $this->load->view("semestre/formularioSemestre");
                $this->load->view('templates/footer');
           
        }

        public function Sair(){
		$this->load->view("usuarios/login");
		$this->session->unset_userdata("Usuário logado");
	}


        public function novo(){ //Cadastra novo semestre 
                $semestre = [
                      "ano" => $this->input->post("ano")
                     
                ];

                $this->load->model("semestreModel");
                $this->semestreModel->salva($semestre);
                $this->session->set_flashdata("success", "Semestre cadastrado com sucesso!");

                redirect ('semestre/listar');
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
                $this->load->model('SemestreModel');
                $dados['listagem'] = $this->SemestreModel->buscar($_POST);
                $this->load->view('semestre/pesquisar', $dados);
                $this->load->view('templates/footer');
        }


        /*public function delete($id){
                $this->load->model("semestreModel");
                $this->semestreModel->deletarSemestres($id);
                $this->session->set_flashdata('success', 'Excluído com sucesso!');
                
                redirect('semestre/listar');
        }*/
}
