<form class="search_form default_action" action="/en/find/" method="get">
    <h3 class="underline light">Find projects </h3>
    <select name="service">
        <option value="" selected>Any service</option>
        <?php foreach($services as $s_item) {?>
            <option value="<?php echo $s_item->id ?>" <?php if (isset($_GET['service'])&&$_GET['service']==$s_item->id) echo 'selected'; ?>><?php echo $s_item->h1_en; ?></option>
        <?php } ?>
    </select>
    <select name="lawyer">
        <option value="" selected>Any lawyer</option>
        <?php foreach($lawyers as $d_item) {?>
            <option value="<?php echo $d_item->id ?>" <?php if (isset($_GET['lawyer'])&&$_GET['lawyer']==$d_item->id) echo 'selected'; ?>><?php echo $d_item->h1_en ?></option>
        <?php } ?>
    </select>
    <input name="keyword" type="text" placeholder="Keyword" value="<?php if (isset($_GET['keyword'])){ echo htmlspecialchars($_GET['keyword']); }?>">
    <button type="submit" class="btn">Find</button>
</form>


