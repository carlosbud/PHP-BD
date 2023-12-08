<?php
    include __DIR__.'/cabecalho.php';
?>    

        <!-------------------------------INICIO DA CONSTRUÇÃO DO CADASTRO----------------->
        
        
        <form method="post" name="cadastro-jogo" enctype="multipart/form-data" action="switch.php"> 
            <input  type='hidden' name='acao' value='inserir'>
            
            
            <div class="cadastro">

                <div class="cad" id="cadastro">

                    <h1>Cadastro de Jogo</h1>

                    

                    <input  type='hidden' name='acao' value='inserir'>

                    <input type="text" id="nome" name="modalidade" placeholder="Digite a modalidade do jogo"> <br> <br>

                    <input type="datetime-local" id="data" name="data" placeholder="Digite a data"> <br><br>

                    <input type="number" id="quantidade" name="quantidade" placeholder="Digite o número de jogadores"> <br><br>

                    <input type="radio" id="feminino" value="feminino" name="sexo">Feminino

                    <input type="radio" id="masculino" value="masculino" name="sexo">Masculino <br>

                    <input type="radio" id="ambos" value="ambos" name="sexo">Ambos <br>
                    
                    <button class='btn btn-primary' type='submit'>Enviar</button>
                    
                     
                    
                </div>

            </div>
        </form>
       


        <?php
    include __DIR__.'/rodape.php';
?>    