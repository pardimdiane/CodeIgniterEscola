<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $this->load->view("usuarios/login");
    }

	public function autenticar(){
       
        $email = $this->input->post("email"); //Receber o login
        $senha = md5($this->input->post("senha"));
        $this->load->model("usuariosModel"); //Na model de usuarios

        $usuario = $this->usuariosModel->logarUsuarios($email, $senha); //Passa a função da model para variavel usuario
        
        if($usuario){ //Vejo se o usuario existe
            session_start();
            $this->session->set_userdata("Usuário logado", $usuario); //Se essa sessão existe seta para ela "usuario logado" e passo o usuario
            
        }
        else{
            $this->session->set_flashdata("danger", "Usuário ou senha inválidos!");
            redirect ('Login/index');
        }

        redirect ('alunos/index');
      
    }
    
    /*public function logout(){
        $this->session->unset_userdata("Usuário logado");
        $this->session->set_flashdata("success", "Deslogado com sucesso!");

        redirect ('Login/index');
    }*/
}
