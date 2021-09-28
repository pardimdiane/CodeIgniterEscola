<?php
    class SemestreModel extends CI_Model{
        public function buscaSemestres(){ //Lista semestre
            return $this->db->get("semestre")->result_array();
           
        }

        public function salva($semestre){ //Insere no bd
            $this->db->insert("semestre", $semestre);
        }

        public function deletarSemestres($id){ //Pega o id do semestre selecionado
            $this->db->where('CDSEMESTRE', $id); //compara os dois ids
            $this->db->delete('semestre'); //e deleta
            return true;
        }


        public function buscar($buscaSem){
            if(empty($buscaSem)){
                return array();
            }
                

            $buscaSem = $this->input->post('buscaSem'); //O que digitar na view, este joga nesta variável

            $this->db->like('ano', $buscaSem); //Pega e compara com o campo "nome" na tabela
            $query = $this->db->get('semestre');
            return $query->result_array();

        }

    
        
    }