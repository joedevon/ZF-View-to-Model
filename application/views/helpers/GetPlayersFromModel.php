<?php
class Zend_View_Helper_GetPlayersFromModel extends Zend_View_Helper_Abstract
{
	public function getPlayersFromModel()
	{
		$model = new Model_Sample;
		return $model->getPlayersOnTeam();
	}
}