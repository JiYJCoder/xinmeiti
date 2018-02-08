<?php	return array ( 'catid' => array ( 'id' => '5', 'moduleid' => '2', 'field' => 'catid', 'name' => '栏目', 'tips' => '', 'required' => '1', 'minlength' => '1', 'maxlength' => '6', 'pattern' => 'digits', 'errormsg' => '必须选择一个栏目', 'class' => '', 'type' => 'catid', 'setup' => '', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'title' => array ( 'id' => '6', 'moduleid' => '2', 'field' => 'title', 'name' => '标题', 'tips' => '', 'required' => '1', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '标题必须为1-80个字符', 'class' => '', 'type' => 'title', 'setup' => 'array (
  \'thumb\' => \'1\',
  \'style\' => \'1\',
  \'size\' => \'55\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'keywords' => array ( 'id' => '7', 'moduleid' => '2', 'field' => 'keywords', 'name' => '关键词', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'55\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'description' => array ( 'id' => '8', 'moduleid' => '2', 'field' => 'description', 'name' => 'SEO简介', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'textarea', 'setup' => 'array (
  \'rows\' => \'4\',
  \'cols\' => \'55\',
  \'default\' => \'\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'content' => array ( 'id' => '9', 'moduleid' => '2', 'field' => 'content', 'name' => '内容', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'editor', 'setup' => 'array (
  \'toolbar\' => \'full\',
  \'default\' => \'\',
  \'height\' => \'\',
  \'show_add_description\' => \'1\',
  \'show_auto_thumb\' => \'1\',
  \'showpage\' => \'1\',
  \'enablekeylink\' => \'0\',
  \'replacenum\' => \'\',
  \'enablesaveimage\' => \'0\',
  \'flashupload\' => \'1\',
  \'alowuploadexts\' => \'\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'createtime' => array ( 'id' => '10', 'moduleid' => '2', 'field' => 'createtime', 'name' => '发布时间', 'tips' => '', 'required' => '1', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'datetime', 'setup' => '', 'ispost' => '1', 'unpostgroup' => '3,4', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'posid' => array ( 'id' => '11', 'moduleid' => '2', 'field' => 'posid', 'name' => '推荐位', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'posid', 'setup' => '', 'ispost' => '1', 'unpostgroup' => '3,4', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'template' => array ( 'id' => '12', 'moduleid' => '2', 'field' => 'template', 'name' => '模板', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'template', 'setup' => '', 'ispost' => '1', 'unpostgroup' => '3,4', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'status' => array ( 'id' => '13', 'moduleid' => '2', 'field' => 'status', 'name' => '状态', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'radio', 'setup' => 'array (
  \'options\' => \'发布|1
定时发布|0\',
  \'fieldtype\' => \'tinyint\',
  \'labelwidth\' => \'75\',
  \'default\' => \'1\',
)', 'ispost' => '1', 'unpostgroup' => '3,4', 'listorder' => '0', 'status' => '1', 'issystem' => '1', ), 'hits' => array ( 'id' => '14', 'moduleid' => '2', 'field' => 'hits', 'name' => '点击次数', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '8', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'number', 'setup' => 'array (
  \'size\' => \'5\',
  \'numbertype\' => \'1\',
  \'decimaldigits\' => \'0\',
  \'default\' => \'\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '0', 'issystem' => '0', ), );?>