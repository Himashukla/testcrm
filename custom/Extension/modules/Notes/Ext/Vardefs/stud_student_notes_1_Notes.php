<?php
// created: 2021-08-06 12:25:28
$dictionary["Note"]["fields"]["stud_student_notes_1"] = array (
  'name' => 'stud_student_notes_1',
  'type' => 'link',
  'relationship' => 'stud_student_notes_1',
  'source' => 'non-db',
  'module' => 'stud_student',
  'bean_name' => 'stud_student',
  'vname' => 'LBL_STUD_STUDENT_NOTES_1_FROM_STUD_STUDENT_TITLE',
  'id_name' => 'stud_student_notes_1stud_student_ida',
);
$dictionary["Note"]["fields"]["stud_student_notes_1_name"] = array (
  'name' => 'stud_student_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_STUD_STUDENT_NOTES_1_FROM_STUD_STUDENT_TITLE',
  'save' => true,
  'id_name' => 'stud_student_notes_1stud_student_ida',
  'link' => 'stud_student_notes_1',
  'table' => 'stud_student',
  'module' => 'stud_student',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Note"]["fields"]["stud_student_notes_1stud_student_ida"] = array (
  'name' => 'stud_student_notes_1stud_student_ida',
  'type' => 'link',
  'relationship' => 'stud_student_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_STUD_STUDENT_NOTES_1_FROM_NOTES_TITLE',
);
