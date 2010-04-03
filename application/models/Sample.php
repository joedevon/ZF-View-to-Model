<?php
class Model_Sample
{
	public function getPlayersOnTeam()
	{
		$db = Zend_Db_Table::getDefaultAdapter();
		$sql = "
				SELECT name FROM team
		";
		return $db->fetchOne($sql);
	}
}