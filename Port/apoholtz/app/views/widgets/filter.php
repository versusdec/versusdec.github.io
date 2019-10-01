<?php
    function min_not_null(Array $values) {
        return min(array_diff(array_map('intval', $values), array(0)));
    }
    $selected_count = []; $selected_sum = 0;
    foreach ($filters as $filter){
        $selected_count[$filter->prefix] = 0;
        foreach ($filter->dictionary as $item){
            if (!empty($checked[$item->id])) {
                $selected_count[$filter->prefix] += $item->count;
                $selected_sum += $item->count;
            }
        }
    }
    if ($selected_sum > 0){
        $found_count = min_not_null($selected_count);
    } else {
        foreach ($filters as $filter){
            $found_count = 0;
            foreach ($filter->dictionary as $item){
                $found_count += $item->count;
            }
            break;
        }
    }
    unset($selected_count);
    unset($selected_sum);
?>
<div class="searchplywood">
    <div class="found_block"><!--Найдено: -->
        <a href="#">Показать найденное</a>
        <span id="found_count"> (<?php echo $found_count; ?>)</span>
        <span class="close">x</span>
    </div>
    <a class="close_filter_btn hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

    <form class="filter_form" id="filter-form" method="POST" action="/category/search">
		<input type="hidden" name="category_id" value="<?php echo $category->id;?>">
        <div class="title"></div>
		<?php if (!empty($tags)) {?>
		<div>
			<label>По назначению</label>
            <div>
			<?php foreach ($tags as $_tag) {?>
				<div>
					<a href="<?php echo $_tag->url;?>" class="filter-count"><?php echo $_tag->short_name; ?></a>
				</div>
			<?php }?>
            </div>
		</div>
		<?php }?>
		<?php foreach ($filters as $filter) {
			if ($filter->type == 'checked') { ?>
				<div class="filter-input-container">
					<label class="_filter-toggle-btn" data-toggle=""><?php echo $filter->name; ?></label>
					<div class=" _filter_hide_block <?php if($filter->name === 'Толщина' || $filter->name === 'Сорт'){ echo 'column_count'; }; ?>">
						<?php foreach ($filter->dictionary as $item) { ?>
                            
                            <div class="<?php if($filter->name === 'Толщина' || $filter->name === 'Сорт'){ echo ' '; }; ?> <?php if (!$item->count) { echo 'disabled'; } ?> <?php if($item->show_hidden) echo "minimized";?>" style="padding: 2px;">
                                <div class="<?php if (mb_strlen($item->value, 'UTF-8') > 23){echo 'f_container f_align_center';}?>">
                                    <input
                                    id="ch_<?php echo $item->id; ?>"
                                    type="checkbox"
                                    class="filter-input"
                                    name="<?php echo $filter->prefix.'[]';?>"
                                    value="<?php echo $item->id; ?>" <?php if (!$item->count) {echo 'disabled';} ?>
                                    <?php if (!empty($checked[$item->id])) { echo 'checked';} ?>/>
                                    <label class="checkbox <?php if (mb_strlen($item->value, 'UTF-8') > 23){echo 'custom_m';}?>" for="ch_<?php echo $item->id; ?>"></label>
                                <span class="filter-count <?php if (mb_strlen($item->value, 'UTF-8') > 23){echo 'set_width';}?>"><?php echo $item->value; ?> <span>(<?php echo $item->count; ?>)</span></span>
                                </div>
                            </div>

						<?php } ?>
                        <span class="filter_show_hide"></span>
					</div>

				</div>
			<?php } else if ($filter->type == 'range') { ?>

			<?php }
		} ?>

		<div class="filter_btn_wrap f_container f_space_between">
			<button type="submit" class="btn filter_submit">Показать</button>
            <button type="reset" class="btn _filter_reset filter_reset">Сбросить</button>
		</div>
	</form>
</div>