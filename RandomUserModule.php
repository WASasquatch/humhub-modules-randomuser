<?php
/**
 * RandomUserModule pre-compiles widget and functions
 *
 * @package humhub-random-user
 * @author Jordan Thompson
 */
class RandomUserModule extends HWebModule
{

    // http://www.yiiframework.com/wiki/148/understanding-assets/
    // getAssetsUrl()
    // return the URL for this module's assets, performing the publish operation
    // the first time, and caching the result for subsequent use.
    private $_assetsUrl;
    public function getAssetsUrl()     {
        if ($this->_assetsUrl === null)
            $this->_assetsUrl = Yii::app()->getAssetManager()->publish(
                Yii::getPathOfAlias('randomuser.assets')
            );
        return $this->_assetsUrl;
    }

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
	}
	
	/**
	 * Insert widget into Dashboard imitation.
	 *
	 * @param type $event
	 */	
	public static function onSidebarInit($event) {

        if (Yii::app()->moduleManager->isEnabled('randomuser')) {
            $event->sender->addWidget('application.modules.randomuser.widgets.RandomUserSidebarWidget', array(), array('sortOrder' => 1));
        }
		
	}
	
	/**
	 * Enables this module
	 */
	public function enable()
	{
		parent::enable();
	}
	
}
?>
