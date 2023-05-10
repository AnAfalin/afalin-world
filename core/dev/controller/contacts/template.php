<div id="contacts">
    <div class="col c1">
        <h2>Контакты</h2>
        <div class="email"><img src="/static/images/icons/email.png" alt=""> E-mail: an.afalin@yandex.ru</div>
        <div class="addr"><img src="/static/images/icons/location.png" alt=""> РФ, г.Москва.</div>
        <div class="gitrepo">
            <a href="https://github.com/AnAfalin" class="github"><img src="/static/images/icons/github1.png" alt=""></a>
            <a href="https://gitlab.com/AnAfalin" class="gitlab"><img src="/static/images/icons/gitlab.png" alt=""></a>
        </div>
    </div>

    <div class="col c2">
        <h2>Форма обратной связи</h2>
        <form action="/post" method="post" class="contact">
            <div class="field_area">
                <label for="phone">Имя</label>
                <input class="field" type="text" id="name" name="NAME" placeholder="Ваше имя" required>
            </div>
            <div class="field_area">
                <label for="phone">Номер телефона</label>
                <input class="field" type="text" id="phone" name="PHONE" placeholder="Ваш номер телефона">
            </div>
            <div class="field_area">
                <label for="email">E-mail</label>
                <input class="field" type="text" id="email" name="EMAIL" placeholder="Ваш e-mail">
            </div>
            <div class="field_area">
                <label for="message">Сообщение*</label>
                <textarea class="field" name="MESSAGE" id="message" rows="5" placeholder="Сообщение" required></textarea>
            </div>
            <div class="field_area<? if(isset($_GET['status'])) echo " true" ?>">
            </div>
            <? if(!isset($_GET['status'])): ?>
            <input type="hidden" name="CODE" value="CONTACT">
            <input type="submit" value="Отправить" class="btn">
            <? else: ?>
                <div class="msg">
                    Сообщение отправлено
                </div>
            <? endif; ?>

        </form>
    </div>
</div>