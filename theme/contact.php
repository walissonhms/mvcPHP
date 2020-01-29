<?php $v->layout("_theme"); ?>

<div class="contact">
    <h2>Fale Conosco</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut rerum necessitatibus possimus, nam mollitia reiciendis nihil dignissimos asperiores fuga. Similique eos nesciunt quas odio mollitia officia quasi sequi quos expedita.</p>

    <form action="<?= url("contact"); ?>" method="multipart/form-data">    
        <input type="text" name="name" placeholder="Seu Nome:"/>
        <input type="text" name="name" placeholder="Seu E-mail:"/>
        <textarea name="message" placeholder="Mensagem:" rows="3"></textarea>
        <button>Enviar Mensagem</button>
    </form>
</div>

<?php $v->start("scripts"); ?>
<script>
    $(function(){
        $("button").after('<button type="reset">Limpar</button>');
    });
</script>
<?php $v->end(); ?>