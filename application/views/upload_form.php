<div class="container">
    <div class="row">
        <div class="col-12">
            <center><h1 class="text-info">Olá</h1></center>
        </div>
    </div>
</div>
<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>