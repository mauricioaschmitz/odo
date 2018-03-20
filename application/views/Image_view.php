<div class="container">
    <div class="col-12">
        <center><h1 class="text-info">Selecione a imagem para Upload!</h1></center>
    </div>
</div>
<div class="container">
    <div class="col align-self-center">
        <div class="input-group mb-3" style="padding-top: 50px;">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="button">Enviar</button>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="imgInp">
                <label class="custom-file-label" for="imgInp"><?php echo $this->lang->line('choose_file'); ?></label>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col align-self-center">
        <img id='img-upload' style="width: 100%;"/>
    </div>
</div>
