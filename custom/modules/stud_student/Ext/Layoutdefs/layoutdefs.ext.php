<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2021-08-06 05:29:13
$layout_defs["stud_student"]["subpanel_setup"]['stud_student_documents'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_STUD_STUDENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'stud_student_documents',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2021-08-06 05:29:13
$layout_defs["stud_student"]["subpanel_setup"]['stud_student_project'] = array (
  'order' => 100,
  'module' => 'Project',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_STUD_STUDENT_PROJECT_FROM_PROJECT_TITLE',
  'get_subpanel_data' => 'stud_student_project',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>