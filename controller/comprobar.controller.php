<?php

class ComprobarController {
    
    public function Validar()
    {
        if(!empty($_POST)){

            $data = array();

            $numero = floatval($_POST['numero']);

            $data['Respuesta:'] = true;

            if(($numero % 2) == 0) {
                //par
                $data['Numero evaluado:'] = $numero . ' es par';
            }
            else
            {
                //impar
                $data['Numero evaluado:'] = $numero . ' es impar';
            }
        }
        else
        {
            $data['Respuesta:'] = false;
        }
        

        echo Json_encode($data);
    }

    public function Index() 
    {
        require_once 'view/index.php';
    }
}