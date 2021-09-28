<?php
    class CursosModel extends CI_Model{
        public function buscaCursos(){//Lista curso
            return $this->db->get("curso")->result_array();
           
        }

        public function salva($curso){ //Insere no bd
            $this->db->insert("curso", $curso);
        }


        public function buscar($buscaCurso){ //Pesquisa curso
            if(empty($buscaCurso)){
                return array();
            }

            $buscaCurso = $this->input->post('buscaCurso');
            $this->db->like('nomecurso', $buscaCurso);
            $query = $this->db->get('curso');
            return $query->result_array(); 
        }

        /*public function deletarCursos($id){ //Pega o id do curso selecionado
            $this->db->where('CDCURSO', $id); //compara os dois ids
            $this->db->delete('curso'); //e deleta
            return true;
        }*/


    
        
    }