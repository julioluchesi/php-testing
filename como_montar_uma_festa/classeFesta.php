<?php

/*
 * Exercício de fixação para aula 4 do Curso em Vídeo: Métodos Getters, 
 * Setters e Construtores.

Vamos fazer uma festa!!

Precisamos de:

1 - um local para a festa
2 - Efeitos especiais
3 - Organizar os horários de entrada, inicio e saida
4 - Convidados
5 - Seguranças no evento
6 - musicos
7 - Bebidas e comidas
8 - Evento de encerramento
9 - Saida sem tumulto 

atributos
	horario da festa
	tipo de musica que vai tocar
	quantas pessoas cabem
	local onde vai ocorrer

métodos
	a festa está acontecendo ou não?
	a entrada da festa está aberta ou fechada?
	os seguranças estão na festa?
	acionar luzes e fumaça
	
 */

class Festa {
    
    //Atributos
        private $local; //string
        private $portoes; //true:aberto / false:fechado
        private $pessoas; //boolean
        private $seguranca; //bollean
        private $comesBebes; //bollean
        public $festa; //bollean        
         
    //MÉTODOS
        
      //====================================
      // Festa
      public function iniciaFesta(){
          if ($this->portoes === true) {
                return "Pra festa começar, só com os portões fechados!!";
          } else {   
              $this->festa = true;    
              return "Portões fechados!! Vamos começar o show!!";  
              
                
          }      
      }  

      public function encerraFesta(){
          if ($this->portoes === true){
              $this->festa = false;    
            return "Festa acabando, galera tá indo embora!";
            
          }else {
              return "Os portões estão fechados! A galera não pode sair!!";
          }
          

      }  
        
      //====================================  
      //Local da festa
      public function definirLocal($l) {
          $this->local = $l;
      }
      
      //====================================
      //Convidar pessoas     
      public function convidarPessoas () {
          $this->pessoas = true;
      }

      //====================================
      //Portões
      public function abrePortoes(){
          if ($this->pessoas === true){
            $this->portoes = true;
            return "Portões abrindo...";              
          } else{
              return "As pessoas não foram convidadas!! Abrir os portões pra que??";
          }
      }  
      public function fechaPortoes(){
        if ($this->portoes === true){
          $this->portoes = false;
          return "Portões fechando...";
        } else {
            return "Os portões nem abriram...";
        }
      }
      
      //====================================
      //Comes e bebes
      public function venderComesBebes(){
          if ($this->festa == true){
            $this->comesBebes = true;
            return "Comes e bebes sendo vendidos!";
          }else {
            return "A festa não começou ainda!! Como vender algo assim?";  
          }

      }  
     

      
    //MÉTODOS GETTERS  
      
      //====================================
      // Festa
      public function getLocal(){
         return $this->festa;
      }  

      //Convite
      public function getConvite () {
          if ($this->pessoas == true){
              return "SIMMM, a galera já foi chamada!!";
          }else {
              return "Xiii, ainda não!! Deu zica no anúncio!!";
          }
      }
      
      //Seguranças
      public function getSeguranca(){
          if($this->seguranca === true){
              return "Os seguranças já estão trabalhando forte para a festa ser um sucesso!!";
          }else {
              return "A segurança não foi chamada!! Sem eles a festa vai virar uma zona!";
          }
      }

      public function getComesBebes(){
          if ($this->comesBebes === true){
              return "Vendendo comida e bebida adoidado!!";
          } else {
              return "Deu problema com os comes e bebes! Galera tá revoltada!!";
          }
      }
      
       public function acionarSeguranca(){
          $this->seguranca = true;
      }
      
}
