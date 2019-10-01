<div class="company-job-item">
    <div class="company-job-item__title">
        <?php echo $vacancy['h1']; ?>
    </div>
    <div class="company-jobs-item__salary">
        <?php echo !empty($vacancy['salary'])&&$vacancy['salary']>0?number_format($vacancy['salary'], 0, '.', '').' руб':''; ?>
    </div>
    <div class="company-jobs-item__req">
        <?php echo $vacancy['description']; ?>
    </div>
    <div class="company-jobs-btns">
        <a href="#" class="button button-lg button-blue">откликнуться</a>
        <div class="favorite">В избранное</div>
    </div>
</div>