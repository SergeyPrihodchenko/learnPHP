<form action="" method="$_GET">
    <input type="text" name="num1" id="" value="<?=@$_GET['num1']?>">
    <select name="operation" id="">
        <option value="sub">+</option>
        <option value="dee">-</option>
        <option value="mult">*</option>
        <option value="dev">/</option>
    </select>
    <input type="text" name="num2" id="">
    <button type="submit">=</button>
    <span><?=$result?></span>
</form>
