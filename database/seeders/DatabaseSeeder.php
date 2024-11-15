<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Module;
use App\Models\Badge;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $module1 = Module::create([
            'nome' => 'Fundamentos de Educação Financeira',
            'conteudo' => [ 
                
                    [
                        "titulo" => "Orçamento e Planejamento Financeiro",
                        "descricao" => "O orçamento é a base da educação financeira, permitindo que você entenda para onde vai seu dinheiro e como usá-lo melhor. Se planejar financeiramente é bastante importante para você conseguir controlar seus gastos e consquentemente poupar mais dinheiro ao fim do mês",
                        "topicos" => [
                            "Para controlar seu gastos é importante registrar receitas e despesas: Monitorar seus ganhos (salário, rendas extras) e gastos (fixos e variáveis).",
                            "Planejar com antecedência: Estabelecer metas financeiras (curto, médio e longo prazo).",
                            "Criar um plano de ação: Fazer ajustes para garantir que você gaste menos do que ganha."
                        ]
                    ],
                    [
                        "titulo" => "Controle de Dívidas",
                        "descricao" => "É importante entender o impacto das dívidas e saber como gerenciá-las. Uma dívida pode comprometer totalmente seu orçamento e bagunçar suas finanças, fazendo com que seu dinheiro sirva apenas para pagar a dívida e não sobre muito para você poupar ou investir. Com dívidas descontroladas, sua vida financeira pode ser tornar um pesadelo.",
                        "topicos" => [
                            "Evitar o crédito fácil e caro: Como cartões de crédito e cheque especial, que possuem altos juros 'euma forma de evitar dívidas exorbitantes.",
                            "Renegociar dívidas: Caso esteja endividado, busque renegociar para taxas menores e prazos mais adequados. Isso pode te ajudar a controlar essa dívida e ajustar suas finanças",
                            "Conhecer a taxa de juros: Entender o custo do crédito e evitar armadilhas financeiras. Com esse conhecimento, você evita se comprometer com essas taxas e armadilhas, pois você toma ciência de que taxas como essas são bastante abusivas e comprometem sua vida financeira"
                        ]
                    ],
                    [
                        "titulo" => "Poupança e Investimento",
                        "descricao" => "Guardar e investir dinheiro são passos essenciais para construir um patrimônio. Com os investimentos você pode conquistar uma vida equilibrada financeiramente a lonfo prazo e viver tranquilamente no seu futuro",
                        "topicos" => [
                            "É essencial criar uma reserva de emergência: Poupar o equivalente a 3 a 6 meses de despesas essenciais para caso aconteça algum imprevisto financeiro, com esse dinheiro guardado você pode passar pr esse imprevisto sem se comprometer com dívidas e ficar mais tranquilo quanto as suas finanças",
                            "Investir para crescer: Diferenciar entre poupança (baixa rentabilidade) e investimentos (como CDBs, fundos, ações, etc.). Caso queira ter mais rentabilidade é importante que saiba a diferença entre os investimentos. Mas saiba que investimento é essencial mesmo que não tenha muita rentabilade",
                            "Entender risco e retorno: Investimentos mais arriscados geralmente oferecem retornos maiores, mas exigem conhecimento e tolerância ao risco. Descubra seu perfil, se é mais conservador ou mais arrojado quanto aos riscos."
                        ]
                    ],
                    [
                        "titulo" => "Conhecimento dos Produtos Financeiros",
                        "descricao" => "Compreender os diferentes produtos financeiros ajuda a tomar decisões mais informadas e consequentemente poupar mais dinheiro ao fim do mês.",
                        "topicos" => [
                            "Contas bancárias: Conhecer tipos, taxas e benefícios.",
                            "Crédito e financiamento: Entender empréstimos, hipotecas e financiamentos de veículos.",
                            "Investimentos: Conhecer opções como títulos públicos, ações, fundos de investimento e previdência privada."
                        ]
                    ],
                    [
                        "titulo" => "Planejamento para o Futuro",
                        "descricao" => "O planejamento de longo prazo é essencial para uma vida financeira saudável.",
                        "topicos" => [
                            "Aposentadoria: Começar a poupar cedo para garantir uma aposentadoria confortável.",
                            "Educação dos filhos: Planejar investimentos para os estudos e outras metas importantes.",
                            "Seguros: Proteger-se contra imprevistos com seguros de vida, saúde e patrimônio."
                        ]
                    ],
                    [
                        "titulo" => "Consumo Consciente",
                        "descricao" => "Praticar um consumo consciente ajuda a evitar compras impulsivas e a criar hábitos financeiros saudáveis.",
                        "topicos" => [
                            "Evitar compras por impulso: Avaliar a necessidade e o custo-benefício antes de gastar.",
                            "Comparar preços e pesquisar: Aproveitar promoções, cupons e descontos.",
                            "Pensar no impacto ambiental e social: Consumir de forma ética e sustentável."
                        ]
                    ],
                    [
                        "titulo" => "Tomada de Decisões Financeiras",
                        "descricao" => "A tomada de decisões conscientes é fundamental para alcançar metas financeiras.",
                        "topicos" => [
                            "Educação contínua: Buscar aprender constantemente sobre finanças.",
                            "Análise crítica: Questionar investimentos e produtos financeiros antes de aderir.",
                            "Assessoria financeira: Buscar ajuda de profissionais quando necessário."
                        ]
                    ],
                    [
                        "titulo" => "Comportamento e Psicologia Financeira",
                        "descricao" => "Entender como comportamentos e emoções influenciam as finanças é crucial para que nesses momentos de emoções mais forte você evite cometer inconsequencias financeiras.",
                        "topicos" => [
                            "Evitar vieses emocionais: Como medo e ganância, que podem levar a decisões precipitadas.",
                            "Definir prioridades financeiras: Basear suas decisões nos valores e objetivos de vida é uma forma de controlar sua vida financeira de uma forma saudável."
                        ]
                    ]
                
            ]
        ]);

        
        Lesson::create([
            'module_id' => $module1->id,
            'titulo' => 'Lição de Introdução ao Orçamento',
            'conteudo' => [
                'afirmacao' => 'Orçamento é o primeiro passo para uma boa gestão financeira.',
                'question' => 'Qual é o principal objetivo do orçamento?', 
                'options' => [
                    ['text' => 'Organizar suas finanças', 'correct' => true],
                    ['text' => 'Gastar mais', 'correct' => false]
                ]
            ],
            'pontos' => 10
        ]);

        Lesson::create([
            'module_id' => $module1->id,
            'titulo' => 'Lição de Economia Pessoal',
            'conteudo' =>[
                'afirmacao' => 'Economizar é fundamental para criar uma reserva financeira.',
                'question' => 'Qual é o principal benefício da economia?', 
                'options' => [
                    ['text' => 'Possuir uma reserva de emergência', 'correct' => true],
                    ['text' => 'Comprar mais', 'correct' => false]
                ]
            ],
            'pontos' => 15
        ]);

        Lesson::create([
            'module_id' => $module1->id,
            'titulo' => 'Lição de Planejamento Financeiro',
            'conteudo' => [
                'afirmacao' => 'O planejamento financeiro ajuda a atingir seus objetivos.',
                'type' => 'quiz', 'question' => 'Qual a vantagem do planejamento financeiro?', 
                'options' => [
                    ['text' => 'Melhor controle das finanças', 'correct' => true],
                    ['text' => 'Gastar sem limites', 'correct' => false]
                ]
            ],
            'pontos' => 20
        ]);

        
        $module2 = Module::create([
            'nome' => 'Investimentos Básicos',
            'conteudo' => [
                
                    [
                        "titulo" => "Poupança",
                        "descricao" => "A poupança é um investimento de baixo risco e alta liquidez, ideal para quem deseja começar a investir e criar uma reserva de emergência. Sua rentabilidade é baixa, mas oferece segurança e facilidade de acesso ao dinheiro.",
                        "vantagens" => [
                            "Liquidez imediata",
                            "Isenção de Imposto de Renda para pessoas físicas",
                            "Sem cobrança de taxas de administração"
                        ],
                        "desvantagens" => [
                            "Rentabilidade baixa, muitas vezes abaixo da inflação",
                            "Rendimento pode ser menor que outros investimentos conservadores"
                        ]
                    ],
                    [
                        "titulo" => "CDB (Certificado de Depósito Bancário)",
                        "descricao" => "O CDB é um título emitido por bancos para captar recursos. É uma opção de renda fixa que oferece rentabilidade superior à poupança e possui proteção do Fundo Garantidor de Créditos (FGC).",
                        "vantagens" => [
                            "Proteção do FGC para valores até R$ 250.000 por instituição",
                            "Rentabilidade previsível",
                            "Opções com liquidez diária e com prazos maiores"
                        ],
                        "desvantagens" => [
                            "Incidência de Imposto de Renda sobre os rendimentos",
                            "Menor liquidez em alguns casos, dependendo do prazo de vencimento"
                        ]
                    ],
                    [
                        "titulo" => "Tesouro Direto",
                        "descricao" => "O Tesouro Direto é um programa do governo federal que permite a compra de títulos públicos por pessoas físicas. É uma opção segura e acessível para quem deseja investir em renda fixa com diferentes tipos de rentabilidade.",
                        "vantagens" => [
                            "Baixo risco, pois é garantido pelo governo",
                            "Diversas opções de títulos com diferentes prazos e rentabilidades",
                            "Acessível para pequenos investidores, com aplicações a partir de R$ 30"
                        ],
                        "desvantagens" => [
                            "Incidência de Imposto de Renda sobre os rendimentos",
                            "Taxa de custódia cobrada pela B3",
                            "Possibilidade de perda em caso de resgate antes do vencimento, dependendo da variação de preço do título"
                        ]
                    ],
                    [
                        "titulo" => "Fundos de Investimento",
                        "descricao" => "Os fundos de investimento são uma forma de aplicação coletiva, onde diversos investidores colocam recursos em um fundo gerido por um gestor profissional. Existem diferentes tipos de fundos, como de renda fixa, ações, multimercados e imobiliários.",
                        "vantagens" => [
                            "Gestão profissional dos recursos",
                            "Diversificação automática de investimentos",
                            "Acesso a diferentes mercados e estratégias"
                        ],
                        "desvantagens" => [
                            "Cobrança de taxa de administração e, em alguns casos, taxa de performance",
                            "Possibilidade de rentabilidade negativa, dependendo do fundo",
                            "Incidência de Imposto de Renda sobre os rendimentos"
                        ]
                    ],
                    [
                        "titulo" => "Ações",
                        "descricao" => "Investir em ações significa comprar uma pequena parte de uma empresa listada na bolsa de valores. As ações oferecem potencial de valorização e de recebimento de dividendos, mas também envolvem riscos devido à volatilidade do mercado.",
                        "vantagens" => [
                            "Potencial de altos retornos no longo prazo",
                            "Possibilidade de receber dividendos",
                            "Participação nos resultados e crescimento das empresas"
                        ],
                        "desvantagens" => [
                            "Alto risco devido à volatilidade do mercado",
                            "Requer conhecimento e acompanhamento constante",
                            "Possibilidade de perdas financeiras"
                        ]
                    ],
                    [
                        "titulo" => "Fundos Imobiliários (FIIs)",
                        "descricao" => "Os Fundos Imobiliários permitem que o investidor invista em empreendimentos imobiliários sem precisar comprar um imóvel físico. Os FIIs distribuem rendimentos periódicos e são negociados na bolsa de valores.",
                        "vantagens" => [
                            "Recebimento de rendimentos mensais isentos de Imposto de Renda para pessoas físicas",
                            "Diversificação no mercado imobiliário",
                            "Liquidez, pois são negociados na bolsa de valores"
                        ],
                        "desvantagens" => [
                            "Risco de vacância dos imóveis",
                            "Possibilidade de variação negativa no preço das cotas",
                            "Cobrança de taxas de administração"
                        ]
                    ]
                
            ]
        ]);

        
        Lesson::create([
            'module_id' => $module2->id,
            'titulo' => 'Introdução aos Investimentos',
            'conteudo' =>[
                'afirmacao' => 'Investir é essencial para o crescimento do patrimônio.',
                 'question' => 'Por que investir é importante?', 
                 'options' => [
                    ['text' => 'Para aumentar o patrimônio', 'correct' => true],
                    ['text' => 'Para perder dinheiro', 'correct' => false]
                ]
            ],
            'pontos' => 10
        ]);

        Lesson::create([
            'module_id' => $module2->id,
            'titulo' => 'Riscos e Benefícios dos Investimentos',
            'conteudo' => [
                'afirmacao' => 'Todo investimento possui riscos e benefícios.',
                'question' => 'Investimentos podem ter risco?',
                'options' => [
                    ['text' => 'Sim', 'correct' => true],
                    ['text' => 'Não', 'correct' => false]
                ]
                ],
            'pontos' => 15
        ]);

        Lesson::create([
            'module_id' => $module2->id,
            'titulo' => 'Fundos de Investimento',
            'conteudo' => [
                'afirmacao' => 'Fundo de investimento é uma aplicação coletiva.',
                'question' => 'O que é um fundo de investimento?', 
                'options' => [
                    ['text' => 'Uma aplicação coletiva', 'correct' => true],
                    ['text' => 'Uma conta pessoal', 'correct' => false]
                ]
            ],
            'pontos' => 20
        ]);

        Badge::create([
            'nome'=> 'Aprendiz',
            'descricao' => 'Conquista alcançada quando o usuárion obtém 25 pontos',
            'required_score' => 25
        ]);

        Badge::create([
            'nome'=> 'Novo investidor',
            'descricao' => 'Conquista alcançada quando o usuárion obtém 50 pontos',
            'required_score' => 50
        ]);

        Badge::create([
            'nome'=> 'Arrojado',
            'descricao' => 'Conquista alcançada quando o usuário obtém 50 pontos',
            'required_score' => 80
        ]);

    }
}
