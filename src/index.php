<!DOCTYPE HTML>
<html>
    <head>
        <title>TRUENVEST</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Idamylton Garcia">
        <meta name="description" content="TRUENVEST" />
        <meta name="keywords" content="" />
        <meta name="URL" content="" /><!--URL do site-->
        <meta name="language" content="portuguese">
        <meta name="copyright" content="TRUENVEST"> <!-- Exemplo todos os direitos reservados � CLIENTE-->
        <meta name="robots" content="INDEX, FOLLOW"> <!-- leva o spider a visitar toda a p�gina sem restri��es -->
        <meta name="revisit-after" content="5 day" > <!-- informa a periodicidade de atualiza��o da p�gina EX. 5 days -->
        <meta name="reply-to" content="idamylton@gmail.com"> <!-- email dos respons�veis pelo desenvolvimento e assessoria web -->
        <meta name="document-rights" content="Public"> <!-- define o documento como p�blico, de acesso a todos -->
        <meta name="document-rating" content="General"> <!-- informa a classifica��o geral do conte�do para as idades, sendo geral= todas as iaddes -->
        <meta name="document-state" content="static"><!-- informa se o conte�do � est�tico ou din�mico -->
        <meta http-equiv="Content-Language" content="PT-BR"><!-- define a linguagem predominante da p�gina -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!--ICONS-->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" >
        <!--CSS-->
        <link type="text/css" rel="stylesheet" href="/css/plugins.min.css"/>
        <link type="text/css" rel="stylesheet" href="/css/styles.min.css"/>
        <noscript>
            <!--[if IE]>
                <link rel="stylesheet" href="css/ie.css">
            <![endif]-->
        </noscript>
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <img src="/img/logomarca.png" title="TRUENVEST" alt="TRUENVEST" id="logomarca"/>
                    </div>
                </div>
            </div>
        </header>
        <content>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <form name="form_cadastro" id="form_cadastro" class="block-center">
                            
                            <h3>Iniciar</h3>
                            <fieldset>
                                <h2 class="text-center">Seja bem-vindo!</h2>
                                <p class="text-center">Para iniciar, informe seus dados para contato.</p>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" class="form-control"/>
                                </div>
                                 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email" name="email" class="form-control" maxlength="60"/>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="Whatsapp">Whatsapp</label>
                                    <input type="text" name="whatsapp" class="form-control" maxlength="15"/>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="segmento">Segmento</label>
                                    <select name="segmento" class="form-control">
                                        <option value="-------------------------" selected="selected">-------------------------</option>
                                        <option value="1">Alimentação e bebidas</option>
                                        <option value="2">Vestuário e calçados</option>
                                        <option value="3">Construção</option>
                                        <option value="4">Saúde</option>
                                        <option value="5">Educação</option>
                                        <option value="6">Serviços pessoais</option>
                                        <option value="7">Serviços especializados</option>
                                        <option value="8">Informática</option>
                                        <option value="9">Vendas e marketing</option>
                                        <option value="10">Entretenimento</option>
                                    </select>
                                </div>
                            </fieldset>
                            <h3>Planejamento e finanças</h3>
                            <fieldset>

                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="financas1">Está abrindo um novo negócio?</label>
                                    <select name="financas[1]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="financas2">Foi elaborado um plano de negócios para verificar a viabilidade econômica?</label>
                                    <select name="financas[2]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="5">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="financas3">Foi definido o seu posicionamento no mercado? Região de atuação? Matriz F.O.F.A?</label>
                                    <select name="financas[3]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="5">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="financas4">Conhece os custos fixos/variáveis de seu negócio?</label>
                                    <select name="financas[4]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="5">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                
                            </fieldset>

                            <h3>Mercado e vendas</h3>
                            <fieldset>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="mercado1">Realizou análise do mercado de atuação?</label>
                                    <select name="mercado[1]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="3">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="mercado2">Tem público alvo definido?</label>
                                    <select name="mercado[2]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="mercado3">Tem planejamento de marketing?</label>
                                    <select name="mercado[3]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="5">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="mercado4">Tem mapeamento da concorrência?</label>
                                    <select name="mercado[4]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="mercado5">Possui identidade visual (nome, marca, paleta de cores)?</label>
                                    <select name="mercado[5]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="3">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                            </fieldset>
                            <h3>Pessoas</h3>
                            <fieldset>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="pessoas1">Tem planejamento de equipe necessária?</label>
                                    <select name="pessoas[1]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="3">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="pessoas2">Tem equipe apropriada para a operação?</label>
                                    <select name="pessoas[2]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="5">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="pessoas3">Possui capacitação de atendimento ao cliente?</label>
                                    <select name="pessoas[3]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="pessoas4">Fornecedores já foram mapeados em sua região?</label>
                                    <select name="pessoas[4]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                            </fieldset>
                            <h3>Leis e normas</h3>
                            <fieldset>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="leis1">Tem empresa constituída?</label>
                                    <select name="leis[1]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="5">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="leis2">Possui contador?</label>
                                    <select name="leis[2]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="leis3">Conhece os aspectos legais do seu negócio?</label>
                                    <select name="leis[3]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>

                            </fieldset>
                            <h3>Operação e logística</h3>
                            <fieldset>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="operacao1">Os produtos a serem comercializados já foram adquiridos?</label>
                                    <select name="operacao[1]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="3">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="operacao2">Tem a capacitação em formacão de preço desses produtos?</label>
                                    <select name="operacao[2]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="operacao3">Conhece e já estabeleceu os canais de entrega (frota própria, correios, terceiros) Os fornecedores?</label>
                                    <select name="operacao[3]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="5">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="operacao4">Conhece os custos do frete?</label>
                                    <select name="operacao[4]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="3">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="operacao5">Já estabeleceu como será controlado e gerenciado o estoque?</label>
                                    <select name="operacao[5]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="5">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="operacao6">Conhece o funcionamento da logística reversa e os seus custos?</label>
                                    <select name="operacao[6]" class="form-control">
                                        <option value="" selected="selected">--------</option>
                                        <option value="1">SIM</option>
                                        <option value="0">NÃO</option>
                                    </select>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </content>
        <!--JS-->
        <script type="text/javascript" src="/js/plugins.min.js"></script>
        <script type="text/javascript" src="/js/common.js"></script>
    </body>
</html>