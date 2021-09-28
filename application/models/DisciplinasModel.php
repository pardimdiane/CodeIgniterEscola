<?php
    class DisciplinasModel extends CI_Model{
        public function buscaDisciplinas(){
            $this->db->select('*');
            $this->db->join('professor', 'disciplina.cdprofessor = professor.cdprofessor', 'inner');
            return $this->db->get('disciplina')->result_array();
        }


        public function salva($disciplina){
            $this->db->insert("disciplina", $disciplina);
        }

        public function retornaProfessores(){
            $dados = $this->db->get('professor')->result();
            return $dados;   
            //Variavel dados recebe o select do banco e depois retorna.
        }



        public function buscar($buscaDisc){
            if(empty($buscaDisc)){
                return array();
            }
                

            $buscaDisc = $this->input->post('buscaDisc'); //O que digitar na view, este joga nesta variável

            $this->db->like('nomedisciplina', $buscaDisc); //Pega e compara com o campo "nome" na tabela
            $this->db->select('*');
            $this->db->join('professor', 'disciplina.cdprofessor = professor.cdprofessor', 'inner'); //Unir com a tabela professor
            $query = $this->db->get('disciplina');
            return $query->result_array();

        }
            
        
    
        
    }