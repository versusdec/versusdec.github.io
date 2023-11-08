<form class="search_form default_action" action="/search/" method="get">
    <h3 class="underline light heights">Ваш юрист</h3>
    <select name="service">
        <option value="" selected>Любая услуга</option>
        <?php foreach($services as $s_item) {?>
            <option value="<?php echo $s_item->id ?>" <?php if (isset($_GET['service'])&&$_GET['service']==$s_item->id) echo 'selected'; ?>><?php echo $s_item->h1_ru; ?></option>
        <?php } ?>
    </select>
    <select name="department">
        <option value="" selected>Любая отрасль</option>
        <?php foreach($departments as $d_item) {?>
            <option value="<?php echo $d_item->id ?>" <?php if (isset($_GET['department'])&&$_GET['department']==$d_item->id) echo 'selected'; ?>><?php echo $d_item->h1_ru ?></option>
        <?php } ?>
    </select>
    <input name="keyword" type="text" placeholder="Ключевое слово" value="<?php if (isset($_GET['keyword'])){ echo htmlspecialchars($_GET['keyword']); }?>">
    <button type="submit" class="btn">Найти юриста</button>
</form>


