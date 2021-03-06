<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2021-08-06 05:29:13
$dictionary["stud_student"]["fields"]["stud_student_documents"] = array (
  'name' => 'stud_student_documents',
  'type' => 'link',
  'relationship' => 'stud_student_documents',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_STUD_STUDENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);


// created: 2021-08-06 12:25:28
$dictionary["stud_student"]["fields"]["stud_student_notes_1"] = array (
  'name' => 'stud_student_notes_1',
  'type' => 'link',
  'relationship' => 'stud_student_notes_1',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'side' => 'right',
  'vname' => 'LBL_STUD_STUDENT_NOTES_1_FROM_NOTES_TITLE',
);


// created: 2021-08-06 05:29:13
$dictionary["stud_student"]["fields"]["stud_student_project"] = array (
  'name' => 'stud_student_project',
  'type' => 'link',
  'relationship' => 'stud_student_project',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_STUD_STUDENT_PROJECT_FROM_PROJECT_TITLE',
);

?>