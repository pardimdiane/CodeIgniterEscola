<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function formulario(){ //Formulario 
		$this->load->view('templates/header');
		$this->load->view("usuarios/formularioUsuario");
		$this->load->view('templates/footer');
    
	}

	public function Sair(){
		$this->load->view("usuarios/login");
		$this->session->unset_userdata("Usuário logado");
	}


	public function novo(){ //Cadastra novo usuario
		$usuario = [
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"senha" => md5($this->input->post("senha"))
		];

		$this->load->model("usuariosModel"); //Salva no banco
		$this->usuariosModel->salva($usuario);
		$this->session->set_flashdata("success", "Usuário cadastrado com sucesso!");

                redirect ('Usuarios/formulario');

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
