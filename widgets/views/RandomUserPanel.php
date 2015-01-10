<?php
/**
 * View random user attached to sidebar on dashboard
 *
 * @package humhub-random-user
 * @author Jordan Thompson
 */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo Yii::t('RandomUserModule.base', '<strong>Random</strong> Artist'); ?>
    </div>
	<div id="randomuserwidget">
		<a href="<?php echo $user->getProfileUrl(); ?>"> 
			<img src="<?php echo $user->getProfileImage()->getUrl(); ?>" class="media-object randomuserimage pull-left" data-src="holder.js/40x40" data-toggle="tooltip" data-placement="top" title="" 
			data-original-title="<strong> <?php echo $user->displayName; ?></strong><br><?php echo $user->profile->title; ?>" />
		</a>
		<div class="media-body">
			<h4 class="media-heading"><a href="<?php echo $user->getProfileUrl(); ?>"><strong><?php echo $user->displayName; ?></strong></a> 
				<span class="label label-default"><?php echo $user->group->name; ?></span></h4>
			<div class="randomsub"><?php echo (!empty($user->profile->title)) ? $user->profile->title : Yii::t('RandomUserModule.base', '<i>This user has no title</i>'); ?></div>
		</div>
	</div>
</div>

<link type="text/css" rel="stylesheet" href="<?php echo $css; ?>/main.css" />
