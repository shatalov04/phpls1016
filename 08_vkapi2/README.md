# vkAPI - постинг на стену вконтакте.
Пример использования - index.php.
Если указкан user_id и group_id берется только user_id.

# Получить токен.
Вам нужно создать Standalone-приложение. С другими работать не будет.
После - переходите по ссылке 
https://oauth.vk.com/authorize?client_id=ИД_ВАШЕГО_ПРИЛОЖЕНИЯ&scope=notify,friends,photos,offline,wall&redirect_uri=blank.html&display=popup&response_type=token

После этого копируете из адресной строки token, заполняете все поля и можно запускать.
Через такой метод можно постить не больше 50 постов в день одному пользователю / группе.\
Чаще чем раз в 5 минут лучше не постить - банят.