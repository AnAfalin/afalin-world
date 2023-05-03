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
        <form action="#" method="post" class="contact">
            <div class="field_area">
                <label for="phone">Имя</label>
                <input class="field" type="text" id="name" name="NAME" placeholder="Ваше имя" required>
            </div>
            <div class="field_area">
                <label for="phone">Номер телефона</label>
                <input class="field" type="text" id="phone" name="PHONE" placeholder="Ваш номер телефона">
            </div>
            <div class="field_area">
                <label for="message">Сообщение*</label>
                <textarea class="field" name="MESSAGE" id="message" rows="5" placeholder="Сообщение"></textarea>
            </div>
            <div class="field_area<? if (isset($_GET['result'])) echo($_GET['result'] ? " true" : " false") ?>">
                <? if (isset($_GET['status'])) echo $_GET['status']; ?>
            </div>
            <input type="submit" value="Отправить" class="btn">
            <div class="msg">
            </div>
        </form>
    </div>
</div>