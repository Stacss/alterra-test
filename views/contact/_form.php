<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Contact $model */
/** @var yii\widgets\ActiveForm $form */
?>



<?php $form = ActiveForm::begin(); ?>

<div class="mb-3">
    <?= $form->field($model, 'name', ['template' => '{input}', 'inputOptions' => ['class' => 'form-control', 'placeholder' => 'Имя', 'required' => true]]) ?>
</div>

<div class="mb-3">
<?= $form->field($model, 'phone', ['template' => '{input}', 'inputOptions' => ['class' => 'form-control', 'placeholder' => 'Телефон', 'required' => true]])->textInput() ?>
</div>
<div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary float-right']) ?>
</div>

<?php ActiveForm::end(); ?>


