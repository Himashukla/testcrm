<?php
// created: 2021-08-06 11:51:50
$dictionary["stud_student"]["fields"]["accounts_stud_student_1"] = array (
  'name' => 'accounts_stud_student_1',
  'type' => 'link',
  'relationship' => 'accounts_stud_student_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_STUD_STUDENT_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_stud_student_1accounts_ida',
);
$dictionary["stud_student"]["fields"]["accounts_stud_student_1_name"] = array (
  'name' => 'accounts_stud_student_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_STUD_STUDENT_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_stud_student_1accounts_ida',
  'link' => 'accounts_stud_student_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["stud_student"]["fields"]["accounts_stud_student_1accounts_ida"] = array (
  'name' => 'accounts_stud_student_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_stud_student_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_STUD_STUDENT_1_FROM_ACCOUNTS_TITLE',
);
