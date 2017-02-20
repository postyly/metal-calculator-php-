<ul class="nav nav-pills nav-stacked">
    <?php foreach ($assortment as $value): ?>
        <li role="presentation"><a href="index.php?assortment=<?= $value[0] ?>"><?= $value[1] ?></a></li>
    <?php endforeach; ?>
</ul>