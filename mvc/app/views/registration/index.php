<h3>Регистрация</h3>
<form action="registration/check" method="post">
    <?php
    //echo '{$msg:}';
    //var_dump($msg);
    //echo "</br>";
    ?>
    <div>
        <label for="name">Имя</label>
        <div><input required type="text" name="name" id="name"></div>
    </div>
    <div>
        <label for="age">Возраст</label>
        <div><input required type="number" name="age" id="age"></div>
    </div>
    <div>
        <label for="reg_ta">О себе</label>
        <div>
            <textarea name="description" id="reg_ta" cols="30" rows="10"></textarea>
        </div>
        <!--        <input required type="text" name="description" id="description">-->
    </div>
    <div>
        <label for="photo">Фотография</label>
        <div>
            <input type="file" name="photo" id="photo">
        </div>
        <!--        <input required type="text" name="description" id="description">-->
    </div>
    <div>
        <label for="login">Логин</label>
        <div><input required type="text" name="login" id="login"></div>
    </div>
    <div>
        <label for="password">Пароль</label>
        <div><input required type="password" name="password" id="password"></div>
    </div>
    <div>
        <input type="submit" value="Зарегистрироваться">
        <div><input type="button" value="Отмена" onClick="window.location.href='../index.html';"></div>
    </div>

</form>