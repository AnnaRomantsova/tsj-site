<?php
     $GLOBALS['modulName'] = $modulName = 'manage';
     $modulCaption = 'Правление';

         $back_html_path='back/'.$modulName.'/';
         $front_html_path='front/'.$modulName.'/';

         $table_name = 'company';


         $arFiles = array(
                 'image1' => array($extent,$files_path,'image'),
                 'image2' => array($extent,$files_path,'image'),
                 'image3' => array($extent,$files_path,'image'),
         );
  // обязательные поля
 $fieldsWithoutFail = array(
  'fio','email','tel'
 );

?>
