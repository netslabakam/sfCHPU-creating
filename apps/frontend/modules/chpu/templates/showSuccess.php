<div class="container align-items-center justify-content-center ">
<!--    <h1>--><?php //echo $chpu->getUrl() ?><!--</h1>-->
    <h1>Ваша ссылка <?php echo $_SERVER['REQUEST_URI'] ?></h1>
    <h2>Пройти по ссылке
        <a href="<?php echo $chpu->getUrl() ?>" class="btn btn-outline-dark" >Перейти</a>
    </h2>
</div>
