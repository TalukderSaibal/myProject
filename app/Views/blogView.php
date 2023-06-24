<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<?php

foreach($data as $value){

}

?>

<div class="container">
    <div class="blog_image">
        <img src="<?= base_url('articleImage/'. $value['article_image']) ?>" alt="blog image">
    </div>
</div>

<?= $this->endSection('content') ?>