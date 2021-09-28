<?php
    class alunosModel extends CI_Model{
        public function buscaAlunos(){
            return $this->db->get("aluno")->result_array();
           
        }


        public function salva($aluno){
            $this->db->insert("aluno", $aluno); //Na tabela aluno, insere $aluno(variavel)
        }


        public function deletarAlunos($id){ //Pega o id do produto selecionado
            $this->db->where('CDALUNO', $id); //compara os dois ids
            $this->db->delete('aluno'); //e deleta
            return true;
        }


        public function buscar($buscaNome){
            if(empty($buscaNome)){
                return array();
            }
                

            $buscaNome = $this->input->post('buscaNome'); //O que digitar na view, este joga nesta variável

            $this->db->like('nome', $buscaNome); //Pega e compara com o campo "nome" na tabela
            $query = $this->db->get('aluno');
            return $query->result_array();

        }



        
    }