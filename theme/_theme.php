<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= url("/theme/style.css"); ?>"/>

</head>
<body>
    <nav class="main_nav">
        <?php if($v->section("sidebar")):
            echo $v->section("sidebar");
        else:
        ?>
            <a href="<?= url(); ?>" title="">Home</a>
            <a href="<?= url("contato"); ?>" title="">Contato</a>
            <a href="<?= url("teste"); ?>" title="">Teste</a>
        <?php
        endif;?>
    </nav>
    <main class="main_content">
        <?= $v->section("content"); ?>
    </main>
    <footer class="main_footer">
        <?= SITE; ?> - Todos os Direitos Reservados.
    </footer>

<script src="theme/jquery-3.4.1.min.js"></script>
<?= $v->section("scripts"); ?>
</body>
</html>