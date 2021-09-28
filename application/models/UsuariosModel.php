<?php
    class UsuariosModel extends CI_Model{
        public function salva($usuario){
            $this->db->insert("usuarios", $usuario);
        }

        public function logarUsuarios($email, $senha){
            $this->db->where("email", $email); //Compara os emails e senha e leva pra variavel usuario
            $this->db->where("senha", $senha);

            $usuario = $this->db->get("usuarios")->row_array(); //Variável pega da tabela usuario uma linha do array
            return $usuario;
        }
    
        
    }