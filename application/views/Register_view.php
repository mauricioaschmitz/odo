<div class="container">
    <?php
    if (isset($teste)) {
        echo $teste;
    }
    ?>

    <div class="row">
        <p><b><?php echo $this->lang->line('msg_insertCpf'); ?></b></p>
        <div class="col-2">
            <input data-inputmask="'mask': '999.999.999-99'" placeholder="000.000.000-00" type="tel" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="col-21">
            <button class="btn btn-primary" onclick="checkCPF()"><?php echo $this->lang->line('search'); ?></button>
        </div>
        <div class="col-2">
            <button class="btn btn-danger" onclick="cleanForm()"><?php echo $this->lang->line('clean'); ?></button>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div id="divErroCpf" class="alert text-center alert-danger col-2" style="display: none;">
            <?php echo $this->lang->line('msg_erroCpf'); ?>
        </div>
    </div>
</div>
<div id="divButtons" class="container" style="display: none; margin-top: 10px;">
    <button class="btn btn-warning" onclick="showData()"><?php echo $this->lang->line('data'); ?></button>
    <button class="btn btn-warning" onclick="showImages()"><?php echo $this->lang->line('images'); ?></button>
    <button class="btn btn-warning" onclick="showInsertImages()"><?php echo $this->lang->line('insertImage'); ?></button>
</div>
<div id="divInsertImages" class="container" style="display: block; margin-top: 20px;">
    <div class="row">
        <div class="col-12">
            <center><h1 class="text-info">Selecione a imagem para Upload!</h1></center>
        </div>
    </div>
    <div class="row">
        <div class="col align-self-center">
            <form enctype="multipart/form-data" method="post" accept-charset="utf-8" action="<?php echo base_url('index.php/register/uploadFile') ?>">
                <div class="input-group mb-3" style="padding-top: 50px;">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-outline-secondary">Enviar Imagem</button>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="fileUpload" id="fileUpload">
                        <label class="custom-file-label" for="fileUpload"><?php echo $this->lang->line('choose_file'); ?></label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="col align-self-center">
            <img id='img-upload' style="width: 100%; margin: auto;"/>
        </div>
    </div>
</div>
<div id="divCadastrar" class="container" style="display: none;">
    <div class="row">
        <div class="col-12" style="margin-top: 50px;">
            <form name="consultaCpf" method="post" action="<?php echo base_url('index.php/register/insert') ?>">
                <div class ="row">
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
                        <input data-inputmask="'mask': '99/99/9999'" class = "form-control" type="date" name="dataNasc" id="dataNasc" value="<?php
                        if (isset($dataNasc)) {
                            echo $dataNasc;
                        }
                        ?>" placeholder="00/00/0000"/>
                    </div>
                    <div class="col-3 form-group">
                        <label style="float: left"><b>Telefone *</b></label>
                        <input data-inputmask="'mask': '59-99999-9999'" class="form-control" type="tel" name="telefone" id="telefone" value="<?php
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
                        <input data-inputmask="'alias': 'email'" class = "form-control" type="text" name="email" id="email" value="<?php
                        if (isset($email)) {
                            echo $email;
                        }
                        ?>" placeholder="Email"/>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-3 form-group">
                        <label style="float: left">CEP</label>
                        <input data-inputmask="'mask': '99999-999'" class="form-control" type="text" name="cep" id="cep" value="<?php
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
                        <input data-inputmask="'mask': '9', 'repeat': 10, 'greedy' : false" class="form-control" type="tel" name="numero" id="numero" value="<?php
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
            </form>
        </div>
    </div>
</div>
