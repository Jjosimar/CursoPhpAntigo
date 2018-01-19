<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados' => array(
            //inicio: diretor inicial comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                 'subordinados' => array(
                    //inicio gerente de vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //termino gerente de vendas

                 )
            ),
            //Termino: diretor inicial comercial
            //INICIO: diretor financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados' => array(
                    //INICIO gerente de contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados'=>array(
                            //Inicio supervisor de pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Termino supervisor de pagamentos
                        )
                     ),
                    //termino gerente de contas a pagar
                    //Inicio:gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Inicio: supervisor de suprimentos
                            array(
                                'nome_cargo'=>'supervisor de suprimentos'
                            )
                            //termino: supervisor de suprimentos
                        )
                    )
                )
            )
             //Termino: diretor financeiro
        )
    )
 );


 function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .= "<li>";

        $html.=$cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .=exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .="</ul>"; //.= para ir alcumulando

    return $html;
 }

 echo exibe($hierarquia);

?>