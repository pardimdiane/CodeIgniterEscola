<?php
    class MatriculasModel extends CI_Model{
        public function salva($matricula){ //Cadastra matrícula
            $this->db->insert("matricula", $matricula);
        }

        public function retornaCursos(){
            $dados = $this->db->get('curso')->result();
            return $dados;   
            //Variavel dados recebe o select do banco e depois retorna.
        }

        
        public function retornaAlunos(){
            $dadosAlunos = $this->db->get('aluno')->result();
            return $dadosAlunos;   
            //Variavel dados recebe o select do banco e depois retorna.
        }


        public function retornaSemestres(){
            $dadosSem = $this->db->get('semestre')->result();
            return $dadosSem;   
            //Variavel dadosSem recebe o select do banco e depois retorna.
        }


        public function retornaTurmas(){
            $dadosTur = $this->db->get('turma')->result();
            return $dadosTur;   
            //Variavel dadosSem recebe o select do banco e depois retorna.
        }


        public function buscaMatriculas(){//Lista matricula
            $this->db->select('*');
            $this->db->join('aluno', 'matricula.cdaluno = aluno.cdaluno', 'inner');
            $this->db->join('curso', 'matricula.cdcurso = curso.cdcurso', 'inner');
            $this->db->join('semestre', 'matricula.cdsemestre = semestre.cdsemestre', 'inner');
            $this->db->join('turma', 'matricula.cdturma = turma.cdturma', 'inner');
            return $this->db->get('matricula')->result_array();
           
        }
           
            
        
    
        
    }