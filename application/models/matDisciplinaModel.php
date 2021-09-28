<?php
    class DisciplinasModel extends CI_Model{
        public function (){
            $this->db->select('*');
            $this->db->join('professor', 'disciplina.cdprofessor = professor.cdprofessor', 'inner');
            return $this->db->get('disciplina')->result_array();
        }


        public function salva($disciplina){
            $this->db->insert("disciplina", $disciplina);
        }

        public function retornaDisciplinas(){
            $dados = $this->db->get('disciplina')->result();
            return $dados;   
            //Variavel dados recebe o select do banco e depois retorna.
        }

        
        public function retornaProfessores(){
            $dados = $this->db->get('professor')->result();
            return $dados;   
            //Variavel dados recebe o select do banco e depois retorna.
        }
            
        
    
        
    }