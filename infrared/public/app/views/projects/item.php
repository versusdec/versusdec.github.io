<?php if ($this->lang == 'en') { ?>


    <section class="block page">
        <h1><?php echo $project->h1_en; ?></h1>
        <?php echo $project->description_en; ?>
    </section>


<?php } else { ?>


    <section class="block page">
        <h1><?php echo $project->h1_ru; ?></h1>
        <?php echo $project->description_ru; ?>
    </section>


<?php } ?>