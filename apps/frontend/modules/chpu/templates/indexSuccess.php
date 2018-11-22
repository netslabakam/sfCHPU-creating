
<?php foreach ($chpu_mains as $i => $chpu): ?>
    <div class="card card-cascade col-md-3 narrower m-5">
        <div class="card-body card-body-cascade">
            <h5 class="pink-text pb-2 pt-1"><?php echo $chpu->getUrl() ?></h5>
            <h4 class="font-weight-bold card-title"><?php echo $chpu->getShort() ?></h4>
            <a class="btn btn-unique" href="<?php echo url_for('chpu_show', $chpu, true)?>">Go</a>
        </div>
    </div>
<?php endforeach; ?>


