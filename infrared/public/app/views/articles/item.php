<script src="https://www.google.com/recaptcha/api.js" async></script>

<?php if ($this->lang == 'en') { ?>

    <section class="">
        <h2><?php echo $article->h1_en; ?></h2>
        <?php echo $article->description_en; ?>
    </section>

    <?php if ($article->show_comments == 1) { ?>
        <section class="comments">
            <h2>Comments</h2>
            <?php if (!empty($comments)) { ?>
                <?php foreach ($comments as $comment) { ?>
                    <article>
                        <h3><?php echo htmlspecialchars(strip_tags($comment->name)) ?></h3>
                        <p>
                            <?php echo htmlspecialchars(strip_tags($comment->text)) ?>
                        </p>
                        <time
                            datetime="<?php echo !empty($comment->date) ? date('Y-m-d H:i', strtotime($comment->date)) : ''; ?>">
                            <?php echo date('d.m.Y H:i', strtotime($comment->date)) ?>
                        </time>
                    </article>
                <?php } ?>
            <?php } ?>
            <form class="comment-form">
                <input type="hidden" name="id" value="<?php echo $article->id; ?>">
                <input type="hidden" name="lang" value="en">
                <input type="text" name="name" placeholder="Name" required>
                <textarea name="comment" placeholder="Enter your message" required></textarea>
                <div class="g-recaptcha" data-sitekey="6LdZxUMUAAAAAALBhIaEgDzWHjWUJ2MKe0TNTXrn"></div>
                <button type="submit" class="btn">Send</button>
            </form>
        </section>
    <?php } ?>

<?php } else { ?>

    <section class="">
        <h2><?php echo $article->h1_ru; ?></h2>
        <?php echo $article->description_ru; ?>
    </section>

    <?php if ($article->show_comments == 1) { ?>
        <section class="comments">
            <h2>Комментарии</h2>
            <?php if (!empty($comments)) { ?>
                <?php foreach ($comments as $comment) { ?>
                    <article>
                        <h3><?php echo htmlspecialchars(strip_tags($comment->name)) ?></h3>
                        <p>
                            <?php echo htmlspecialchars(strip_tags($comment->text)) ?>
                        </p>
                        <time
                            datetime="<?php echo !empty($comment->date) ? date('Y-m-d H:i', strtotime($comment->date)) : ''; ?>">
                            <?php echo date('d.m.Y H:i', strtotime($comment->date)) ?>
                        </time>
                    </article>
                <?php } ?>
            <?php } ?>
            <form class="comment-form">
                <input type="hidden" name="id" value="<?php echo $article->id; ?>">
                <input type="hidden" name="lang" value="ru">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <textarea name="comment" placeholder="Введите ваше сообщение" required></textarea>
                <div class="g-recaptcha" data-sitekey="6LdZxUMUAAAAAALBhIaEgDzWHjWUJ2MKe0TNTXrn"></div>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </section>
    <?php } ?>
<?php } ?>