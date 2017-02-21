<ul class="nav nav-pills nav-stacked">
    <?php foreach ($assortment as $value): ?>
        <li role="presentation"><a  class="btn btn-default <?= ($path == $value[0]) ? "active" : "" ?>"
                                    href="index.php?assortment=<?= $value[0] ?>"><?= $value[1] ?></a></li>
    <?php endforeach; ?>
</ul>