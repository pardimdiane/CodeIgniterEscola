<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {

	public function index(){ //Listar alunos
                $this->load->model("alunosModel");
                $lista = $this->alunosModel->buscaAlunos();  //Lista é variável q recebe o comando
                $dados = array("aluno" => $lista);  //Dados é variável que recebe o array da tabela aluno
                $this->load->view('templates/header', $dados);
                $this->load->view('alunos/index', $dados); //Passa $dados para minha view
                $this->load->view('templates/footer', $dados);
        }

        public function Sair(){
                $this->load->view("usuarios/login");
                $this->session->unset_userdata("Usuário logado");
        }

        

        public function formulario(){ //Função que chama o formulario
                $this->load->view('templates/header');
                $this->load->view("alunos/formulario");
                $this->load->view('templates/footer');
        }


        public function novo(){ //Cadastra novo aluno 
                $aluno = [
                      "nome" => $this->input->post("nome"),
                      "nmatricula" => $this->input->post("nmatricula")  
                ];

                $this->load->model("alunosModel");
                $this->alunosModel->salva($aluno);
                $this->session->set_flashdata("success", "Aluno cadastrado com sucesso!");

                redirect ('Alunos/index');
        }


        public function pesquisar(){
                $this->load->view('templates/header');
                $this->load->model('AlunosModel');
                $dados['listagem'] = $this->AlunosModel->buscar($_POST);
                $this->load->view('alunos/pesquisar', $dados);
                $this->load->view('templates/footer');
        }

        /*public function delete($id){
                $this->load->model("alunosModel");
                $this->alunosModel->deletarAlunos($id);
                $this->session->set_flashdata('success', 'Excluído com sucesso!');
                
                redirect('/');
        }*/
}
