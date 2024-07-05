<?php echo $this->extend('layouts/layout');?>
<?php echo $this->section('content');?>
    <?php include(APPPATH . 'Views/modules/single-slider.php'); ?>
<?php echo $this->endSection('content');?>