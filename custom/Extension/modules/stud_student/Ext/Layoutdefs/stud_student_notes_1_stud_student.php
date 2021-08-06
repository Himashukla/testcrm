<?php
 // created: 2021-08-06 12:25:28
$layout_defs["stud_student"]["subpanel_setup"]['stud_student_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_STUD_STUDENT_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'stud_student_notes_1',
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
