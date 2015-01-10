<?php

/**
 * RandomUserSidebarWidget renders the RandomUserPanel
 * to the Dashboard.
 *
 * @package humhub-random-user
 * @author Jordan Thompson
 */
class RandomUserSidebarWidget extends HWidget {
	
	/**
	 * Render random user information
	 *
	 * @render random user widget
	 */
	public function run() {
	    $css = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../css', true, 0, defined('YII_DEBUG'));
        Yii::app()->clientScript->registerCssFile($css . '/main.css');
		$user = $this->getRandomUser();
		if(!empty($user)) {
			$this->render ( 'RandomUserPanel', array (
			'css' => $css,
			'user' => $user
			) );
		}
	}
	
	
	/**
	 * Get a random user mdoel from DB
	 *
	 * @return array of user information from User Model.
	 */
	private function getRandomUser() {
	
		$max = User::model()->count();
		$randId = rand(1,$max);
		$user = User::model()->find(array('offset'=>$randId));
        return $user;		

	}
}

?>
