<form class="apply-form default_action" method="post" action="/" data-action="/sendSummary/">
    <h3 class="underline light">Join the team </h3>
    <div class="progress"><p>Sending in progress...</p></div>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="middle_name" placeholder="Middle Name" required>
    <select name="service">
        <?php foreach($services as $s_item) {?>
            <option value="<?php echo $s_item->h1_en; ?>"><?php echo $s_item->h1_en; ?></option>
        <?php } ?>
    </select>
    <input type="text" name="salary" placeholder="Expected remuneration" required>
    <label class="custom-file-input">
        <input type="file" name="cv" placeholder="Upload CV" accept=".doc,.docx,.rtf,.pdf">
        <span class="file-input icon icon_face orange">Upload CV</span>
    </label>
    <label class="checkbox-form">
        <span>By clicking the “Send” button, you automatically agree with the <a href="/en/privacy/"> privacy policy </a> and give your consent to the processing of personal data.</span>
    </label>
    <button type="submit" class="btn">Send</button>
</form>