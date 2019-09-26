<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ: Problemas comuns | EZY 3D</title>

    <!-- ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="src/app/assets/img/includes/menu/logo_orange.ico">
    <!-- THIS CSS -->
    <link rel="stylesheet" href="src/app/assets/css/faq.css">

</head>

<body>
    <?php 
    $pagina = 'faq';
    include"src/includes/menu.php";
    ?>


    <div id="fundo-menu">
    </div>

    <main>

        <div class="w-100 bg-orange">
            <div class="container text-white">
                <h1 class="py-5">FAQ</h1>
            </div>
        </div>

        <div class="container my-5" id="container">
            <div class="row">
                <div class="col-lg-4 h-100">
                    <div class="list-group">
                        <a href="#" id="faqitem-1" class="faq-menu list-group-item list-group-item-action active">
                            ?php?$flashprint?> </a>
                        <a href="#" id="faqitem-2"
                            class="faq-menu list-group-item list-group-item-action">?php?$rede?></a>
                        <a href="#" id="faqitem-3"
                            class="faq-menu list-group-item list-group-item-action">?php?$impressao?></a>
                    </div>
                </div>
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="row">
                        <!-- 1 -->
                        <div class="col-12 faq" id="faq-1">
                            <h2>?php?$flashprint?></h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                ?php?$item1?>
                                                <i id="down-1" class="fas fa-chevron-down float-right"></i>

                                            </span>
                                        </div>
                                        <div id="problem-1" class="problem mt-5">
                                            <p>
                                                ?php?$txt1_1?>
                                            </p>
                                            <p>
                                                ?php?$txt1_2?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 py-4 my-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                ?php?$item2?>
                                                <i id="down-2" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-2" class="problem">
                                            <p>
                                                ?php?$txt2_1?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- 2 -->
                        <div class="col-12 faq" id="faq-2">
                            <h2>?php?$rede?></h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                ?php?$item3?>
                                                <i id="down-3" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-3" class="problem">
                                            <p>
                                                ?php?$txt3_1?>
                                            </p>
                                            <ul>
                                                <li>
                                                    ?php?$txt3_2?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_3?>
                                                </li>
                                            </ul>

                                            <hr>
                                            <h3>?php?$txt3_4?></h3>
                                            <ul>
                                                <li>
                                                    ?php?$txt3_5?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_6?>.
                                                </li>
                                                <li>
                                                    ?php?$txt3_7?>
                                                </li>
                                            </ul>

                                            <hr>
                                            <h3>?php?$txt3_8?></h3>
                                            <ul>
                                                <li>
                                                    ?php?$txt3_9?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_10?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_11?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_12?>
                                                </li>
                                            </ul>

                                            <hr>
                                            <h3>?php?$txt3_13?></h3>
                                            <ul>
                                                <li>
                                                    ?php?$txt3_14?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_15?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_16?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_17?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_18?>
                                                </li>
                                                <li>
                                                    ?php?$txt3_19?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- 3 -->
                        <div class="col-12 faq" id="faq-3">
                            <h2>Impressão</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Por que a impressão está atravessada na base de impressão?
                                                <i id="down-4" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-4" class="problem">
                                            <p>
                                                Quando sua impressão não sai fixada na base de impressão e fica no fundo
                                                do tanque:
                                            </p>
                                            <ul>
                                                <li>
                                                    Stage (base de impressão) descalibrado.
                                                    Faça a calibração como recomendado no manual de acordo com a versão
                                                    de sua
                                                    impressora.
                                                </li>
                                                <li>
                                                    Arquivo mal posicionado na base durante posicionamento no software.
                                                    Conferir as primeiras camadas e verificar se o arquivo aparece. Caso
                                                    não apareça,
                                                    realizar novamente o posicionamento do
                                                    arquivo no software, e certificar -se que está sobre a plataforma;
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="src/app/assets/img/faq/impressao.png" width="100%"
                                                        style="max-width: 500px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Delaminação
                                                <i id="down-5" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-5" class="problem">
                                            <p>
                                                A delaminação é um problema persistente e tem várias causas possíveis:
                                            </p>
                                            <ul>
                                                <li>
                                                    Nenhum protetor de tela na sua tela LCD. Um protetor de tela não
                                                    apenas protege sua
                                                    tela LCD da resina, mas também
                                                    funciona como um agente de liberação entre a tela LCD e o filme do
                                                    recipiente,
                                                    reduzindo a aderência. Resina curada ou
                                                    líquida em sua tela LCD.
                                                </li>
                                                <li>
                                                    Se houver alguma resina em sua tela, seu tanque provavelmente vazou
                                                    e causou a
                                                    delaminação do seu modelo. Esfregue a
                                                    resina líquida com uma toalha de papel absorvente e retire
                                                    cuidadosamente qualquer
                                                    resina curada com um cartão de
                                                    plástico.
                                                </li>
                                                <li>
                                                    A resina tem uma temperatura de trabalho, onde em dias frios pode
                                                    ocorrer falha na
                                                    impressão, como por exemplo a
                                                    laminação. Para obter esta temperatura de trabalho deve-se entrar em
                                                    contato com o
                                                    fabricante.
                                                </li>
                                                <li>
                                                    Se os três primeiros passos estão ok, por favor, verifique suas
                                                    configurações.
                                                    Verifique se você está usando o perfil e
                                                    as configurações corretas de resina em seu software e imprima
                                                    novamente.
                                                </li>
                                            </ul>
                                            <p>
                                                <i class="text-muted">
                                                    Anotações importantes! Lembre-se sempre de limpar completamente o
                                                    seu recipiente
                                                    entre cada impressão. Qualquer resina
                                                    sólida na cuba ou no filme da cuba pode afetar adversamente sua
                                                    próxima impressão.
                                                </i>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Suportes parcialmente falhados
                                                <i id="down-6" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-6" class="problem">
                                            <p>
                                                Se seus suportes estão falhando, por favor verifique os seguintes itens:
                                            </p>
                                            <ul>
                                                <li>
                                                    <strong>Seu tanque está vazando?</strong><br>
                                                    Caso seu tanque tenha algum furo e tenha vazado resina na tela de
                                                    LCD da sua
                                                    impressora, troque o FEP de acordo com o
                                                    vídeo tutorial explicado, limpe todo resíduo de resina que estará
                                                    curado sobre a
                                                    tela de LCD.
                                                </li>
                                                <li>
                                                    <strong>Você está usando os perfis de resinas mais atuais para sua
                                                        impressora?</strong><br>
                                                    Certifique-se de ter baixado os perfis de resina mais recentes para
                                                    sua
                                                    impressora
                                                    em nossa página de Suporte e
                                                    selecionado o perfil de resina correto no software antes de
                                                    imprimir. Se
                                                    necessário,
                                                    baixe os últimos perfis de resina
                                                    através dos links abaixo.
                                                </li>
                                                <li>
                                                    <strong>Você está usando suportes o suficiente?</strong><br>
                                                    Certifique-se de que a quantidade de suportes e suas medidas estão
                                                    compatível
                                                    com a
                                                    impressão que está sendo executada.
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="src/app/assets/img/faq/impressao.png" width="100%"
                                                        style="max-width: 500px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Deformação
                                                <i id="down-7" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-7" class="problem">
                                            <ul>
                                                <li>
                                                    A deformação pode ser causada quando modelos grandes são impressos
                                                    direto na base de impressão. Para evitar empenamentos
                                                    ao imprimir modelos com uma grande área de superfície, siga as
                                                    instruções abaixo.
                                                </li>
                                                <p>
                                                    Carregue seu modelo no software de criação de sua preferência e use
                                                    as funções para girar seu modelo para um ângulo de
                                                    60 graus. Ao imprimir modelos em ângulo, os suportes são essenciais.
                                                    Adicione manualmente suportes de acordo com o
                                                    tamanho da sua impressão. Girar seu modelo e adicionar suportes não
                                                    apenas desestimula o empenamento, mas também ajuda a
                                                    reduzir o encolhimento.
                                                </p>
                                                <li>
                                                    A resina tem uma temperatura de trabalho, onde em dias frios pode
                                                    ocorrer falha na impressão, como por exemplo a
                                                    deformação. Para obter esta temperatura de trabalho deve-se entrar
                                                    em contato com o fabricante.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Linhas no modelo impresso
                                                <i id="down-8" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-8" class="problem">
                                            <p>
                                                Se o mesmo filme de recipiente tiver sido usado para muitas impressões,
                                                o filme do recipiente começará a ficar mais
                                                preso à sua impressão, criando linhas indesejadas. Um filme sujo ou
                                                frouxo pode também causar linhas recuadas no seu
                                                modelo.
                                            </p>
                                        </div>
                                    </div>


                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Minha impressão ficou muito apertada/frouxa e não deu encaixe
                                                <i id="down-9" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-9" class="problem">
                                            <p>
                                                A impressora vai com uma pré-configuração de tempos para as resinas da
                                                MakerTech Labs onde será preciso fazer somente um
                                                ajuste fino de acordo com o uso específico.
                                            </p>

                                            <hr>
                                            <h5>
                                                O furo ficou muito fechado e ficou muito apertado no modelo / A
                                                impressão ficou com o dimensional externo maior.
                                            </h5>
                                            <ul>
                                                <li>
                                                    Abra a interface de sua impressora.
                                                </li>
                                                <li>
                                                    Vá até o menu RESINAS.
                                                </li>
                                                <li>
                                                    Escolha o perfil que está usando para imprimir e clique em EDITAR.
                                                </li>
                                                <li>
                                                    Vá até o campo de DEMAIS CAMADAS > TEMPO DE CURA e diminua o tempo
                                                    de acordo com a diferença que deu na sua impressão
                                                    (Geralmente 0,2 seg).
                                                </li>
                                            </ul>

                                            <hr>
                                            <h5>O furo ficou muito grande e ficou frouxo no modelo / A impressão ficou
                                                com o dimensional externo menor.</h5>
                                            <ul>
                                                <li>
                                                    Abra a interface de sua impressora.
                                                </li>
                                                <li>
                                                    Vá até o menu RESINAS.
                                                </li>
                                                <li>
                                                    Escolha o perfil que está usando para imprimir e clique em EDITAR.
                                                </li>
                                                <li>
                                                    Vá até o campo de DEMAIS CAMADAS > TEMPO DE CURA e aumente o tempo
                                                    de acordo com a diferença que deu na sua impressão
                                                    (Geralmente 0,2 seg.).
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Rachadura no modelo
                                                <i id="down-10" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-10" class="problem">
                                            <p>
                                                Se o seu modelo quebrou, deve ser feito oco. Meshmixer é uma boa
                                                ferramenta para impressões vazadas. Pode ser baixado da
                                                nossa página de Suporte.
                                            </p>
                                            <p>
                                                Para escavar seu modelo, siga estes dois passos:
                                            </p>
                                            <ul>
                                                <li>
                                                    Faça o download do Meshmixer em nossa página de suporte.
                                                </li>
                                                <li>
                                                    Use uma espessura de parede de 2-3 mm.
                                                </li>
                                            </ul>

                                            <p>
                                                Recomendamos que os modelos grandes sejam sempre vazados.
                                            </p>
                                            <p>
                                                Se o modelo tiver detalhes muito precisos, recomendamos as duas etapas a
                                                seguir:
                                            </p>
                                            <ul>
                                                <li>
                                                    Nas configurações do Perfil de Fatia, reduza a “velocidade de
                                                    retração z” ao mínimo 15.
                                                </li>
                                                <li>
                                                    Colocando o modelo em um ângulo de 45 graus nas direções x e y.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>


                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Buracos no modelo
                                                <i id="down-11" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-11" class="problem">
                                            <p>
                                                Quando a plataforma desce, a pressão da resina dentro de um modelo oco e
                                                plano pode forçar uma quebra na parede do
                                                modelo, criando furos.
                                                Os modelos ocos não podem ser impressos na plataforma, eles devem ser
                                                colocados em um ângulo.
                                            </p>
                                            <ul>
                                                <li>
                                                    Levante o modelo a uma distância de no mínimo 3mm da plataforma.
                                                </li>
                                                <li>
                                                    Posicione o modelo em um ângulo de 10 a 15 graus.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Somente os suportes foram impressos
                                                <i id="down-12" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-12" class="problem">
                                            <p>
                                                Se a sua plataforma impressa tiver apenas suportes impressos, as pontas
                                                dos suportes estão muito pequenas ou a
                                                quantidade de suporte está muito baixa para o diâmetro da ponta do
                                                suporte.
                                            </p>
                                            <p>
                                                As configurações de suporte devem ser feitas de acordo com o que vai
                                                estar sendo impresso, ou seja, não há uma
                                                configuração padrão para todas as impressões.
                                            </p>
                                            <p>
                                                Quanto maior a área de contato do modelo, mais reforçado precisa ser os
                                                suportes.
                                            </p>

                                            <ul>
                                                <li>
                                                    Clique em Suportes: <br>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img src="src/app/assets/img/faq/ft1.png" width="100%"
                                                                style="max-width: 250px">
                                                        </div>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    Opções de suporte: <br>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img src="src/app/assets/img/faq/ft2.png" width="100%"
                                                                style="max-width: 250px">
                                                        </div>
                                                    </div>
                                                </li>
                                                <br>
                                                <li>
                                                    Aba “Tamanho do suporte”: <br>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img src="src/app/assets/img/faq/ft3.png" width="100%"
                                                                style="max-width: 500px">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <p>
                                                <strong>Diâmetro de ponta:</strong> Diâmetro do topo do suporte.<br>
                                                <strong>Ângulo da ponta:</strong> Ângulo formado entre a ponta do
                                                suporte e o próprio
                                                suporte.<br>
                                                <strong>Diâmetro do corpo:</strong> Diâmetro do corpo do suporte.<br>
                                                <strong>Diâmetro da base:</strong> Diâmetro da base do suporte.<br>
                                                <strong>Altura da base:</strong> Altura da base do suporte.<br>
                                            </p>
                                            <p>
                                                Aumente o diâmetro do topo do suporte (Diâmetro de ponta) de forma que
                                                ele fixe melhor no modelo, assim não se rompendo
                                                quando o modelo for descolado do fundo do reservatório.
                                            </p>
                                        </div>
                                    </div>



                                    <div class="col-12 py-4 mb-3"
                                        style="border-top: solid 1px rgba(0,0,0,.2);border-bottom: solid 1px rgba(0,0,0,.2);">
                                        <div class="txt-problem">
                                            <span>
                                                Modelo pegajoso
                                                <i id="down-13" class="fas fa-chevron-down float-right"></i>
                                            </span>
                                        </div>
                                        <div id="problem-13" class="problem">
                                            <p>
                                                Se o seu modelo é pegajoso após a pós-cura, o procedimento de limpeza
                                                não foi seguido corretamente. Para o procedimento
                                                de lavagem correto.
                                            </p>
                                            <ul>
                                                <li>
                                                    Para reduzir a viscosidade, você precisará lavar o modelo
                                                    completamente usando spray de isopropanol ou com isopropanol e
                                                    um limpador ultrassônico.
                                                </li>
                                            </ul>

                                            <p>
                                                <i>
                                                    <strong>
                                                        A limpeza da impressão é tão importante quanto o próprio
                                                        processo de
                                                        impressão.
                                                    </strong>
                                                </i>
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <?php include"src/includes/footer.php";?>
    </main>



</body>

<!-- THIS JS -->
<script src="src/app/assets/js/faq.js"></script>

</html>