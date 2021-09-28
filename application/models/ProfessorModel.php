<?php
    class ProfessorModel extends CI_Model{
        public function buscaProfessores(){ //Lista professor
            return $this->db->get("professor")->result_array();
           
        }

        public function salva($professor){ //Insere no bd
            $this->db->insert("professor", $professor);
        }

        public function deletarProfessores($id){ //Pega o id do professor selecionado
            $this->db->where('CDPROFESSOR', $id); //compara os dois ids
            $this->db->delete('professor'); //e deleta
            return true;
        }


        public function buscar($buscaProf){
            if(empty($buscaProf)){
                return array();
            }
                

            $buscaProf = $this->input->post('buscaProf'); //O que digitar na view, este joga nesta variável

            $this->db->like('nome', $buscaProf); //Pega e compara com o campo "nome" na tabela
            $query = $this->db->get('professor');
            return $query->result_array();

        }

    
        
    }