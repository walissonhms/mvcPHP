<?php $v->layout("_theme"); ?>

<div class="error">
    <h2>Ooooooops! Error <?= $error; ?>!</h2>
</div>

<?php $v->start("sidebar"); ?>
<a href="<?= url(); ?>" title="Voltar ao Inicio!">Voltar</a>
<?php $v->end(); ?>