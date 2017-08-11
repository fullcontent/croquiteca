<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('routes')->delete();
        
        \DB::table('routes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-08-10 00:20:58',
                'updated_at' => NULL,
                'sector_id' => 1,
            'conquistadores' => 'Arthur Acastro Egg (Tuco) e Alexandre Lorenzetto (Sassá)',
                'anoConquista' => 1997,
                'tipo' => 'Esportiva',
                'nome' => 'Bienal',
                'descricao' => 'Linda via com lances em aderência e regletes seguindo em diagonal para a direita, com excelente movimentação. Escalada com belo visual.',
                
                'graduacao' => 'VIIb',
                'crux' => '',
                'altura' => '',
                'enfiadas' => '1',
                'protecao' => 'Chapeletas',
                'material' => '4 costuras',
                'dicas' => '',
                'croqui' => '',
                'fonteDados' => 'Guia de Escalada do Morro do Canal',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-08-10 00:53:16',
                'updated_at' => NULL,
                'sector_id' => 2,
                'conquistadores' => '',
                'anoConquista' => 2003,
                'tipo' => 'Boulder',
                'nome' => 'Preamar',
                'descricao' => '',
                
                'graduacao' => 'VIIb',
                'crux' => '',
                'altura' => '',
                'enfiadas' => '',
                'protecao' => '',
                'material' => '',
                'dicas' => '',
                'croqui' => '',
                'fonteDados' => 'Guia de escaladas em rocha - São Francisco do Sul',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2017-08-10 00:54:30',
                'updated_at' => NULL,
                'sector_id' => 2,
                'conquistadores' => '',
                'anoConquista' => 2005,
                'tipo' =>  'Boulder',
                'nome' => 'Fissurados',
                'descricao' => '',
                
                'graduacao' => 'VIsup',
                'crux' => '',
                'altura' => '',
                'enfiadas' => '',
                'protecao' => '',
                'material' => '',
                'dicas' => '',
                'croqui' => '',
                'fonteDados' => 'Guia de escaladas em rocha - São Francisco do Sul',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2017-08-10 07:53:46',
                'updated_at' => NULL,
                'sector_id' => 1,
            'conquistadores' => 'Carlos Michel (Carlera) e José Luis Verbiski (Capachão)',
                'anoConquista' => 1998,
                'tipo' => 1,
                'nome' => 'Cachorro Loko',
                'descricao' => 'Via com saída em regletes. Em seguida, passa por um balcão maroto que pode proporcionar belos vôos. Excelente.',
                
                'graduacao' => 'VIIc',
                'crux' => '',
                'altura' => '20',
                'enfiadas' => '1',
                'protecao' => 'Chapeletas',
                'material' => '5 costuras',
                'dicas' => '',
                'croqui' => '',
                'fonteDados' => 'Guia de escalada do Morro do Canal',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2017-08-10 08:00:35',
                'updated_at' => NULL,
                'sector_id' => 3,
                'conquistadores' => 'Andrey Romaniuk e Paulo Haiduke',
                'anoConquista' => 2013,
                'tipo' => 1,
                'nome' => 'Fábulas e Tragédias',
                'descricao' => 'Divertida linha em aderência, com dois crux bem definidos na parte mais empinada da parede. Após a última chapa, segue pela rampa em esticão até a parada da via Super Aderência.',
                
                'graduacao' => 'V',
                'crux' => '',
                'altura' => '30',
                'enfiadas' => '1',
                'protecao' => 'Chapeletas',
                'material' => '4 costuras',
                'dicas' => 'O rapel deve ser feito com corda de 60 metros.',
                'croqui' => '',
                'fonteDados' => 'Guia de escalada do Morro do Canal',
            ),
        ));
        
        
    }
}