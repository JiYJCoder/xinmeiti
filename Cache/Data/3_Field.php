<?php	return array ( 'typeid' => array ( 'id' => '18', 'moduleid' => '3', 'field' => 'typeid', 'name' => '友情链接分类', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'typeid', 'setup' => 'array (
  \'inputtype\' => \'select\',
  \'fieldtype\' => \'smallint\',
  \'numbertype\' => \'1\',
  \'labelwidth\' => \'\',
  \'default\' => \'1\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'linktype' => array ( 'id' => '19', 'moduleid' => '3', 'field' => 'linktype', 'name' => '链接类型', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '1', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'radio', 'setup' => 'array (
  \'options\' => \'文字链接|1
LOGO链接|2\',
  \'fieldtype\' => \'tinyint\',
  \'numbertype\' => \'1\',
  \'labelwidth\' => \'\',
  \'default\' => \'1\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'name' => array ( 'id' => '15', 'moduleid' => '3', 'field' => 'name', 'name' => '网站名称', 'tips' => '', 'required' => '1', 'minlength' => '2', 'maxlength' => '50', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'40\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '1', 'status' => '1', 'issystem' => '0', ), 'logo' => array ( 'id' => '16', 'moduleid' => '3', 'field' => 'logo', 'name' => '网站LOGO', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'image', 'setup' => 'array (
  \'size\' => \'50\',
  \'default\' => \'\',
  \'upload_maxsize\' => \'\',
  \'upload_allowext\' => \'jpg,jpeg,gif,png\',
  \'watermark\' => \'0\',
  \'more\' => \'0\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '2', 'status' => '1', 'issystem' => '0', ), 'siteurl' => array ( 'id' => '17', 'moduleid' => '3', 'field' => 'siteurl', 'name' => '网站地址', 'tips' => '', 'required' => '1', 'minlength' => '10', 'maxlength' => '150', 'pattern' => 'url', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'50\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '3', 'status' => '1', 'issystem' => '0', ), 'siteinfo' => array ( 'id' => '20', 'moduleid' => '3', 'field' => 'siteinfo', 'name' => '站点简介', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'textarea', 'setup' => 'array (
  \'fieldtype\' => \'mediumtext\',
  \'rows\' => \'3\',
  \'cols\' => \'60\',
  \'default\' => \'\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '4', 'status' => '1', 'issystem' => '0', ), );?>