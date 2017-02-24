<!--кнопки переключения вес/длина-->
<?php if ($radio_button): ?>
    <a class="btn btn-default <?= ($_SESSION['role'] == "weight") ? "active" : ""; ?>" href="?role=weight"
       role="button">вес</a>
    <a class="btn btn-default <?= ($_SESSION['role'] == "length") ? "active" : ""; ?>" href="?role=length"
       role="button">длина</a>
<?php endif; ?>

<!--форма для ввода данных для расчета-->
<form action="" method="post" class="form-group" name="<?= $path ?>">
    <?php foreach ($select as $value): ?>
        <label><?= $value['title'] ?>
            <select class="form-control" name="input">
                    <?php foreach ($value['options'] as $key => $item): ?>
                        <option <?= ($key == $_SESSION['input']) ? "selected" : "" ; ?> value="<?= $key ?>"><?= $key ?></option>
                    <?php endforeach; ?>
                </select>
        </label>
    <?php endforeach; ?>

    <!--            отрисовка форм-->
    <?php foreach ($input as $value): ?>
        <p><label for="input"><?= $value['label'] ?></label></p>
        <div class="input-group">
            <input type="text"id="input" name="<?= $value['path'] ?>" class="form-control" pattern="^[0-9.,]+$"
                   onfocus="if (this.value == '<?= $value['value'] ?>') {this.value = '';}"
                   onblur="if (this.value == '') {this.value = '<?= $value['value'] ?>';}" value="<?= $value['value'] ?>">

            <div class="input-group-addon"><?= $value['units'] ?></div>
        </div>
    <?php endforeach; ?>
    <input type="hidden" name="operation_type" value="<?= $path ?>">
      <p>
        <button type="submit" class="btn btn-primary">Рассчитать</button>
    </p>
</form>
<!--результат вычисления-->

<div class="result_under_form <?= $result_status ?>"  role="alert">
    <?= (!empty($result)) ? $result : "" ?>
</div>