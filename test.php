<?php
$b = $_GET['b'] ?? null;// вот так все хорошо
$b = ((float)$_GET['b'] ?? null);// а вот так андефинит вариэбл
//вывод одним echo
switch ($op) {
    case '+':
        echo $a . '+' . $b . '=' . ($a + $b); //Выводим выражение и результат
        break;
///
<option value="+">+</option> 
<option value="-">-</option>
<option value="*" selected>*</option>
<option value="/">/</option>
///
<select name="op">
        <?php foreach ($operations as $op) {?>
            <option value="<?php echo $op;?>"><?php echo $op;?></option>
        <?php }?>
    </select>
//
<?php foreach ($operations as $op) { ?>
            <option value="<?php echo $op; ?>" <?php if ('+' == $op) { ?> selected<?php } ?>><?php echo $op; ?></option>
        <?php } ?>
?>
///
<?php foreach ($operations as $op) { ?>
            <option value="<?php echo $op; ?>"  selected> <?php echo $op; ?></option>
        <?php } ?>
//
<?php
        $operations = ['+', '-', '*', '/'];
        $selected = ' selected'; 
        foreach ($operations as $op) { ?>
            <option value="<?php echo $op; ?>"  selected> <?php echo $op; ?></option>
        <?php } ?>
//
<?php
        $operations = ['+', '-', '*', '/'];
        $selected = $op;
        foreach ($operations as $op) { ?>
            <option value="<?php echo $op; ?>"  selected> <?php echo $op; ?></option>
        <?php } ?>
//
<?php
        $operations = ['+', '-', '*', '/'];
        $selected = '*';
        foreach ($operations as $op) { ?>
            <option value="<?php echo $op; ?>"  selected> <?php echo $op; ?></option>
        <?php } ?>
//
<?php
$operations = ['+', '-', '*', '/'];
$selected = '*';
      foreach ($operations as $op) { ?>
            <option value="<?php echo $op; ?>" <?php if ($selected == $op) { ?> selected<? } ?>> <?php echo $op; ?></option>
        <?php } ?>
//
