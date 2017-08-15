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
            3 => 
            array (
                'id' => 4,
                'created_at' => '2017-08-10 09:05:40',
                'updated_at' => '2017-08-10 09:06:30',
                'nome' => 'Setor 1',
                'descricao' => 'Há agarras de todos os tipos. Regletes em saliências, regletes embaixo de tetos, buracos grandes até monodedos, abaulados grandes, pequenos e de aderência, com ou sem esfarelamento, concreções... Há de tudo!',
                'latitude' => '',
                'longitude' => '',
            'comoChegar' => 'Pela BR 277, logo após subir a Serra de São Luís do Purunã e um pouco antes do Posto de Pedágio, há uma entrada para a esquerda. Seguindo por esta estradinha de terra, após 1 km aproximadamente é possível observar a estátua do Cristo e olhando à esquerda há um local onde se pode estacionar o carro. Desde 2004 porém, infelizmente tem havido furtos aos veículos neste estacionamento. As pessoas tem preferido deixar o carro estacionado perto do Pedágio e caminhar o restante do percurso. Para quem vem de ônibus pode pegá-lo na rodoferroviária de Curitiba com passagem até o alto da serra e fazendo o trecho da rodovia até as vias (40min.) a pé.
A trilha para chegar às vias começa exatamente onde se estacionam os carros. São uns 10 minutos de caminhada até o ponto de rapel, ou também é possível descer caminhando. Para isso é necessário tomar a primeira bifurcação à direita depois de uns 100 m de caminhada na trilha. Quem vai rapelar pode seguir reto até os paredões e depois seguir costeando as paredes até o ponto de rapel mais à esquerda.',
                'location_id' => 3,
                'imagem' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2017-08-10 09:07:21',
                'updated_at' => NULL,
                'nome' => 'Setor 2',
                'descricao' => 'Os setores 2 e 3 são acessados pelo pedágio. Atenção para não passar pela cobrança. Fique atento na rodovia que na direita há uma entrada que dá acesso à empresa mineradora. Pode deixar o carro estacionado fora da mineradora perto da cerca.

O melhor caminho é ir por dentro da propriedade, pois pela estrada não há acostamento. Depois de uns 15 minutos de caminhada haverá um rio e mais para frente uma porteira com duas portas. Pela esquerda é o caminho para o setor 3, na direita o setor 2, que se alcança chegando  pela estrada. 

Não há trilhas que levam aos setores, pois a região é um pasto. As referencias são as torres de alta tensão. O setor 2 fica no local onde o poste desce a escarpa. O 3 fica próximo ao terceiro poste.',
                'latitude' => '',
                'longitude' => '',
                'comoChegar' => '',
                'location_id' => 3,
                'imagem' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2017-08-10 09:18:26',
                'updated_at' => '2017-08-10 09:18:40',
                'nome' => 'Pico Itapiroca - Setor de escalada',
                'descricao' => 'O Pico Itapiroca, com seus 1.805 metros, é a quinta montanha em altitude desta região. Sua aproximação se dá pelo mesmo caminho de acesso ao Pico Paraná, sendo que em determinado ponto toma-se um caminho à direita ao invés de continuar a caminhada. 

A caminhada ao cume dura aproximadamente 3:30h e do alto é possível avistar praticamente toda a Serra do ibitiraquire onde localiza-se o Pico Paraná, a Oeste a represa do Capivari, ao Norte o Pico Caratuva, e na porção Sul/Sudeste/Sudoeste destacam-se o Tucum, Camapuã e ao longe o imponente Ciririca com suas duas placas que se tornam reluzentes ao sol do amanhecer. Mais ao longe avistam-se as montanhas das serras da Graciosa, Baitaca e do Marumbi.',
                'latitude' => '',
                'longitude' => '',
                'comoChegar' => 'Seguir pela trilha normal de acesso ao cume do Itapiroca, sinalizada com fitas na cor vermelha. Após passar pela pedra onde está instalado o único degrau de metal, a trilha fica ligeiramente plana, voltando a subir em uma curva para a esquerda. Nesse exato ponto a trilha para o setor de escalada segue ligeiramente para baixo, a direita. Logo no início será possível identificar as fitas amarelas e mais adiante a placa indicativa.',
                'location_id' => 4,
                'imagem' => '',
            ),
        ));
        
        
    }
}