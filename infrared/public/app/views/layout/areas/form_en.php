<form class="search_form default_action" action="/en/search/" method="get">
    <h3 class="underline light">Your lawyer </h3>
    <select name="service">
        <option value="" selected>Any service</option>
        <?php foreach($services as $s_item) {?>
            <option value="<?php echo $s_item->id ?>" <?php if (isset($_GET['service'])&&$_GET['service']==$s_item->id) echo 'selected'; ?>><?php echo $s_item->h1_en; ?></option>
        <?php } ?>
    </select>
    <select name="department">
        <option value="" selected>Any industry</option>
        <?php foreach($departments as $d_item) {?>
            <option value="<?php echo $d_item->id ?>" <?php if (isset($_GET['department'])&&$_GET['department']==$d_item->id) echo 'selected'; ?>><?php echo $d_item->h1_en ?></option>
        <?php } ?>
    </select>
    <input name="keyword" type="text" placeholder="Keyword" value="<?php if (isset($_GET['keyword'])){ echo htmlspecialchars($_GET['keyword']); }?>">
    <button type="submit" class="btn">Find lawyer</button>
</form>


