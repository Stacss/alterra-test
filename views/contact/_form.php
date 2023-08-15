<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Contact $model */
/** @var yii\widgets\ActiveForm $form */
?>



<?php $form = ActiveForm::begin(); ?>

<div class="mb-3">
    <?= $form->field($model, 'name', ['template' => '{input}', 'inputOptions' => ['class' => 'form-control', 'placeholder' => 'Имя', 'required' => true]])->textInput() ?>
</div>

<div class="mb-3">
<?= $form->field($model, 'phone', ['template' => '{input}', 'inputOptions' => ['class' => 'form-control', 'placeholder' => 'Телефон', 'required' => true]])->textInput(['maxlength' => true]) ?>
</div>
<div class="invalid-feedback mb-1" id="phone-error" style="display: none;">
    Номер телефона должен состоять из 11 цифр и не содержать +, -, скобки и пробелы.
</div>
<div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary float-right', 'id' => 'check-phone-button']) ?>
</div>



<?php ActiveForm::end(); ?>


<?php
$js = <<<JS
    $('#contact-phone').on('input', function() {
        var inputValue = $(this).val();
        var cleanValue = inputValue.replace(/[\+\-\(\)\s]/g, ''); // Удаляем +,-,(,), и пробелы
        if (cleanValue.length !== 11) {
            $(this).addClass('is-invalid');
            $('#phone-error').show();
        } else {
            $(this).removeClass('is-invalid');
            $('#phone-error').hide();
        }
    });
JS;

$this->registerJs($js);
?>


