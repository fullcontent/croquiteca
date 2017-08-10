<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sectors')->delete();
        
        \DB::table('sectors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-08-10 00:13:36',
                'updated_at' => '2017-08-10 01:00:51',
                'nome' => 'Setor Bienal',
                'descricao' => '',
                'latitude' => '',
                'longitude' => '',
                'comoChegar' => 'O Setor Bienal pode ser acessado de duas maneiras:
Por baixo, através da trilha que se inicia da Pedra da Cunha (mais trabalhoso).
Por cima, pela trilha que inicia na gruta próxima ao Setor M&M\'s (mais fácil)
Para esse segundo acesso, siga a trilha principal do morro, passando pela Pedra da Cunha e por uma sequência de três pequenas pontes de madeira. Após esse trecho de subida, a trilha ficará menos ingreme até uma pequena escada de uns seis degraus.',
                'location_id' => 1,
                'imagem' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-08-10 00:24:52',
                'updated_at' => NULL,
                'nome' => 'Canto Esquerdo',
                'descricao' => 'O setor é de fácil acesso e recomenda-se escalar no periodo da maré baixa',
                'latitude' => '',
                'longitude' => '',
                'comoChegar' => 'Trilha tal',
                'location_id' => 2,
                'imagem' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2017-08-10 07:58:23',
                'updated_at' => NULL,
                'nome' => 'Setor Aderência',
                'descricao' => 'Até pouco tempo atrás o setor Aderência contava com apenas uma via.
Recentemente foi melhor desenvolvido e hoje conta com 4 vias. Além disso, podem ser exploradas novas possibilidades, com escaladas variantes mesclando e unindo alguns trechos de vias existentes.
São linhas de dificuldade relativamente fácil, sendo um ótimo lugar para treinar técnicas de aderência e trabalhar a mente.',
                'latitude' => '',
                'longitude' => '',
            'comoChegar' => 'Para acessar o Setor Aderência, basta continuar pela trilha do setor Pirilampo (trilha amarela), passar por baixo do bloco caído na saída da via Viaduto. Após passar por esse lance, siga a trilha subindo paralelo ao bloco seguinte.
Ali é a base da via Super Aderência, onde a primeira proteção é um grampo a aproximadamente 12 metros.',
                'location_id' => 1,
                'imagem' => '',
            ),
        ));
        
        
    }
}