<div class="container-fluid">
    <div class="col-md-2 col-xs-2 offset-md-5"  style="margin-top: 250px;">
        <div class="row">
            <form class="form-signin" role="form" method="post" action="<?php echo base_url('index.php/login/login') ?>">
                <h2 class="form-signin-heading"><?php echo $this->lang->line('login') . ':'; ?></h2>
                <input data-inputmask="'mask': '99999999'" type="tel" name="username" class="form-control" placeholder="<?php echo $this->lang->line('user'); ?>" required autofocus><br/>
                <input type="password" name="password" class="form-control" placeholder="<?php echo $this->lang->line('password'); ?>" required><br/>
                <button class="btn btn-primary" type="submit" style="margin-top: 10px;"><?php echo $this->lang->line('submit'); ?></button>
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger" role="alert" style="margin-top: 10px;"><?php echo $error; ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
