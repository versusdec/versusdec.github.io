<?php if ($pages != 1) { ?>
    <?php $root = ''; if ($this->lang != 'ru'){$root = '/'.$this->lang;} ?>
    <ul class="pagination">
        <?php if ($current != 1) { $link = $current - 1;  ?>
            <li>
                <a href="<?php echo $root; if ($link == 1) {echo $this->meta->url;} else {echo $this->meta->url.'page/'.$link.'/';} ?>" aria-label="Previous">
					<span aria-hidden="true"> <span class="prev_arrow"></span>
                </a>
            </li>
        <?php } ?>

        <?php
        $step = 3;

        if ($current > $step ) {
            $start = $current - $step;
        } else {
            $start = 1;
        }

        if (($current + $step) > $pages) {
            $end = $pages;
        } else {
            $end = $current + $step;
        }

        for ( $i = $start; $i <= $end; $i++ ) { ?>

            <?php if ($current == $i) { ?>
                <li class="active"><span><?php echo $i ?></span></li>
            <?php } else { ?>
                <li class="page"><a href="<?php echo $root; if ($i == 1) { echo $this->meta->url; } else {echo $this->meta->url.'page/'.$i.'/';} ?>"><?php echo $i ?></a></li>
            <?php } ?>

        <?php }

        if ($current != $pages ) { $link = $current + 1;?>
            <li>
                <a href="<?php echo $root; echo $this->meta->url.'page/'.$link.'/'?>" aria-label="Next">
                    <span aria-hidden="true"><span class="next_arrow"></span> </span>
                </a>
            </li>
        <?php } ?>
    </ul>
<?php } ?>