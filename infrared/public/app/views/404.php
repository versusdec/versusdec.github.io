<main>
    <section class="block">
        <?php
        switch ($this->lang){
            case 'en':
                echo $this->settings->not_found_description_en;
                break;
            default: echo $this->settings->not_found_description_ru;
        }
        ?>
    </section>
</main>




