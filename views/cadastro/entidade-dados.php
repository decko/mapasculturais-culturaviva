<?php
    $this->bodyProperties['ng-app'] = "culturaviva";
    $this->layout = 'cadastro';
    $this->cadastroTitle = 'Dados da Entidade';
    $this->cadastroText = 'Inclua os dados da Entidade responsável pelo Ponto de Cultura';
    $this->cadastroIcon = 'icon-vcard';
    $this->cadastroPageClass = 'dados-entidade page-base-form';
?>


<form ng-controller="EntityCtrl">
    <div class="form">
        <h4>Informações Obrigatórias</h4>
        <div class="row" ng-show="entity.semCNPJ">
            <label class="colunm-50">
                <span class="destaque">Quero ser* <i>?</i></span>
                <select name="tipoPontoCulturaDesejado"
                        ng-change="save_field('tipoPontoCulturaDesejado')"
                        ng-model="entity.tipoPontoCulturaDesejado">
                    <option value="ponto">Ponto</option>
                    <option value="pontao">Pontão</option>
                </select>
            </label>

            <label class="colunm-50">
                <span class="destaque">Tipo de organização* <i>?</i></span>
                <select name="tipoOrganizacao"
                        ng-change="save_field('tipoOrganizacao')"
                        ng-model="entity.tipoOrganizacao">
                    <option value="coletivo">Coletivo Cultural</option>
                    <option value="entidades">Entidade Cultural</option>
                </select>
            </label>
        </div>
        <div class="clear"></div>
        <div class="row">
            <label class="colunm-50">
                <span class="destaque">CNPJ da Entidade*</span>
                <input type="text" ng-blur="save_field('cnpj')" ng-model="entity.cnpj" disabled="entity.semCNPJ>
                <p ng-show="true"></p>
                <div class="naoseaplica">
                    <input type="checkbox"
                           ng-checked="entity.semCNPJ"
                           ng-change="save_field('semCNPJ')"
                           ng-model="entity.semCNPJ" >não se aplica <span class="destaque"><i>?</i></span>
                </div>
            </label>

            <label class="colunm-50" ng-hide="entity.semCNPJ">
                <span class="destaque">Nome da Razão Social da Entidade* <i>?</i></span>
                <input type="text" ng-blur="save_field('nomeCompleto')" ng-model="entity.nomeCompleto" >
            </label>
        </div>
        <!--<div ng-show="entity.semCNPJ">-->
        <div class="clear"></div>
        <div class="row">
            <label class="colunm-50" ng-hide="entity.semCNPJ">
                <span class="destaque">Nome do Representante Legal* <i>?</i></span>
                <input type="text" ng-blur="save_field('representanteLegal')" ng-model="entity.representanteLegal" >
            </label>

            <label class="colunm-50">
                <span class="destaque" ng-hide="entity.semCNPJ">Nome Fantasia* <i>?</i></span>
                <span class="destaque" ng-show="entity.semCNPJ">Nome do Coletivo Cultura* <i>?</i></span>
                <input type="text" ng-blur="save_field('name')" ng-model="entity.name" >
            </label>
        </div>
        <div class="clear"></div>
        <div class="row" ng-hide="entity.semCNPJ">
            <label class="colunm-50">
                <span class="destaque">Tipo de Certificação* <i>?</i></span>
                <select name="tipoCertificacao"
                        ng-change="save_field('tipoCertificacao')"
                        ng-model="entity.tipoCertificacao">
                    <option value="ponto_coletivo">Ponto de Cultura - Grupo ou Coletivo</option>
                    <option value="ponto_entidade">Ponto de Cultura - Entidade</option>
                    <option value="pontao_entidade">Pontão de Cultura - Entidade</option>
                </select>
            </label>
        </div>
        <div class="clear"></div>

        <div class="row">
            <label class="colunm-50">
                <span class="destaque">Você já foi fomentado pelo MinC* <i>?</i></span>
                <span class="label-radio">
                    <input type="radio" name="formentominc" ng-value="true"
                           ng-blur="save_field('foiFomentado')"
                           ng-model="entity.foiFomentado"> sim
                </span>
                <span class="label-radio">
                <input type="radio" name="formentominc" ng-value="false"
                       ng-blur="save_field('foiFomentado')"
                       ng-model="entity.foiFomentado"> Não
            </label>
        </div>
        <div class="clear"></div>
        <div class="row" ng-show="entity.semCNPJ && entity.foiFomentado">
            <label class="colunm-50">
                <span>Que tipo de financiamento recebe ou recebeu?</span>
                <input type="text"
                       ng-blur="save_field('descOutrosFinanciamentos')"
                       ng-model="entity.descOutrosFinanciamentos" >
            </label>
        </div>
        <div class="clear"></div>
        <div ng-hide="entity.semCNPJ">
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-full">
                    <span class="destaque">Tipo de Reconhecimento* <i>?</i></span>
                    <span class="label-radio"><input type="radio"
                                                     name="tiporeconhecimento"
                                                     ng-value="minc"
                                                     ng-change="save_field('tipoReconhecimento')"
                                                     ng-model="entity.tipoReconhecimento" > Direto com o MinC</span>
                    <span class="label-radio"><input type="radio"
                                                     name="tiporeconhecimento"
                                                     ng-value="estadual"
                                                     ng-change="save_field('tipoReconhecimento')"
                                                     ng-model="entity.tipoReconhecimento" > Estadual</span>
                    <span class="label-radio"><input type="radio"
                                                     name="tiporeconhecimento"
                                                     ng-value="municipal"
                                                     ng-change="save_field('tipoReconhecimento')"
                                                     ng-model="entity.tipoReconhecimento" > Municipal</span>
                    <span class="label-radio"><input type="radio"
                                                     name="tiporeconhecimento"
                                                     ng-value="intermunicipal"
                                                     ng-change="save_field('tipoReconhecimento')"
                                                     ng-model="entity.tipoReconhecimento" > Intermunicipal</span>
                </label>
            </div>
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-50">
                    <span>Número do Edital de Seleção*</span>
                    <input type="text" ng-blur="save_field('numEdital')" ng-model="entity.numEdital" >
                </label>

                <label class="colunm-50">
                    <span>Ano do Edital de Seleção*</span>
                    <input type="text" ng-blur="save_field('anoEdital')" ng-model="entity.anoEdital" >
                </label>
            </div>
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-50">
                    <span>Nome do Projeto*</span>
                    <input type="text" ng-blur="save_field('nomeProjeto')" ng-model="entity.nomeProjeto" >
                </label>

                <label class="colunm-50">
                    <span class="destaque">Local de Realização* <i>?</i></span>
                    <input type="text" ng-blur="save_field('localRealizacao')" ng-model="entity.localRealizacao" >
    <!--                <select ng-blur="save_field('')" ng-model="entity.locationrealization">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                    </select>-->
                </label>
            </div>
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-50">
                    <span class="destaque">Etapa do Projeto* <i>?</i></span>
                    <span class="label-radio"><input type="radio"
                                                     name="etapaprojeto"
                                                     ng-value="em_execucao"
                                                     ng-change="save_field('etapaProjeto')"
                                                     ng-model="entity.yes" > Em Execução</span>
                    <span class="label-radio"><input type="radio"
                                                     name="etapaprojeto"
                                                     ng-value="executado"
                                                     ng-change="save_field('etapaProjeto')"
                                                     ng-model="entity.no"  > Já executado</span>
                </label>
            </div>
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-50">
                    <span>Proponente* </span>
                    <input type="text" ng-blur="save_field('proponente')" ng-model="entity.proponente" >
                </label>
            </div>
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-full">
                    <span class="destaque">Resumo do projeto(objeto)* <i>?</i></span>
                    <textarea ng-blur="save_field('resumoProjeto')" ng-model="entity.resumoProjeto"> </textarea>
                </label>
            </div>
            <div class="clear"></div>
    <!--        <div class="row">
                <label class="colunm-full recursos-projeto">
                    <span class="destaque">Recursos do Projeto selecionado* <i>?</i></span>
                    <table>
                        <tr>
                            <td width="200"></td>
                            <td width="150" class="cinza">Custeio*</td>
                            <td width="150" class="cinza">Capital*</td>
                            <td width="150" class="cinza">Total*</td>
                        </tr>
                        <tr>
                            <td class="cinza">Valor Total(R$)*</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="cinza">
                            <td >Ação*</td>
                            <td colspan="3">Valor das Parcelas(R$)*</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="cinza">Total das Parcelas (R$)*</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </label>
            </div>-->
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-50">
                    <span class="destaque">Prestação de Contas* <i>?</i></span>
                    <span class="label-radio"><input type="radio" name="prestacaoContasEnvio" ng-value="enviada" ng-blur="save_field('prestacaoContasEnvio')" ng-model="entity.prestacaoContasEnvio" > Enviada</span>
                    <span class="label-radio"><input type="radio" name="prestacaoContasEnvio" ng-value="naoEnviada" ng-blur="save_field('prestacaoContasEnvio')" ng-model="entity.prestacaoContasEnvio"  > Não Enviada</span>
                    <span class="label-radio"><input type="radio" name="prestacaoContasEnvio" ng-value="premiado" ng-blur="save_field('prestacaoContasEnvio')" ng-model="entity.prestacaoContasEnvio" > Ponto de Cultura Premiado</span>
                    <span class="label-radio"><input type="radio" name="prestacaoContasStatus" ng-value="aprovada" ng-blur="save_field('prestacaoContasStatus')" ng-model="entity.prestacaoContasStatus"  > Aprovada</span>
                    <span class="label-radio"><input type="radio" name="prestacaoContasStatus" ng-value="naoaprovada" ng-blur="save_field('prestacaoContasStatus')" ng-model="entity.prestacaoContasStatus" > Não Aprovada</span>
                    <span class="label-radio"><input type="radio" name="prestacaoContasStatus" ng-value="analise" ng-blur="save_field('prestacaoContasStatus')" ng-model="entity.prestacaoContasStatus"  > Em Análise</span>
                </label>
            </div>
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-full vigencia">
                    <span >Vigência*: </span>
                    <select  placeholder="de 00/00/0000"  ng-blur="save_field('')" ng-model="entity.vigentede">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                    </select>
                    <select  placeholder="a 00/00/0000"  ng-blur="save_field('')" ng-model="entity.locationrealization">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                    </select>
                </label>
            </div>
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-full">
                   <span class="destaque">Recebe ou recebeu outros financiamentos? (apoios, patrocínios, prêmios, bolsas, convênios, etc)* <i>?</i></span>
                    <span class="label-radio"><input type="radio" name="financiamentos" value="1" ng-change="save_field('recebeOutrosFinanciamentos')" ng-model="entity.recebeOutrosFinanciamentos"> Sim</span>
                    <span class="label-radio"><input type="radio" name="financiamentos" value="0" ng-change="save_field('recebeOutrosFinanciamentos')" ng-model="entity.recebeOutrosFinanciamentos"> Não</span>
                </label>
            </div>
            <div class="clear"></div>
            <div class="row">
                <label class="colunm-50">
                    <span>Quais ?</span>
                    <input type="text" ng-show='recebeOutrosFinanciamentos' ng-blur="save_field('descOutrosFinanciamentos')" ng-model="entity.descOutrosFinanciamentos" >
                </label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</form>