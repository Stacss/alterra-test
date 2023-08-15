<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Тестовое задание Постников Станислав';

?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4 mb-4">Здравствуйте!</h1>
        <div class="row">
            <div class="col-md-6">
                <p class="lead text-justify">Данное тестовое задание успешно выполнено с использованием фреймворка
                    Yii2. В рамках
                    задания была создана книга контактов, которая легко доступна по нажатию
                    кнопки ниже. Она обеспечивает возможность добавления и удаления контактов в унифицированном формате
                    на базе данных MySQL.</p>
            </div>

            <div class="col-md-6">
                <p class="lead text-justify">
                    Меня зовут Станислав Постников, мне 36 лет. Я разработчик с опытом работы в
                    области веб-разработки. Я всегда на связи и готов обсудить возможности
                    сотрудничества. Вы можете связаться со мной по контактам ниже. Жду интересных предложений и с
                    нетерпением готов внести вклад в ваш проект!</p>
            </div>
        </div>

        <?= Html::a('Книга Контактов', ['contact/create'], ['class' => 'btn btn-success']) ?>

        <div class="col-md-6 text-left">
            <h2>Мои контакты</h2>
            <ul>
                <li><a href="tel:89101910656">89101910656</a> - телефон</li>
                <li><a href="https://t.me/postnikovstas">@postnikovstas</a> - телеграм(предпочтительнее)</li>
                
                <li><a href="https://hh.ru/resume/2994a2a5ff085fc89e0039ed1f4e554739685a">Мое резюме НН</a></li>
            </ul>
        </div>

    </div>

</div>
