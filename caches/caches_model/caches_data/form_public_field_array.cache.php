<?php
return array (
  'name' => 
  array (
    'info' => 
    array (
      'formtype' => 'text',
      'field' => 'name',
      'name' => 'name',
      'tips' => '输入姓名',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '',
      'modelid' => '0',
      'setting' => 'array (
  \\\'size\\\' => \\\'50\\\',
  \\\'defaultvalue\\\' => \\\'\\\',
  \\\'ispassword\\\' => \\\'0\\\',
)',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `name` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
  'age' => 
  array (
    'info' => 
    array (
      'formtype' => 'text',
      'field' => 'age',
      'name' => 'age',
      'tips' => '年龄',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '',
      'modelid' => '0',
      'setting' => 'array (
  \\\'size\\\' => \\\'50\\\',
  \\\'defaultvalue\\\' => \\\'\\\',
  \\\'ispassword\\\' => \\\'0\\\',
)',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `age` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
  'code' => 
  array (
    'info' => 
    array (
      'formtype' => 'box',
      'field' => 'code',
      'name' => 'code',
      'tips' => '编程语言',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '',
      'modelid' => '0',
      'setting' => 'array (
  \\\'options\\\' => \\\'JAVA|JAVA
C++|C++
PHP|PHP\\\',
  \\\'boxtype\\\' => \\\'select\\\',
  \\\'fieldtype\\\' => \\\'varchar\\\',
  \\\'minnumber\\\' => \\\'1\\\',
  \\\'cols\\\' => \\\'5\\\',
  \\\'width\\\' => \\\'80\\\',
  \\\'size\\\' => \\\'1\\\',
  \\\'defaultvalue\\\' => \\\'\\\',
)',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `code` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
  'xueya' => 
  array (
    'info' => 
    array (
      'formtype' => 'box',
      'field' => 'xueya',
      'name' => 'xueya',
      'tips' => '血常规',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '',
      'modelid' => '0',
      'setting' => 'array (
  \\\'options\\\' => \\\'血糖|100
血压|120
血速|140
\\\',
  \\\'boxtype\\\' => \\\'select\\\',
  \\\'fieldtype\\\' => \\\'tinyint\\\',
  \\\'minnumber\\\' => \\\'-1\\\',
  \\\'cols\\\' => \\\'5\\\',
  \\\'width\\\' => \\\'80\\\',
  \\\'size\\\' => \\\'1\\\',
  \\\'defaultvalue\\\' => \\\'100\\\',
)',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `xueya` TINYINT( 3 )  NOT NULL DEFAULT \'100\'',
  ),
);
?>