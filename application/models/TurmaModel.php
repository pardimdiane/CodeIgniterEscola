<?php
    class TurmaModel extends CI_Model{
        public function buscaTurmas(){ //Lista turma
            return $this->db->get("turma")->result_array();
           
        }

        public function salva($turma){
            $this->db->insert("turma", $turma);
        }

        public function deletarTurmas($id){ //Pega o id do turma selecionada
            $this->db->where('CDTURMA', $id); //compara os dois ids
            $this->db->delete('turma'); //e deleta
            return true;
        }


        public function buscar($buscaTurma){
            if(empty($buscaTurma)){
                return array();
            }
                

            $buscaTurma = $this->input->post('buscaTurma'); //O que digitar na view, este joga nesta variável

            $this->db->like('nometurma', $buscaTurma); //Pega e compara com o campo "nome" na tabela
            $query = $this->db->get('turma');
            return $query->result_array();

        }

    
        
    }