<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2017-08-10 00:08:42',
                'updated_at' => '2017-08-15 15:21:20',
                'nome' => 'Morro do Canal',
                'tipoRocha' => 'Granito',
                'cidade_id' => 4120804,
                'endereco' => 'Morro do Canal Vila Fuck Piraquara',
                'descricao' => 'O Morro do Canal é a primeira montanha, no lado do Planalto da Serra do Marumbi. Atualmente ele faz parte do Parque Estadual do Marumbi após a recente expansão desta unidade de Conservação. Na prática, no entanto, a montanha está situada dentro de uma propriedade particular, onde o dono, Sr. Zezinho permite a passagem de montanhistas sem problemas.

O Canal é uma das montanhas mais fáceis da Serra do Mar em termos montanhísticos. Suas trilhas são bem sinalizadas, sendo praticamente urbanas de tanta intervenção de melhorias que recebeu. 

Um dos atrativos do morro são as escaladas, que estão dispersas em diversos setores, sendo que o principal, situado perto do cume, é onde fica a via Pirilampo Espacial, um 5 sup muito bonito. Ali neste setor fica uma via que é uma obra prima, a Viaduto, um 6sup dificil de posicionamento.

Para quem gosta de caminhar, o morro oferece um circuito, subindo pelo Morro canal, passando pelo Vigia, Torre Amarela e enfim retornando ao sitio do Seu Zezinho. Este percurso leva cerca de 3 a 4 horas para ser percorrido e é fácil, com excessão da corda fixada na descido do Canal para o Vigia que exige força e preparo psicológico do montanhista. Nada demais para os experientes e um pavor pra quem não sabe o que é isso.

É a montanha mais próximo de Curitiba e pode ser acessada pela BR 277, pegando o ultimo retorno antes do pedágio e virando logo em seguida na estrada de chão, ou pode ser acessada por Piraquara, passando nas bordas da represa Caiguava.

Uma boa alternativa é ir para o morro de bicicleta. Como o caminho percorre o alto Iguaçu, boa parte do percurso é plano e bastante prazeroso em meio às estradinhas de terra do caminho trentino.

O sitio do senhor Zezinho recebe bem os visitantes e ainda conta com uma pequena infraestrutura com lanchonete e sorveteria.',
                'latitude' => '-25.5150819',
                'longitude' => '-48.981664199999955',
                'imagem' => 'uploads/2017-08/183ut-200308-705547442.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-08-10 00:23:52',
                'updated_at' => '2017-08-16 15:00:00',
                'nome' => 'Morro da Enseada',
                'tipoRocha' => 'Granito',
                'cidade_id' => 4216206,
                'endereco' => 'Av. Santa Catarina, 1760 - Praia da Enseada, São Francisco do Sul - SC, 89240-000, Brasil',
                'descricao' => 'O morro da enseada concentra o maior numero de setores da Zona Praias, são cinco os principais.',
                'latitude' => '-26.2222020039235',
                'longitude' => '-48.497888015283195',
                'imagem' => 'uploads/2017-08/mirante-do-morro-da-campina.jpg',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2017-08-10 09:04:34',
                'updated_at' => '2017-08-16 15:17:59',
                'nome' => 'São Luiz do Purunã',
                'tipoRocha' => 'Arenito',
                'cidade_id' => 4102307,
                'endereco' => 'São Luiz do Purunã Balsa Nova PR',
                'descricao' => 'O arenito de São Luis do Purunã concentra centenas de vias de alta qualidade em seis setores. Além das vias super esportivas, ainda há uma grande concentração de vias em móvel fazendo de São Luis um campo escola de escalada avançado com muitas possibilidades. Infelizmente, mesmo com tanta importância para a escalada de Curitiba, o local sofre com vários problemas.',
                'latitude' => '-25.4621335',
                'longitude' => '-49.710104',
                'imagem' => 'uploads/2017-08/112ut-132749-705547442.jpg',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2017-08-10 09:10:11',
                'updated_at' => '2017-08-16 15:21:44',
                'nome' => 'Parque Estadual Pico Paraná',
                'tipoRocha' => 'Granito',
                'cidade_id' => 4101200,
                'endereco' => 'Pico Paraná Antonina PR',
                'descricao' => 'O Pico Paraná é a montanha mais alta da Região Sul do Brasil, formação rochosa de Granito e Gnaisse, entre o município de Antonina e Campina Grande do Sul, no conjunto de serra chamado Ibitiraquire. A vegetação é composta em quase sua totalidade em Floresta Ombrófila Densa Montana e Alto-Montana e de refúgios ecológicos.',
                'latitude' => '-25.2522953',
                'longitude' => '-48.80929119999996',
                'imagem' => 'uploads/2017-08/normal-pico-do-paran-2.jpg',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2017-08-15 16:07:09',
                'updated_at' => '2017-08-16 15:04:26',
                'nome' => 'Urca',
                'tipoRocha' => 'Gnaisse',
                'cidade_id' => 3304557,
                'endereco' => 'Urca Rio de Janeiro RJ',
                'descricao' => 'A Urca, no Rio de Janeiro, é o mais conhecido e tradicional centro de escalada do Brasil. São 325 vias e variantes no Pão de Açúcar, Morro da Urca, Morro da Babilônia, Parede dos Ácidos e Pedra do Urubu, além de muitos boulders.',
                'latitude' => '-22.954378',
                'longitude' => '-43.16758809999999',
                'imagem' => 'uploads/2017-08/urca.jpg',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2017-08-15 16:09:31',
                'updated_at' => '2017-08-16 15:15:22',
                'nome' => 'São Conrado',
                'tipoRocha' => 'Gnaisse',
                'cidade_id' => 3304557,
                'endereco' => 'R. Iposeira, 608-800 - São Conrado, Rio de Janeiro - RJ, 22610-380, Brasil',
                'descricao' => '',
                'latitude' => '-22.995099377310275',
                'longitude' => '-43.28040042812506',
                'imagem' => 'uploads/2017-08/bairro-de-sao-conrado.jpg',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2017-09-19 13:38:58',
                'updated_at' => '2017-09-20 16:42:16',
                'nome' => 'Brejo da Madre de Deus',
                'tipoRocha' => 'Batólito',
                'cidade_id' => 2602605,
                'endereco' => 'Brejo da Me. de Deus PE BR',
                'descricao' => '',
                'latitude' => '-8.140579299999999',
                'longitude' => '-36.37147959999999',
                'imagem' => 'uploads/2017-09/dsc06995.JPG',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2017-09-20 16:13:30',
                'updated_at' => '2017-09-20 16:42:02',
                'nome' => 'Morro Anhangava',
                'tipoRocha' => 'Granito',
                'cidade_id' => 4120804,
                'endereco' => 'Morro Anhangava Quatro Barras PR',
                'descricao' => 'O Morro do Anhangava é um dos locais mais tradicionais para a prática de escalada em rocha no Sul do Brasil, sendo considerado o principal "Campo Escola" do montanhismo paranaense.

