<?php
 // created: 2021-08-06 05:29:13
$layout_defs["Project"]["subpanel_setup"]['stud_student_project'] = array (
  'order' => 100,
  'module' => 'stud_student',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_STUD_STUDENT_PROJECT_FROM_STUD_STUDENT_TITLE',
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
