<?php
/**
 * View File for the RandomUserSidebarWidget
 *
 * @uses User $users the profile data of all the users that have.topartists the next days.
 *
 * @package humhub.modules.randomuser.widgets.views
 * @author WASasquatch (Jordan Thompson)
 */
?>

<div class="panel panel-default panel.topartists">
    <div class="panel-heading">
        <?php echo Yii::t('RandomUserModule.base', '<strong>Random</strong> User'); ?>
    </div>
    <div id="topartists">
		<?php echo Yii::t('RandomUserModule.base', 'Placeholder Text');
		 print_r($user); ?>
    </div>
</div>
