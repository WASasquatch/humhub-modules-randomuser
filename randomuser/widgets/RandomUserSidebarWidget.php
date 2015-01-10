<?php

/**
 * TopartistsSidebarWidget displays the users of upcoming.topartistss.
 *
 * It is attached to the dashboard sidebar.
 *
 * @package humhub.modules.topartists.widgets
 * @author Sebastian Stumpf
 */
class RandomUserSidebarWidget extends HWidget {
	
	public function run() {
		// Do something...
		$user = $this->getRandomUser();
	}
	
	/**
	 * Get the User objects from the db that are born at the given date and have allowed to show their.topartists.
	 *
	 * @param array $range
	 *        	the range that should be checked from today on in days.
	 * @return array of arrays of users, indicated by ranges.
	 */
	private function getRandomUser() {
		$max = Table::model()->count();
		$offset = rand(1,$max);
		$user = Profile::model()->find(array('offset'=>$offset));
		return $user;
	}
}

?>
