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
        <label><p><?= $value['title'] ?></p>
            <p><select class="form-control" name="input">
                    <?php foreach ($value['options'] as $key => $value): ?>
                        <option value="<?= $value ?>"><?= $key ?></option>
                    <?php endforeach; ?>
                </select></p>
        </label>
    <?php endforeach; ?>
    <!--            отрисовка форм-->
    <?php foreach ($input as $value): ?>
        <p><label for="input"><?= $value['label'] ?></label></p>
        <div class="input-group">
                <input id="input" type="text" name="<?= $value['path'] ?>" class="form-control" pattern="^[ 0-9]+$">
            <div class="input-group-addon"><?= $value['units'] ?></div>
        </div>
    <?php endforeach; ?>
    <input type="hidden" name="operation_type" value="<?= $path ?>">
    <p>
        <button type="submit" class="btn btn-primary">Рассчитать</button>
    </p>
</form>
<!--результат вычисления-->
<br><br><br>
<?= (!empty($result)) ? $result : ""?>