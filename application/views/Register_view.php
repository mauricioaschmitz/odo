<div class="container">
    <div class="col-md-12 col-xs-12" style="margin-bottom: 100px;">
        <form name="registros" method="post" enctype="multipart/form-data">
            <div class="well well-sm">
                <p><strong>Atenção! </strong>Preencha o Formulário abaixo para realizar o cadastro.
                    A identificação do usuário é realizada através do número do CPF, atenção ao inserir. <p><strong>Os campos marcados com * são obrigatórios.</strong></p>
            </div>
            <div class ="row">
                <div class="col-3 form-group">
                    <label style="float: left"><b>CPF *</b></label>
                    <input data-mask="999.999.999-99" class = "form-control" type="tel" name="cpf" id="cpf" value="<?php
                    if (isset($cpf)) {
                        echo $cpf;
                    }
                    ?>" placeholder="000.000.000-00" autofocus=""/>
                </div>
                <div class="col-9 form-group">
                    <label><b>Nome Completo *</b></label>
                    <input class = "form-control" type="text" name="nome" id="nome" value="<?php
                    if (isset($nome)) {
                        echo $nome;
                    }
                    ?>" placeholder="Nome"/>
                </div>
            </div>
            <div class="row">
                <div class="col-3 form-group">
                    <label style="float: left"><b>Data de Nascimento *</b></label>
                    <input data-mask ="99/99/9999" class = "form-control" type="tel" name="dataNasc" id="data_nasc" value="<?php
                    if (isset($dataNasc)) {
                        echo $dataNasc;
                    }
                    ?>" placeholder="00/00/0000"/>
                </div>
                <div class="col-3 form-group">
                    <label style="float: left"><b>Telefone *</b></label>
                    <input data-mask ="(99)99999-9999" class="form-control" type="tel" name="telefone" id="fone" value="<?php
                    if (isset($telefone)) {
                        echo $telefone;
                    }
                    ?>" placeholder="(00)0000-0000"/>
                </div>
                <div class="col-3 form-group">
                    <label style="display: block;"><b>Sexo *</b></label>
                    <input class="radio-inline" type="radio" name="sexo" value="M" <?php
                    if ($sexo == "M") {
                        echo "checked";
                    }
                    ?>> Masculino
                    <input class="radio-inline" type="radio" name="sexo" value="F" <?php
                    if ($sexo == "F") {
                        echo "checked";
                    }
                    ?>> Feminino
                </div>
                <div class="col-3 form-group">
                    <label style="float: left">Estado Civil</label>
                    <select id="estadoCivil" name ="estadoCivil" class="form-control selectpicker span10" data-live-search="true">
                        <option value=""<?php
                        if ($estadoCivil == "") {
                            echo " selected";
                        }
                        ?>>Selecione</option>
                        <option value="Solteiro(a)"<?php
                        if ($estadoCivil == "Solteiro(a)") {
                            echo " selected";
                        }
                        ?>>Solteiro(a)</option>
                        <option value="Casado(a)"<?php
                        if ($estadoCivil == "Casado(a)") {
                            echo " selected";
                        }
                        ?>>Casado(a)</option>
                        <option value="Divorciado(a)"<?php
                        if ($estadoCivil == "Divorciado(a)") {
                            echo " selected";
                        }
                        ?>>Divorciado(a)</option>
                        <option value="Viúvo(a)"<?php
                        if ($estadoCivil == "Viúvo(a)") {
                            echo " selected";
                        }
                        ?>>Viúvo(a)</option>
                        <option value="Separado(a)"<?php
                        if ($estadoCivil == "Separado(a)") {
                            echo " selected";
                        }
                        ?>>Separado(a)</option>
                        <option value="Companheiro(a)"<?php
                        if ($estadoCivil == "Companheiro(a)") {
                            echo " selected";
                        }
                        ?>>Companheiro(a)</option>
                    </select>
                </div>
            </div>
            <div class ="row">
                <div class="col-12 form-group">
                    <label>Email</label>
                    <input class = "form-control" type="email" name="email" id="email" value="<?php
                    if (isset($email)) {
                        echo $email;
                    }
                    ?>" placeholder="Email"/>
                </div>
            </div>
            <div class ="row">
                <div class="col-3 form-group">
                    <label style="float: left">CEP</label>
                    <input data-mask ="99999-999" class="form-control" type="text" name="cep" id="cep" value="<?php
                    if (isset($cep)) {
                        echo $cep;
                    }
                    ?>" placeholder="00000-000"/>
                </div>
                <div class="col-3 form-group">
                    <label>Cidade</label>
                    <input class="form-control" type="text" name="cidade" id="cidade" value="<?php
                    if (isset($cidade)) {
                        echo $cidade;
                    }
                    ?>" placeholder="Cidade"/>
                </div>
                <div class="col-3 form-group">
                    <label>Estado</label>
                    <input class="form-control" type="text" name="estado" id="estado" value="<?php
                    if (isset($estado)) {
                        echo $estado;
                    }
                    ?>" placeholder="Estado"/>
                </div>
                <div class="col-3 form-group">
                    <label style="float: left">Bairro</label>
                    <input class ="form-control" type="text" name="bairro" id="bairro" value="<?php
                    if (isset($bairro)) {
                        echo $bairro;
                    }
                    ?>" placeholder="Bairro"/>
                </div>
            </div>
            <div class ="row">
                <div class="col-6 form-group">
                    <label>Endereço (Rua, Avenida, Outros)</label>
                    <input class="form-control" type="text" name="endereco" id="endereco" value="<?php
                    if (isset($endereco)) {
                        echo $endereco;
                    }
                    ?>" placeholder="Endereço"/>
                </div>
                <div class="col-3 form-group">
                    <label>Número</label>
                    <input class="form-control" type="tel" name="numero" id="numero" value="<?php
                    if (isset($numero)) {
                        echo $numero;
                    }
                    ?>" placeholder="Número"/>
                </div>
                <div class="col-3 form-group">
                    <label>Complemento</label>
                    <input class="form-control" type="text" name="complemento" id="complemento" value="<?php
                    if (isset($complemento)) {
                        echo $complemento;
                    }
                    ?>" placeholder="Complemento"/>
                </div>
            </div>
            <br>
            <button type="submit" name="cadastrar" class="btn btn-success">Enviar dados!</button>
            <button type="submit" name="cancelar" class="btn btn-primary">Cancelar!</button>
        </form>
    </div>
</div>
