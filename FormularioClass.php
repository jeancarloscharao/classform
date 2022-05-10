<?php 

class Formulario {

    public $varHtml;
    public $conteudo;
    public $rota;
    public $botaoEnviar;
    public $titulo;
    public $modal;


    public function adicionaTitulo($tituloForm){

        $this->titulo = $tituloForm;

    }

    public function adicionaRota($caminho){

        $this->rota = $caminho;
    }

    public function adicionaCampoText($label, $id, $name, $classInput = "", $classDivInput = ""){

    
        $this->conteudo = $this->conteudo . '
        <div class="mb-3 pe-1 '.$classDivInput.'" style="float: left;">
        <label>'.$label.'</label>
        <input type="text" id="'.$id.'" name="'.$name.'" class="form-control ' .$classInput.'">
        </div>';


    }

    public function adicionaCampoPassword($label, $id, $name, $classInput = "", $classDivInput = ""){

    
        $this->conteudo = $this->conteudo . '
        <div class="mb-3 pe-1 '.$classDivInput.'" style="float: left;">
        <label>'.$label.'</label>
        <input type="password" id="'.$id.'" name="'.$name.'" class="form-control ' .$classInput.'">
        </div>';


    }



    public function adicionaCampoSelect($label = "", $id = "", $name = "", $classSelect = "", $classDivSelect = "", $opcoes = [['value' => "", 'label' => ""]]){

        $this->conteudo = $this->conteudo . '
        <div class="mb-3 pe-1 '.$classDivSelect.'" style="float: left;">
        <label>'.$label.'</label>';
        $this->conteudo = $this->conteudo . '<select id="'.$id.'" name="'.$name.'" class="form-control '.$classSelect.'">';
        if(count($opcoes) > 0){
            foreach($opcoes as $opcao){
               $this->conteudo = $this->conteudo . '<option value="'.$opcao['value'].'">'.$opcao['label'].'</option>';
            }
        }
        $this->conteudo = $this->conteudo . '</select>';
        $this->conteudo = $this->conteudo . '</div>';

   
    }


    public function adicionaCampoSelectMais($label = "", $id = "", $name = "", $classSelect = "", $classDivSelect = "", $opcoes = [['value' => "", 'label' => ""]]){

        $this->conteudo = $this->conteudo . '
        <div class="mb-3 pe-1 '.$classDivSelect.'" style="float: left;">
        <label>'.$label.'</label>';
        $this->conteudo = $this->conteudo . '<div class="row pe-4"><div class="col-md-11"><select id="'.$id.'" name="'.$name.'" class="form-control '.$classSelect.'" style="width: 105%;">';
        if(count($opcoes) > 0){
            foreach($opcoes as $opcao){
               $this->conteudo = $this->conteudo . '<option value="'.$opcao['value'].'">'.$opcao['label'].'</option>';
            }
        }
        $this->conteudo = $this->conteudo . '</select></div><div class="col-md-1"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button></div></div>';
        $this->conteudo = $this->conteudo . '</div>';


       $this->adicionaModal();

   
    }



    public function adicionaBotaoEnviar($titulo = "Enviar", $id = "", $name ="", $class = ""){

        $this->botaoEnviar = '<button type="submit" id="'.$id.'" name="'.$name.'" class="btn '.$class.'">'.$titulo.'</button>';


    }

    public function renderiza(){

        $this->html = '<div class="container">
        <form 
         method="POST"
         action="'.$this->rota.'"
         > 
         <h3>'.$this->titulo . '</h3>'
         . $this->conteudo . '

         '. $this->botaoEnviar .'

        </form>
        </div>';
        echo $this->html;

    }


    public function dd($conteudo){
        
            echo "<pre>";
            var_dump($conteudo);
            echo "</pre>";
    }





    public function adicionaModal($label = "", $name = "", $id = ""){


       $this->modal = '
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
            
            <div class="mb-3 pe-1 col-md-12" style="float: left;">
        <label>Profissão</label>
        <input type="text" id="profissao" name="profissao" class="form-control" autofocus>
        </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
            </div>
        </div>
        </div>
        ';


        echo $this->modal;



    }


}


