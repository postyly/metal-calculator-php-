<form action="#" method="post" class="form-group" name="<?= $path ?>">
    <?php foreach ($select as $value): ?>
        <label><p><?= $value['title'] ?></p>
            <p><select class="form-control" name=<?= $select['name'] ?>>
                    <option value="0" selected=""></option>
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
                <input id="input" type="text" name="<?= $value['path'] ?>" class="form-control">
            <div class="input-group-addon"><?= $value['units'] ?></div>
        </div>
    <?php endforeach; ?>
    <p>
        <button type="submit" class="btn btn-primary">Рассчитать</button>
    </p>
</form>