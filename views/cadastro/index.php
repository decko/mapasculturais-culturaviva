<?php
$this->bodyProperties['ng-app'] = "culturaviva";
?>
<div id="page-cadastro" ng-controller="DashboardCtrl">
    <section class="texto">
<!--        <div class="messenger">
            <a href="#" class="close">X</a>
            <p>Algumas informações já foram preenchidas de acordo com o cadastro que o MinC possui de seu Ponto. Confira com essas informações antes de validá-las!</p>
        </div>-->
        <article>
            <h2>NOME DO PONTO<br /><span>Página do seu ponto</span></h2>
            <p>Esta é a página do seu ponto de cultura. Apenas você tem acesso a ela.</p>
            <p>Fique a vontade apra ir preenchendo as sessões -  você não precisa fazer tudo agora! Quanto sua página estiver completa, clique em "validar dados" e aguarde de xx a xx dias para obter uma resposta da Rede Cultura Viva.</p>
            <p>Depois, seu ponto poderá criar eventos, projetos e usar a plataforma para se manter em contato com o MinC, se inscrevendo em editais.</p>
        </article>
    </section>
    <section class="boxs-cadastro">
        <article class="box-info-responsavel">
            <header>
                <a href="<?php echo $app->createUrl('cadastro', 'responsavel'); ?>">
                    <span class="icon icon_profile"></span>
                    <h4>Informações do Responsável</h4>
                    <span class="btn_mais"> + </span>
                </a>
            </header>
            <div class="infos">
                <div class="texto">
                     <p>Precisamos saber quem é você e pegar seus contatos!</p>
                </div>
<!--                <div class="circle-status c100 p56 small">
                    <span>56%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>-->
            </div>
        </article>
        <article class="box-ponto-mapa border-left">
            <header>
                <a href="<?php echo $app->createUrl('cadastro', 'pontoMapa'); ?>">
                    <span class="icon icon_profile"></span>
                    <h4>Seu Ponto no Mapa</h4>
                    <span class="btn_mais"> + </span>
                </a>
            </header>
            <div class="infos">
                <div class="texto">
                     <p>Precisamos saber quem é você e pegar seus contatos!</p>
                </div>
<!--                <div class="circle-status c100 p56">
                    <span>56%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>-->
            </div>
        </article>
        <article class="box-entidade-dados">
            <header>
                <a href="<?php echo $app->createUrl('cadastro', 'entidadeDados'); ?>">
                    <span class="icon"></span>
                    <h4>Dados da Entidade ou Coletivo Cultural</h4>
                    <span class="btn_mais"> + </span>
                </a>
            </header>
            <div class="infos">
                <div class="texto">
                     <p>Precisamos saber quem é você e pegar seus contatos!</p>
                </div>
<!--                <div class="circle-status c100 p56">
                    <span>56%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>-->
            </div>
        </article>
        <article class="box-portfolio border-left">
            <header>
                <a href="<?php echo $app->createUrl('cadastro', 'portifolio'); ?>">
                    <span class="icon"></span>
                    <h4>Portifólio</h4>
                    <span class="btn_mais"> + </span>
                </a>
            </header>
            <div class="infos">
                <div class="texto">
                     <p>Precisamos saber quem é você e pegar seus contatos!</p>
                </div>
<!--                <div class="circle-status c100 p56">
                    <span>56%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>-->
            </div>
        </article>
        <article class="box-entidade-contato">
            <header>
                <a href="<?php echo $app->createUrl('cadastro', 'entidadeContatos'); ?>">
                    <span class="icon"></span>
                    <h4>Contado da Entidade</h4>
                    <span class="btn_mais"> + </span>
                </a>
            </header>
            <div class="infos">
               <div class="texto">
                     <p>Precisamos saber quem é você e pegar seus contatos!</p>
                </div>
<!--                <div class="circle-status c100 p56">
                    <span>56%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>-->
            </div>
        </article>
        <article class="box-fale-mais-ponto border-left">
            <header>
                <a href="<?php echo $app->createUrl('cadastro', 'pontoMais'); ?>">
                    <span class="icon"></span>
                    <h4>Fale mais sobre seu Ponto</h4>
                    <span class="btn_mais"> + </span>
                </a>
            </header>
            <div class="infos">
               <div class="texto">
                     <p>Precisamos saber quem é você e pegar seus contatos!</p>
                </div>
<!--                <div class="circle-status c100 p56">
                    <span>56%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>-->
            </div>
        </article>
        <div class="clear"></div>
    </section>
    <section class="box-status">
        <article class="validar-ponto">
            <h5><i class="icon-publish"></i>Validar</h5>
            <p>Para validar seu ponto, você precisa preencher todas as informações obrigatórias:</p>
            <div class="clear"></div>
        </article>
        <article class="content-status">
            <div class="status">
                <?php // /* ?>
                <div class="circle-status c100 p45">
                    <span>45%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
               <?php  // */ ?>
                <span class="icon icon-user"></span>
                <p>Informações do responável<br />(45% informações opcionais)</p>
            </div>
            <div class="status">
                <?php // /* ?>
                <div class="circle-status c100 p45">
                    <span>45%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
               <?php  // */ ?>
                <span class="icon icon-location"></span>
                <p>Seu Ponto no Mapa<br />(50% informações opcionais)</p>
            </div>
            <div class="status">
               <?php // /* ?>
                <div class="circle-status c100 p45">
                    <span>45%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
               <?php  // */ ?>
                <span class="icon icon-vcard"></span>
                <p>Dados da Entidade Ou Coletivo Cultural<br />(50% informações opcionais)</p>
            </div>
            <div class="status">
               <?php // /* ?>
                <div class="circle-status c100 p100">
                    <span>100%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
               <?php  // */ ?>
                <span class="icon icon-picture"></span>
                <p>Portifólio<br />(100% informações opcionais)</p>
            </div>
            <div class="status">
                <?php // /* ?>
                <div class="circle-status c100 p45">
                    <span>45%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
               <?php  // */ ?>
                <span class="icon icon-phone"></span>
                <p>Contato da Entidade<br />(50% informações opcionais)</p>
            </div>
            <div class="status">
                <?php // /* ?>
                <div class="circle-status c100 p100">
                    <span>100%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
               <?php  // */ ?>
                <span class="icon icon-chat"></span>
                <p>Fale mais sobre seu Ponto<br />(100% informações opcionais)</p>
            </div>
            <div class="clear"></div>
            <?php /*
            <div class="infos-messenge">
                <a href="#" class="close">X</a>
                Algumas informações já foram preenchidas de acordo com o cadastro que o MinC possui de seu Ponto. Configra com atenção essas informações antes de validá-las!
            </div>
            */ ?>
            
            <button class="btn-validar" ng-click="enviar()">Validar</button>

            
        </article>
    </section>
</div>

