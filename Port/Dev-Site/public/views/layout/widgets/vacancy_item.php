<div class="jobs-item">
    <div class="jobs-item__desc">
        <div class="jobs-item__title"><?php echo $vacancy_item['h1']; ?></div>
        <div class="jobs-item__company">
            <span class="jobs-item__company-name"><?php echo $vacancy_item['company_name']??''; ?></span>
            <span class="jobs-item__company-location"><?php echo $vacancy_item['city']??''; ?></span>
        </div>
        <div class="jobs-item__short-desc">
            <?php echo $vacancy_item['sm_description']; ?>
        </div>
        <a href="#" class="button button-lg button-blue">откликнуться</a>
    </div>
    <div class="jobs-item__info">
        <div class="jobs-item__salary">
            <?php echo !empty($vacancy_item['salary'])&&$vacancy_item['salary']>0?'от '.number_format($vacancy_item['salary'], 0, '.', '').' руб.':''; ?>
        </div>
        <div class="jobs-item__image">
            <a href="<?php echo $urls[$vacancy_item['meta_id']]; ?>">
                <img src="/img/SVIBLOVO.RU.png" alt="">
            </a>
        </div>
        <div class="favorite">В избранное</div>
    </div>
</div>