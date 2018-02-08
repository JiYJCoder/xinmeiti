<?php
/**
 *
 * Empty (空模块)
 *
 */
if(!defined("Ainaphp")) exit("Access Denied");
class EmptyAction extends Action
{
	public function _empty()
	{
		R('Admin/Content/'.ACTION_NAME);
	}
}
?>