O Anhangava (do tupi morro do Diabo), é um morro de granito muito grande, mas sem uma parede alta para a escalada, sendo que as vias se dividem em diversos setores. 

A escalada ali é estritamente esportiva, mas há uma ou outra via que pode ser um treino para uma escalada tradicional e há também muitos boulderes.

É muito interessante um morro ser palco de diversas escaladas esportivas. A acessibilidade ao local, a belíssima paisagem, desta que é uma montanha da Serra do Mar, fazem do Anhangava um dos locais mais especiais para a escalada, caminhadas e, inclusive, para a prática do voo livre.

Para quem pretende voar da montanha, existem 2 opções de rampas naturais. Junto à trilha principal, ao final das rampas que levam ao topo, onde pode-se decolar com o vento Nordeste, Norte e Noroeste, e, saindo da trilha principal, pegando uma trilha à esquerda, após subir a primeira rampa, onde pode-se decolar com o vento Oeste e Sudoeste. Caso queira aprender a voar, em Curitiba consulte a escola Vento Norte.

Na base do morro fica o Refúgio 5.13, que fornece abrigo aos escaladores que vieram de longe e que também tem se tornado cada vez mais um local de encontros e confraternizações da comunidade da montanha de Curitiba.

O Morro do Anhangava fica dentro do Parque Estadual da Serra da Baitaca, uma Unidade de Conservação que é fruto de muitas lutas dos escaladores contra as mineradoras, que ameaçavam o morro. Ainda que o parque careça de infra-estrutura, há regras de uso e espera-se o bom censo por parte dos frequentadores.',
                'latitude' => '-25.3876834',
                'longitude' => '-49.00283200000001',
                'imagem' => 'uploads/2017-09/63ut-135241-533423967.jpg',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2017-09-22 05:01:00',
                'updated_at' => NULL,
                'nome' => 'Morro do Farol',
                'tipoRocha' => 'Basalto',
                'cidade_id' => 4321501,
                'endereco' => 'Torres RS BR',
                'descricao' => '',
                'latitude' => '-29.34599949999999',
                'longitude' => '-49.72860209999999',
                'imagem' => 'uploads/2017-09/morro-do-farol.jpg',
            ),
        ));
        
        
    }
}