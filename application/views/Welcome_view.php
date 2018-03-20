<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            Olá: <br>
            CN:
            <?php echo $this->session->userdata('cn'); ?>
            <br>
            Username:
            <?php echo $this->session->userdata('username'); ?>
            <br>
            DN:
            <?php echo $this->session->userdata('dn'); ?>
            <br>
            Logged_in:
            <?php echo $this->session->userdata('logged_in'); ?>
        </div>
    </div>
</div>
