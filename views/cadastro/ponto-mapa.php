<?php
    $this->bodyProperties['ng-app'] = "culturaviva";
    $this->layout = 'cadastro';
    $this->cadastroTitle = 'Seu Ponto no Mapa';
    $this->cadastroText = 'Vamos colocar seu ponto no mapa! Isso vai ser importante para entendermos as regiões carentes e férteis em pontos de cultura, e para você pode ser encontrado por outros agentes e pontos!';
    $this->cadastroIcon = 'icon-location';
    $this->cadastroPageClass = 'ponto-mapa page-base-form';
?>


<form ng-controller="PointCtrl">
    <div class="form">
        <h4>Informações Obrigatórias</h4>
        
        <div class="row">
            <label class="colunm1">
                <span>Nome do Ponto/Pontão de Cultura*</span>
                <input type="text" ng-blur="save_field('name')" ng-model="agent.name" />
            </label>
        </div>  

        <div class="clear"></div>

        <div class="row">
            <label class="colunm1">
                <span class="destaque">Breve descrição (400 caracteres) do ponto de cultura* <i>?</i></span>
                <textarea max-length="400" ng-blur="save_field('shortDescription')" ng-model="agent.shortDescription"></textarea>
            </label>
        </div>  

        <div class="clear"></div>

        <div class="row">

            <label class="colunm1">
                <span>CEP do Ponto de Cultura*</span>
                <input type="text" ng-blur="save_field('cep')" ng-model="agent.cep"/>
            </label>

            <label class="colunm2">
                <span>O pontão tem sede própria*</span>
                <select ng-blur="save_field('endereco')" ng-model="agent.endereco"></select>

                <input type="checkbox" />
                mesmo endereço cadastrado no CNPJ da entidade</span>
            </label>
        </div>

        <div class="clear"></div>

        <div class="row">
            <span class="colunm1">
                <span class="destaque">Endereço* <i>?</i></span>
            </span>
        </div>

        <div class="clear"></div>

        <div class="row">
            <label class="colunm1">
                <span>Estado*</span>
                <select ng-blur="save_field('estado')" ng-model="agent.estado">
                    <option value="AC">Acre</option>              <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>             <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>             <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>  <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>             <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>       <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>      <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>           <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>        <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option> <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>           <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>         <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </label>

            <label class="colunm2">
                <span>Cidade*</span>
                <input type="text" ng-blur="save_field('cidade')" ng-model="agent.cidade"/>
            </label>

            <label class="colunm3">
                <span>Bairro*</span>
                <input type="text" ng-blur="save_field('bairro')" ng-model="agent.bairro"/>
            </label>
        </div>

        <div class="clear"></div>

        <div class="row">
            <label class="colunm1">
                <span>Número*</span>
                <input type="text" ng-blur="save_field('numero')" ng-model="agent.numero"/>
            </label>

            <label class="colunm2">
                <span>Rua*</span>
                <input type="text" ng-blur="save_field('rua')" ng-model="agent.rua"/>
            </label>

            <label class="colunm3">
                <span>Complemento*</span>
                <input type="text" ng-blur="save_field('complemento')" ng-model="agent.complemento"/>
            </label>
        </div>
        <div class="clear"></div>
    </div>


    <div class="form form-mapa">

    </div>


    <div class="form form-opcional">
        <h4>Informações Opcionais</h4>

        <label>
            <span class="destaque">Selecione o local em que são realizadas as ações culturais do Ponto/Pontão de Cultura (marque quantas opções quiser)</span>
        </label>

        <div class="row">
            <label class="colunm1">
                <span>Estado*</span>
                <select ng-blur="save_field('local_acao_estado')" ng-model="agent.local_acao_estado">
                    <option value="AC">Acre</option>              <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>             <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>             <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>  <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>             <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>       <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>      <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>           <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>        <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option> <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>           <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>         <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </label>

            <label class="colunm2">
                <span>Cidade*</span>
                <input type="text" ng-blur="save_field('local_acao_cidade')" ng-model="agent.local_acao_cidade"/>
            </label>
        </div>


        <div data-ng-init="espacos=['Escolas', 'Universidades', 'Praças', 'Salas', 'CEUs', 'Feiras', 'Eventos', 'Outros locais']">

            <div ng-repeat="espaco in espacos" ng-if="$index % 3 == 0" class="row">
                <label>
                    <input ng-checked="local_acao_espaco(espacos[$index])"
                           ng-click="local_acao_espaco(espacos[$index], 'toggle')"
                           type="checkbox" />
                    <span>{{ espacos[$index] }}</span>
                </label>

                <label ng-if="espacos[$index + 1]">
                    <input ng-checked="local_acao_espaco(espacos[$index + 1])"
                           ng-click="local_acao_espaco(espacos[$index + 1], 'toggle')"
                           type="checkbox" />
                    <span>{{ espacos[$index + 1] }}</span>
                </label>

                <label ng-if="espacos[$index + 2]">
                    <input ng-checked="local_acao_espaco(espacos[$index + 2])"
                           ng-click="local_acao_espaco(espacos[$index + 2], 'toggle')"
                           type="checkbox" />
                    <span>{{ espacos[$index + 2] }}</span>
                </label>
            </div>

        </div>

    </div>
</form>