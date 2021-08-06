<?php
// created: 2021-08-06 05:29:13
$dictionary["stud_student_documents"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'stud_student_documents' => 
    array (
      'lhs_module' => 'stud_student',
      'lhs_table' => 'stud_student',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'stud_student_documents_c',
      'join_key_lhs' => 'stud_student_documentsstud_student_ida',
      'join_key_rhs' => 'stud_student_documentsdocuments_idb',
    ),
  ),
  'table' => 'stud_student_documents_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'stud_student_documentsstud_student_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'stud_student_documentsdocuments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'stud_student_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'stud_student_documents_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'stud_student_documentsstud_student_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'stud_student_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'stud_student_documentsdocuments_idb',
      ),
    ),
  ),
);