<?php
//получим размер загружаемого изображения
$size = getimagesize("image/{$path}.png");
$width = $size[0];
$height = $size[1];
?>
<div>
    <h4 class="text-center"><?= $title_img ?></h4>
    <img class="center-block" src="image/<?= $path ?>.png" width="<?= $width ?>" height="<?= $height ?>">
</div>

<!--результат вычисления-->
<br><br><br>
<div class="result_under_image <?= $result_status ?>"  role="alert">
    <?= (!empty($result)) ? $result : "" ?>
</div>