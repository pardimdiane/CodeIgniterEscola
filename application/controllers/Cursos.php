<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
        public function listar(){
                $this->load->model("cursosModel");
                $lista = $this->cursosModel->buscaCursos();  //Lista é variável q recebe o comando
                $dados = array("curso" => $lista);  //Dados é variável que recebe o array da tabela curso
                $this->load->view('templates/header', $dados);
                $this->load->view("cursos/listarCursos",$dados);
                $this->load->view('templates/footer', $dados);

        }
        
        public function formulario(){ //Formulario dos cursos
                $this->load->view('templates/header');  
                $this->load->view("cursos/formularioCurso");
                $this->load->view('templates/footer');
         
        }

        public function Sair(){
		$this->load->view("usuarios/login");
		$this->session->unset_userdata("Usuário logado");
	}


        public function novo(){ //Cadastra novo curso 
                $curso = [
                      "nomecurso" => $this->input->post("nomecurso"),
                      "valorcurso" => $this->input->post("valorcurso")  
                ];

                $this->load->model("cursosModel");
                $this->cursosModel->salva($curso);
                $this->session->set_flashdata("success", "Curso cadastrado com sucesso!");

                redirect ('cursos/listar');
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
                $this->load->model('CursosModel');
                $dados['listagem'] = $this->CursosModel->buscar($_POST);
                $this->load->view('cursos/pesquisar', $dados);
                $this->load->view('templates/footer');
        }

        /*public function delete($id){
                $this->load->model("cursosModel");
                $this->cursosModel->deletarCursos($id);
                $this->session->set_flashdata('success', 'Excluído com sucesso!');
                
                redirect('cursos/listar');
        }*/

}
