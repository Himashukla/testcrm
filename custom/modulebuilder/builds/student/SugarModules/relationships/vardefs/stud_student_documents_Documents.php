<?php
// created: 2021-08-06 05:29:13
$dictionary["Document"]["fields"]["stud_student_documents"] = array (
  'name' => 'stud_student_documents',
  'type' => 'link',
  'relationship' => 'stud_student_documents',
  'source' => 'non-db',
  'module' => 'stud_student',
  'bean_name' => 'stud_student',
  'vname' => 'LBL_STUD_STUDENT_DOCUMENTS_FROM_STUD_STUDENT_TITLE',
  'id_name' => 'stud_student_documentsstud_student_ida',
);
$dictionary["Document"]["fields"]["stud_student_documents_name"] = array (
  'name' => 'stud_student_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_STUD_STUDENT_DOCUMENTS_FROM_STUD_STUDENT_TITLE',
  'save' => true,
  'id_name' => 'stud_student_documentsstud_student_ida',
  'link' => 'stud_student_documents',
  'table' => 'stud_student',
  'module' => 'stud_student',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Document"]["fields"]["stud_student_documentsstud_student_ida"] = array (
  'name' => 'stud_student_documentsstud_student_ida',
  'type' => 'link',
  'relationship' => 'stud_student_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_STUD_STUDENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
