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
                'updated_at' => '2017-08-10 00:10:38',
                'nome' => 'Morro do Canal',
                'tipoRocha' => 'Granito',
                'cidade_id' => 4120804,
                'descricao' => 'O Morro do Canal é a primeira montanha, no lado do Planalto da Serra do Marumbi. Atualmente ele faz parte do Parque Estadual do Marumbi após a recente expansão desta unidade de Conservação. Na prática, no entanto, a montanha está situada dentro de uma propriedade particular, onde o dono, Sr. Zezinho permite a passagem de montanhistas sem problemas.

O Canal é uma das montanhas mais fáceis da Serra do Mar em termos montanhísticos. Suas trilhas são bem sinalizadas, sendo praticamente urbanas de tanta intervenção de melhorias que recebeu. 

Um dos atrativos do morro são as escaladas, que estão dispersas em diversos setores, sendo que o principal, situado perto do cume, é onde fica a via Pirilampo Espacial, um 5 sup muito bonito. Ali neste setor fica uma via que é uma obra prima, a Viaduto, um 6sup dificil de posicionamento.

Para quem gosta de caminhar, o morro oferece um circuito, subindo pelo Morro canal, passando pelo Vigia, Torre Amarela e enfim retornando ao sitio do Seu Zezinho. Este percurso leva cerca de 3 a 4 horas para ser percorrido e é fácil, com excessão da corda fixada na descido do Canal para o Vigia que exige força e preparo psicológico do montanhista. Nada demais para os experientes e um pavor pra quem não sabe o que é isso.

É a montanha mais próximo de Curitiba e pode ser acessada pela BR 277, pegando o ultimo retorno antes do pedágio e virando logo em seguida na estrada de chão, ou pode ser acessada por Piraquara, passando nas bordas da represa Caiguava.

Uma boa alternativa é ir para o morro de bicicleta. Como o caminho percorre o alto Iguaçu, boa parte do percurso é plano e bastante prazeroso em meio às estradinhas de terra do caminho trentino.

O sitio do senhor Zezinho recebe bem os visitantes e ainda conta com uma pequena infraestrutura com lanchonete e sorveteria.',
                'latitude' => '-25.515077',
                'longitude' => '-48.9838529',
                'imagem' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2017-08-10 00:23:52',
                'updated_at' => NULL,
                'nome' => 'Morro da Enseada',
                'tipoRocha' => 'Granito',
                'cidade_id' => 4216206,
                'descricao' => 'O morro da enseada concentra o maior numero de setores da Zona Praias, são cinco os principais.',
                'latitude' => '',
                'longitude' => '',
                'imagem' => NULL,
            ),
        ));
        
        
    }
}