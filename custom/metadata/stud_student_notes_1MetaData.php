<?php
// created: 2021-08-06 12:25:28
$dictionary["stud_student_notes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'stud_student_notes_1' => 
    array (
      'lhs_module' => 'stud_student',
      'lhs_table' => 'stud_student',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'stud_student_notes_1_c',
      'join_key_lhs' => 'stud_student_notes_1stud_student_ida',
      'join_key_rhs' => 'stud_student_notes_1notes_idb',
    ),
  ),
  'table' => 'stud_student_notes_1_c',
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
      'name' => 'stud_student_notes_1stud_student_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'stud_student_notes_1notes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'stud_student_notes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'stud_student_notes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'stud_student_notes_1stud_student_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'stud_student_notes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'stud_student_notes_1notes_idb',
      ),
    ),
  ),
);