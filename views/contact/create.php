<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contact $model */

$this->title = 'Добавить контакт';
//$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row justify-content-center">
    <div class="width-form-sm shadow-sm mb-4">
        <div class="modal-content section-bg">
            <div class="modal-header bg-modal">
                <h1 class="modal-title text-center"><?= Html::encode($this->title) ?></h1>
            </div>
            <div class="modal-body padding-contact">


                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="width-form-sm shadow-sm">
        <div class="modal-content section-bg">
            <div class="modal-header bg-modal">
                <h1 class="modal-title text-center">Список контактов</h1>
            </div>
            <div class="modal-body padding-contact-none">

                <ul class="list-group list-group-flush">
                    <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <li class="list-group-item">
                                <p><?= Html::encode($contact->name) ?>
                                    <?= Html::a('<i class="fa fa-times" aria-hidden="true"></i>', ['delete', 'id' => $contact->id], [
                                        'data' => [
                                            'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                </p>
                                <span><?= preg_replace('/(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/', '$1 $2 $3 $4 $5', Html::encode($contact->phone) );?></span></li>
                        </tr>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
</div>

