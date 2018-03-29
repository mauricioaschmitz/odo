<div class="container">
    <div class="row">
        <ul>
            <?php foreach ($this->session->userdata() as $item => $value): ?>
                <li><?php echo $item; ?>: <?php echo $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
