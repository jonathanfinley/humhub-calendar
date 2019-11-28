<?php

use humhub\components\View;
use humhub\modules\calendar\models\forms\ReminderSettings;

/* @var $this View */
/* @var $reminderSettings ReminderSettings */

$helpBlock = $reminderSettings->isGlobalSettings()
    ? Yii::t('CalendarModule.reminder', 'Here you can configure default reminder. These settings can be overwritten on space/profile level.')
    : Yii::t('CalendarModule.reminder', 'Here you can configure default settings for new calendar events.') ;


?>

<div class="panel-body">
    <h4>
        <?= Yii::t('CalendarModule.reminder', 'Default reminder settings') ?>
    </h4>

    <div class="help-block">
        <?= $helpBlock ?>
    </div>

    <?= $this->render('_reminder_config', ['settings' => $reminderSettings, 'form' => $form])?>

</div>
