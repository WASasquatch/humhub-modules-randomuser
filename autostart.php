<?php

Yii::app()->moduleManager->register(array(
    'id' => 'randomuser',
    'class' => 'application.modules.randomuser.RandomUserModule',
    'import' => array(
        'application.modules.randomuser.*',
    ),
    // Events to Catch 
    'events' => array(
        array('class' => 'DashboardSidebarWidget', 'event' => 'onInit', 'callback' => array('RandomUserModule', 'onSidebarInit')),
    ),
));

?>
