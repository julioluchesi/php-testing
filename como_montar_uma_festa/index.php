<!DOCTYPE html>
<!--
Exercício de fixação para aula 4 do Curso em Vídeo: Métodos Getters, 
Setters e Construtores.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'classeFesta.php';
            
            // vamos criar a festa!
            $f1 = new Festa();
            
            print_r($f1);

            // Vamos achar um lugar para a festa
            $f1->definirLocal("Estádio Allianz Parque");
            print "A festa ainda não começou, mas vamos ao preparativos!!!";
            echo "<br />";
            print "O local da festa é no: {$f1->getLocal()}";
            
            // Já convidamos as pessoas?
            //$f1->convidarPessoas();
            echo "<br />";
            print "A galera já foi chamada?? {$f1->getConvite()}";
            
            // Dia da festa, acionar a segurança para organizar tudo!
            $f1->acionarSeguranca();
            echo "<br />";
            print "Falando sobre a segurança: {$f1->getSeguranca()}";
            echo "<br />";
    
            // Dia da festa! Horario de entrada. Portões já abriram?
            print "{$f1->abrePortoes()}";
            echo "<br />";
            
            // Dia da festa! Horario de inicio. Agora nínguem mais entra!
            print "Agora sim, a festa vai começar!!";
            echo "{$f1->fechaPortoes()}";
            echo "<br />";
            echo "{$f1->iniciaFesta()}";
            echo "<br />";

            
            // Festa rolando! Vamos vender bebidas e comidas!
            print "Festa rolando! Comes e bebes estão sendo vendidos?";
            echo "<br />";
            print $f1->venderComesBebes();
            echo "<br />";
            
            // Festa no fim, acionar o evento de encerramento!
            print "Que show fantástico! Mas infelizmente a festa está acabando...";
            echo "<br />";
            echo "{$f1->abrePortoes()}";
            echo "<br />";
            echo "{$f1->encerraFesta()}";
            echo "<br />";
            echo "{$f1->fechaPortoes()}";
            echo "<br />";   

        ?>
        </pre>
    </body>
</html>
