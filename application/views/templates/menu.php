<?php
if (isset($menuHide) && $menuHide == "true") {

} else {
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-top: 4px solid #000090;">
<a class="navbar-brand" href="<?php echo base_url('index.php/Welcome') ?>">Odonto</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <?php if($this->session->userdata('logged_in')){ ?>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url('index.php/Welcome') ?>"><?php echo $this->lang->line('home'); ?> <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/Register') ?>"><?php echo $this->lang->line('register'); ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/Image') ?>"><?php echo $this->lang->line('image'); ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/Upload') ?>">Upload</a>
    </li>
  <?php } ?>
  </ul>

  <?php if($this->session->userdata('logged_in')){ ?>
      <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url('index.php/login/logout') ?>">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><?php echo $this->lang->line('logout'); ?></button>
      </form>
  <?php  } else { ?>
      <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url('index.php/login/') ?>">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo $this->lang->line('login'); ?></button>
      </form>
  <?php  } ?>
</div>
</nav>
<div style="padding-top: 40px;"></div>
<?php
}
