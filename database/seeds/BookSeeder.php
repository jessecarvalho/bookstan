<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'nome' => "As Peças Infernais",
            'genero' => json_encode(array("Fantasia", "Romance"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Parte corações", "Divertido", "Empolgante", "Para shippar", "Saga", "Popular"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Através de Tessa Gray, uma jovem órfã de 16 anos, somos apresentados aos Caçadores das Sombras da Inglaterra vitoriana. Como seus representantes do século XXI, eles também combatem os elementos rebeldes do submundo ― vampiros e lobisomens. E são eles que vão ajudar Tessa quando esta, ao sair de Nova York em busca do irmão, seu único parente vivo, é raptada pelas irmãs Black. Mas Tessa não é uma senhorinha indefesa. Dona do estranho poder de se transformar em qualquer um apenas tocando em algum pertence dessa pessoa, é um objeto valioso para o submundo. Ao lado do temperamental e misterioso Will e de seu melhor amigo James, cuja frágil beleza esconde um terrível segredo, Tessa vai aprender a usar seu poder e ganhar um lugar ao lado deles na batalha entre as trevas e a luz.",
            "img" => "pecasInfernais",
            "autor" => "Cassandra Clare",
            "anoPublicado" => 2010,
            "livrosSaga" => 3
        ]);

        DB::table('books')->insert([
            'nome' => "Diário De Um Banana",
            'genero' => json_encode(array("Humor"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Infantil", "Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Divertido", "Leitura rápida", "Popular"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Não é fácil ser criança. E ninguém sabe disso melhor do que Greg Heffley, que se vê mergulhado no ensino fundamental, onde fracotes subdesenvolvidos dividem os corredores com garotos que são mais altos, mais malvados e já se barbeiam.",
            "img" => "diarioBanana",
            "autor" => "Jeff Kinney",
            "anoPublicado" => 2007,
            "livrosSaga" => 14
        ]);

        DB::table('books')->insert([
            'nome' => "Outsider",
            'genero' => json_encode(array("Terror"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Violência", "Popular", "Capa bonita"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "O corpo de um menino de onze anos é encontrado abandonado no parque de Flint City, brutalmente assassinado. Testemunhas e impressões digitais apontam o criminoso como uma das figuras mais conhecidas da cidade — Terry Maitland, treinador da Liga Infantil de beisebol, professor de inglês, casado e pai de duas filhas.
O detetive Ralph Anderson não hesita em ordenar uma prisão rápida e bastante pública, fazendo com que em pouco tempo toda a cidade saiba que o Treinador T é o principal suspeito do crime. Maitland tem um álibi, mas Anderson e o promotor público logo têm amostras de DNA para corroborar a acusação. O caso parece resolvido.
Mas conforme a investigação se desenrola, a história se transforma em uma montanha-russa, cheia de tensão e suspense. Terry Maitland parece ser uma boa pessoa, mas será que isso não passa de uma máscara? A aterrorizante resposta é o que faz desta uma das histórias mais perturbadoras de Stephen King.",
            "img" => "outsider",
            "autor" => "Stephen King",
            "anoPublicado" => 2018,
            "livrosSaga" => 1
        ]);

        DB::table('books')->insert([
            'nome' => "Por Lugares Incríveis",
            'genero' => json_encode(array("Romance"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Parte corações", "Para shippar", "Fatos reais", "Popular", "Para refletir", "Capa bonita"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Enquanto Violet conta os dias para o fim das aulas, quando poderá ir embora da cidadezinha onde mora, Finch pesquisa diferentes métodos de suicídio e imagina se conseguiria levar algum deles adiante. Em uma dessas tentativas, ele vai parar no alto da torre da escola e, para sua surpresa, encontra Violet, também prestes a pular. Um ajuda o outro a sair dali, e essa dupla improvável se une para fazer um trabalho de geografia: visitar os lugares incríveis do estado onde moram. Nessas andanças, Finch encontra em Violet alguém com quem finalmente pode ser ele mesmo, e a garota para de contar os dias e passa a vivê-los.",
            "img" => "porLugares",
            "autor" => "Jennifer Niven",
            "anoPublicado" => 2015,
            "livrosSaga" => 1
        ]);
        DB::table('books')->insert([
            'nome' => "Monster",
            'genero' => json_encode(array("Suspense", "Mangás e HQs", "Mistério"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Popular", "Para viajar", "Empolgante", "Crime"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "O doutor Kenzou Tenma é um neurocirurgião japonês que trabalha em um famoso hospital alemão. Ele é considerado o melhor neurocirurgião do lugar e faz as operações mais delicadas e difíceis. Em uma de suas cirurgias o doutor Tenma deixa de atender um trabalhador turco que sofreu um acidente e que estava na frente, para operar um famoso cantor de ópera alemão. Tudo para manter a fama do hospital. Só que ao encontrar a esposa e a filha do turco que estão inconsoladas, Tenma se dá conta de que deixou de cuidar de um paciente e ele morreu, para salvar a vida de um figurão. Assim, o médico passa a discutir a política do hospital que se preocupa mais com sua reputação do que com os pacientes. E isso faz com que o neurocirurgião tenha atritos com o diretor do hospital, o Doutor Heinemann. Isso faz com que o médico japonês comece a perder todo o seu prestígio como médico respeitado.",
            "img" => "monster",
            "autor" => "Naoki Urasawa",
            "anoPublicado" => 2012,
            "livrosSaga" => 18
        ]);
        DB::table('books')->insert([
            'nome' => "Revolução dos bichos",
            'genero' => json_encode(array("Ficcão", "Literatura"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Para refletir", "Popular", "Leitura rápida"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Verdadeiro clássico moderno, concebido por um dos mais influentes escritores do século 20, 'A Revolução dos Bichos' é uma fábula sobre o poder. Narra a insurreição dos animais de uma granja contra seus donos. Progressivamente, porém, a revolução degenera numa tirania ainda mais opressiva que a dos humanos. Escrita em plena Segunda Guerra Mundial e publicada em 1945 depois de ter sido rejeitada por várias editoras, essa pequena narrativa causou desconforto ao satirizar ferozmente a ditadura stalinista numa época em que os soviéticos ainda eram aliados do Ocidente na luta contra o eixo nazifascista.",
            "img" => "revolucaoBichos",
            "autor" => "George Orwell",
            "anoPublicado" => 1945,
            "livrosSaga" => 1
        ]);

        DB::table('books')->insert([
            'nome' => "Marley e Eu",
            'genero' => json_encode(array("Drama", "Romance"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Parte corações", "Para refletir", "Popular", "Fatos reais"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "John e Jenny eram jovens, apaixonados e estavam começando a sua vida juntos, sem grandes preocupações, até ao momento em que levaram para casa Marley, \"um bola de pêlo amarelo em forma de cachorro\", que, rapidamente, se transformou num labrador enorme e encorpado de 43 quilos. Era um cão como não havia outro nas redondezas: arrombava portas, esgadanhava paredes, babava nas visitas, comia roupa do varal alheio e abocanhava tudo a que pudesse. De nada lhe valeram os tranqüilizantes receitados pelo veterinário, nem a \"escola de boas maneiras\", de onde, aliás, foi expulso. Mas, acima de tudo, Marley tinha um coração puro e a sua lealdade era incondicional. Imperdível.",
            "img" => "marleyEu",
            "autor" => "John Grogan",
            "anoPublicado" => 2005,
            "livrosSaga" => 1
        ]);

        DB::table('books')->insert([
            'nome' => "O Pequeno Príncipe",
            'genero' => json_encode(array("Literatura"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Infantil", "Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Leitura rápida", "Para refletir", "Popular", "Capa Bonita"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Como explicar a adoção deste livro por povos tão variados, em tantos países de todos os continentes? Como explicar que ele seja lido sempre por tanto milhões e milhões de pessoas? Como explicar a atualidade deste livro traduzido em oitenta línguas diferentes? Como compreender que uma história aparentemente tão ingênua seja comovente para tantas pessoas? O Pequeno Príncipe devolve a cada um o mistério da infância. De repente retornam os sonhos. Reaparece a lembrança de questionamentos, desvelam-se incoerências acomodadas, quase já imperceptíveis na pressa do dia a dia. Voltam ao coração escondidas recordações. O reencontro, o homem-menino.",
            "img" => "pequenoPrincipe",
            "autor" => "Antoine de Saint-Exupéry",
            "anoPublicado" => 1943,
            "livrosSaga" => 1
        ]);
        DB::table('books')->insert([
            'nome' => "Papilon",
            'genero' => json_encode(array("Drama", "Suspense"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Parte corações", "Empolgante", "Violência", "Para refletir", "Popular", "Fatos reais", "Crime"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Obra extraordinária sobre a vida dos condenados ao degredo e um retrato por vezes irónico e por vezes brutal das prisões sul-americanas, Papillon é também a história de um homem que mesmo entre as maiores adversidades não se lamenta, não se conforma, não se deixa abater e que ao atravessar as mais desumanas condições de vida persiste no seu ideal de justiça, de amizade e de fé no ser humano.",
            "img" => "papilon",
            "autor" => "Henry Charriéle",
            "anoPublicado" => 1969,
            "livrosSaga" => 1
        ]);
        DB::table('books')->insert([
            'nome' => "E Não Sobrou Nenhum",
            'genero' => json_encode(array("Mistério", "Suspense", "Drama"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adolescente", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Empolgante", "Crime", "Leitura rápida", "Popular"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Uma ilha misteriosa, um poema infantil, dez soldadinhos de porcelana e muito suspense são os ingredientes com que Agatha Christie constrói seu romance mais importante. Na ilha do Soldado, antiga propriedade de um milionário norte-americano, dez pessoas sem nenhuma ligação aparente são confrontadas por uma voz misteriosa com fatos marcantes de seus passados. Convidados pelo misterioso mr. Owen, nenhum dos presentes tem muita certeza de por que estão ali, a despeito de conjecturas pouco convincentes que os leva a crer que passariam um agradável período de descanso em mordomia. Entretanto, já na primeira noite, o mistério e o suspense se abatem sobre eles e, num instante, todos são suspeitos, todos são vítimas e todos são culpados.",
            "img" => "naoSobrouNenhum",
            "autor" => "Agatha Christie",
            "anoPublicado" => 1939,
            "livrosSaga" => 1
        ]);
        DB::table('books')->insert([
            'nome' => "Todos Contra Dante",
            'genero' => json_encode(array("Drama"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Nacional", "Parte corações", "Violência", "Crime", "Leitura rápida", "Fatos reais", "Para refletir"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Dante é novo na escola. Vem de um bairro mais pobre, gosta de ler 'A divina comédia', de Dante Alighieri, e alimenta uma paixão secreta. Logo a aparência dele e sua classe social viram combustível para o riso dos colegas. A perseguição se torna sistemática e ganha força no ciberespaço, onde, no confortável anonimato de uma comunidade na internet, inúmeros jovens ridicularizam e hostilizam Dante. O que era para ser apenas 'brincadeira' de adolescentes ganha dimensões trágicas, extravasa o âmbito virtual e se instala como ameaça concreta. As conseqüências serão devastadoras.",
            "img" => "todosContraDante",
            "autor" => "Luís Dill",
            "anoPublicado" => 2008,
            "livrosSaga" => 1
        ]);
        DB::table('books')->insert([
            'nome' => "O Caçador de Pipas",
            'genero' => json_encode(array("Drama", "Ficção"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Parte corações", "Violência", "Crime", "Fatos reais", "Popular", "Para refletir"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "O caçador de pipas é considerado um dos maiores sucessos da literatura mundial dos últimos tempos. Este romance conta a história da amizade de Amir e Hassan, dois meninos quase da mesma idade, que vivem vidas muito diferentes no Afeganistão da década de 1970. Amir é rico e bem-nascido, um pouco covarde, e sempre em busca da aprovação de seu próprio pai. Hassan, que não sabe ler nem escrever, é conhecido por coragem e bondade. Os dois, no entanto, são loucos por histórias antigas de grandes guerreiros, filmes de caubói americanos e pipas. E é justamente durante um campeonato de pipas, no inverno de 1975, que Hassan dá a Amir a chance de ser um grande homem, mas ele não enxerga sua redenção. Após desperdiçar a última chance, Amir vai para os Estados Unidos, fugindo da invasão soviética ao Afeganistão, mas vinte anos depois Hassan e a pipa azul o fazem voltar à sua terra natal para acertar contas com o passado.",
            "img" => "cacadorPipas",
            "autor" => "Khaled Hosseini",
            "anoPublicado" => 2003,
            "livrosSaga" => 1
        ]);
        DB::table('books')->insert([
            'nome' => "Harry Potter",
            'genero' => json_encode(array("Fantasia"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Infantil", "Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Empolgante", "Para shippar", "Saga", "Para viajar", "Popular", "Capa bonita"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Conheça Harry, filho de Tiago e Lílian Potter, feiticeiros que foram assassinados por um poderosíssimo bruxo, quando ele ainda era um bebê. Com isso, o menino acaba sendo levado para a casa dos tios que nada tinham a ver com o sobrenatural pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. Descobre sua verdadeira história e seu destino: ser um aprendiz de feiticeiro até o dia em que terá que enfrentar a pior força do mal, o homem que assassinou seus pais, o terrível Lorde das Trevas.",
            "img" => "harryPotter",
            "autor" => "J. K. Rowling",
            "anoPublicado" => 1998,
            "livrosSaga" => 7
        ]);
        DB::table('books')->insert([
            'nome' => "O Senhor dos Anéis",
            'genero' => json_encode(array("Fantasia", "Drama"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Empolgante", "Violência", "Saga", "Para shippar", "Para viajar", "Popular"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "O Senhor dos Anéis (The Lord of the Rings) é um romance de fantasia criado pelo escritor, professor e filólogo britânico J.R.R. Tolkien. A história começa como seqüência de um livro anterior de Tolkien, O Hobbit (The Hobbit), e logo se desenvolve numa história muito maior. Foi escrito entre 1937 e 1949, com muitas partes criadas durante a Segunda Guerra Mundial. Embora Tolkien tenha planejado realizá-lo em volume único, foi originalmente publicado em três volumes entre 1954 e 1955, e foi assim, em três volumes, que se tornou popular. Desde então foi reimpresso várias vezes e foi traduzido para mais de 40 línguas, tornando-se um dos trabalhos mais populares da literatura do século XX.",
            "img" => "senhorAneis",
            "autor" => "J. R. R. Tolkien",
            "anoPublicado" => 1954,
            "livrosSaga" => 3
        ]);
        DB::table('books')->insert([
            'nome' => "As Crõnicas de Gelo e Fogo",
            'genero' => json_encode(array("Fantasia"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Parte corações", "Empolgante", "Violência", "Saga", "Para viajar", "Popular", "Diversidade"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Quando Eddard Stark, lorde do castelo de Winterfell, aceita a prestigiada posição de Mão do Rei oferecida pelo velho amigo, o rei Robert Baratheon, não desconfia que sua vida está prestes a ruir em sucessivas tragédias. Sabe-se que Lorde Stark aceitou a proposta porque desconfia que o dono anterior do título fora envenenado pela manipuladora rainha - uma cruel mulher do clã Lannister. E sua intenção é proteger o rei. Mas ter como inimigo os Lannister pode ser fatal: a ambição dessa família pelo poder parece não ter limites e o rei corre grande perigo. Agora, sozinho na corte, Eddard percebe que não só o rei está em apuros, mas também ele e toda a sua família. Quem vencerá a guerra dos tronos?",
            "img" => "cronicasGeloFogo",
            "autor" => "George R. R. Martin",
            "anoPublicado" => 1996,
            "livrosSaga" => 5
        ]);
        DB::table('books')->insert([
            'nome' => "Dragões de Éter",
            'genero' => json_encode(array("Fantasia"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Infantil", "Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Nacional", "Empolgante", "Para shippar", "Saga", "Para viajar", "Capa bonita"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Primo Branford é hoje o Rei de Arzallum, e por 20 anos saboreia, satisfeito, a Paz. Nos últimos anos, entretanto, coisas estranhas começam a acontecer... Uma menina vê a própria avó ser devorada por um lobo marcado com magia negra. Dois irmãos comem estilhaços de vidro como se fossem passas silvestres e bebem água barrenta como se fosse suco, envolvidos pela magia escura de uma antiga bruxa canibal. O navio do mercenário mais sanguinário do mundo, o mesmo que acreditavam já estar morto e esquecido, retorna dos mares com um obscuro e ainda pior sucessor. E duas sociedades criminosas entram em guerra, dando início a uma intriga que irá mexer em profundos e tristes mistérios da família real.",
            "img" => "dragoesEter",
            "autor" => "Raphael Draccon",
            "anoPublicado" => 2011,
            "livrosSaga" => 3
        ]);
        DB::table('books')->insert([
            'nome' => "Mago Negro",
            'genero' => json_encode(array("Fantasia", "Drama"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Diversidade", "Empolgante", "Parte corações", "Para shippar", "Saga", "Para viajar"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Todos os anos, os magos de Imardin reúnem-se para purificar as ruas da cidade dos pedintes, criminosos e vagabundos. Mestres das disciplinas de magia, sabem que ninguém pode opor-se a eles. No entanto, seu escudo protetor não é tão impenetrável quanto acreditam. Enquanto a multidão é expurgada da cidade, uma jovem garota de rua, furiosa com o tratamento dispensado pelas autoridades a sua família e amigos, atira uma pedra ao escudo protetor, colocando nisso toda a raiva que sente. Para o espanto de todos que testemunham a ação, a pedra atravessa sem dificuldades a barreira e deixa um dos mágicos inconsciente. Trata-se de um ato inconcebível, e o maior medo da Clã de repente se concretiza: uma maga não treinada está à solta pelas ruas. Ela deve ser encontrada, e rápido, antes que seus poderes fiquem fora de controle e destruam a todos.",
            "img" => "magoNegro",
            "autor" => "Trudi Canavan",
            "anoPublicado" => 2002,
            "livrosSaga" => 3
        ]);
        DB::table('books')->insert([
            'nome' => "As Vantagens de Ser Invisível",
            'genero' => json_encode(array("Drama", "Romance"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Diversidade", "Parte corações", "Para shippar", "Popular", "Para refletir"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Cartas mais íntimas que um diário, estranhamente únicas, hilárias e devastadoras - são apenas através delas que Charlie compartilha todo o seu mundinho com o leitor. Enveredando pelo universo dos primeiros encontros, dramas familiares, novos amigos, sexo, drogas e daquela música perfeita que nos faz sentir infinito, o roteirista Stephen Chbosky lança luz sobre o amadurecimento no ambiente da escola, um local por vezes opressor e sinônimo de ameaça. Uma leitura que deixa visível os problemas e crises próprios da juventude.",
            "img" => "vantagensSerInvisivel",
            "autor" => "Stephen Chbosky",
            "anoPublicado" => 1999,
            "livrosSaga" => 1
        ]);
        DB::table('books')->insert([
            'nome' => "As Crônicas do Subterrâneo",
            'genero' => json_encode(array("Fantasia"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Infantil", "Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Divertido", "Empolgante", "Saga", "Para viajar"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "O pai de Gregor, de 11 anos, desapareceu há mais de dois anos, o que tornou a vida do menino muito difícil. Mas tudo se complica ainda mais quando ele cai através de um duto de ventilação na lavanderia do prédio onde mora, e encontra um incrível universo desconhecido sob a cidade de Nova York. Agora, apesar de seus protestos, o menino precisa liderar um estranho grupo de humanos e animais gigantes numa missão que pode salvar o Subterrâneo além de ser a única saída para encontrar seu pai.",
            "img" => "cronicasSubterraneo",
            "autor" => "Suzanne Collins",
            "anoPublicado" => 2003,
            "livrosSaga" => 5
        ]);
        DB::table('books')->insert([
            'nome' => "Sapiens",
            'genero' => json_encode(array("Literatura"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem", "Adulto"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Para viajar", "Para refletir", "Empolgante", "Popular"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "O autor repassa a história da humanidade, ou do homo sapiens, desde o surgimento da espécie durante a pré-história até o presente, mas em vez de apenas “inventariar” os fatos históricos ele os relaciona com questões do presente e os questiona de maneira surpreendente. Além disso, para cada crença ou fato que temos como certa hoje em dia, o autor apresenta as diversas interpretações existentes a partir de diferentes pontos de vista, inclusive as muito atuais, e vai além, sugerindo interpretações muitas vezes desconcertantes. Yuval Noah Harari é professor do departamento de história da Universidade Hebraica de Jerusalém. É especialista em história medieval, militar e mundial.",
            "img" => "sapiens",
            "autor" => "Yuval Noah Harari",
            "anoPublicado" => 2011,
            "livrosSaga" => 1
        ]);

        DB::table('books')->insert([
            'nome' => "Os Dois Mundos de Astrid Jones",
            'genero' => json_encode(array("Romance", "Drama"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Diversidade", "Para shippar", "Para refletir", "Capa bonita"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "\"O movimento é impossível.\" É o que Astrid Jones, 17 anos, aprendeu na sua aula de filosofia. E, vivendo na pequena cidade em que mora, ela começa a acreditar que isso é mesmo verdade. São sempre as mesmas pessoas, as mesmas fofocas, a mesma visão de mundo limitada, como se estivessem todos presos em uma caverna, nunca enxergando nada além. Nesse ambiente, ela não tem com quem desabafar suas angústias, e por isso deita-se em seu jardim, olha os aviões no céu, e expõe suas dúvidas mais secretas aos passageiros, já que eles nunca irão julgá-la. Em seu conflito solitário, ela se vê dividida entre dois mundos: um em que é livre para ser quem é de verdade e dar vazão ao que vai em seu íntimo, e outro em que precisa se enquadrar desconfortavelmente em convenções sociais. Em um retrato original de uma garota que luta para se libertar de definições ultrapassadas, este livro leva os leitores a questionarem tudo e oferece esperança para aqueles que nunca deixarão de buscar o significado do amor verdadeiro.",
            "img" => "doisMundosAstridJones",
            "autor" => "A.S. King",
            "anoPublicado" => 2015,
            "livrosSaga" => 1
        ]);

        DB::table('books')->insert([
            'nome' => "O Mundo de Sofia",
            'genero' => json_encode(array("Romance"),JSON_UNESCAPED_UNICODE),
            "publico" => json_encode(array("Jovem"),JSON_UNESCAPED_UNICODE),
            "tags" => json_encode(array("Para viajar", "Para refletir", "Popular", "Capa bonita"),JSON_UNESCAPED_UNICODE),
            "sinopse" => "Às vésperas de seu aniversário de quinze anos, Sofia Amundsen começa a receber bilhetes e cartões postais bastante estranhos. Os bilhetes são anônimos e perguntam a Sofia quem é ela e de onde vem o mundo em que vivemos. Os postais foram mandados do Líbano, por um major desconhecido, para uma tal de Hilde Knag, jovem que Sofia igualmente desconhece. O mistério dos bilhetes e dos postais é o ponto de partida deste fascinante romance, que vem conquistando milhões de leitores em todos os países em que foi lançado. De capítulo em capítulo, de “lição” em “lição”, o leitor é convidado a trilhar toda a história da filosofia ocidental – dos pré-socráticos aos pós-modernos - , ao mesmo tempo em que se vê envolvido por um intrigante thriller que toma um rumo surpreendente.",
            "img" => "mundoSofia",
            "autor" => "Jostein Gaarder",
            "anoPublicado" => 1991,
            "livrosSaga" => 1
        ]);

        /*
         DB::table('books')->insert([
            'nome' => "",
            'genero' => json_encode(array("")),
            "publico" => json_encode(array("")),
            "tags" => json_encode(array("")),
            "sinopse" => "",
            "img" => "",
            "autor" => "",
            "anoPublicado" => ,
            "livrosSaga" =>
        ]);
         */


    }
}
