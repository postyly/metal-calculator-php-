<?php
//получим размер загружаемого изображения
$size = getimagesize("image/{$path}.png");
$width = $size[0];
$height = $size[1];
?>
<div>
    <h3 class="text-center"><?= $title_img ?></h3>
    <img class="center-block" src="image/<?= $path ?>.png" width="<?= $width ?>" height="<?= $height ?>">
</div>

<!--результат вычисления-->
<br><br><br>
<div <?= $result_status ?>  role="alert">
    <?= (!empty($result)) ? $result : "" ?>
</div>