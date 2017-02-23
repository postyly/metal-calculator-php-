<?php
//получение значения переключателя вес/длина
if (isset($_GET['role'])) {
    if ($_GET['role'] == "weight") {
        $_SESSION['role'] = "weight";
        goBack();
    } elseif ($_GET['role'] == "length") {
        $_SESSION['role'] = "length";
        goBack();
    }
}
elseif(empty($_SESSION['role'])) {
    $_SESSION['role'] = "weight";
}

//обработка данных введенных пользователем
if (!empty($_POST)){
    switch ($_POST['operation_type']){
        case 'Square':
            require_once "models/square.calc.php";
            break;
        case 'Circle':
            require_once "models/circle.calc.php";
            break;
        case 'Ribbon':
            require_once "models/ribbon.calc.php";
            break;
        case 'List':
            require_once "models/list.calc.php";
            break;
        case 'PipeCircle':
            require_once "models/pipeCircle.calc.php";
            break;
        case 'PipeProf':
            require_once "models/pipeProf.calc.php";
            break;
        case 'Corner':
            require_once "models/corner.calc.php";
            break;
        case 'Hexahedron':
            require_once "models/hexahedron.calc.php";
            break;
        case 'ChannelP':
            require_once "models/channelP.calc.php";
            break;
    }
}

//отрисовка формы
if (isset($_GET['assortment'])){
    switch ($_GET['assortment']){
        case 'Square':
            require_once "models/square.form.php";
            break;
        case 'Circle':
            require_once "models/circle.form.php";
            break;
        case 'Ribbon':
            require_once "models/ribbon.form.php";
            break;
        case 'List':
            require_once "models/list.form.php";
            break;
        case 'Branch':
            require_once "models/branch.form.php";
            break;
        case 'PipeCircle':
            require_once "models/pipeCircle.form.php";
            break;
        case 'PipeProf':
            require_once "models/pipeProf.form.php";
            break;
        case 'Corner':
            require_once "models/corner.form.php";
            break;
        case 'Flange':
            require_once "models/flange.form.php";
            break;
        case 'ChannelP':
            require_once "models/channelP.form.php";
            break;
        case 'Hexahedron':
            require_once "models/hexahedron.form.php";
            break;
        default:
            require_once "models/square.form.php";
            break;
    }
}
else{
    require_once "models/square.form.php";
}

//проверка результата
require_once "models/result_control.php";