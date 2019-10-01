<div class="modal" id="availabilityModal" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <div class="callbackmodal-block">
                    <div class="modal_title">Вы первыми узнаете о поступлении товара!</div>
                    <form method="post" action="/availability" class="f_container f_space_between">
                        <div>
                            <input name="uname" id="availability-field-name" type="text" placeholder="Ваше имя">
                            <i class="fa fa-user"></i>
                        </div>
                        <div>
                            <input name="umail" id="availability-field-email" type="email" placeholder="Ваш email" required="">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="submit" class="btn" value="Отправить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>