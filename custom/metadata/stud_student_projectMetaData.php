<?php
// created: 2021-08-06 05:29:13
$dictionary["stud_student_project"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'stud_student_project' => 
    array (
      'lhs_module' => 'stud_student',
      'lhs_table' => 'stud_student',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'stud_student_project_c',
      'join_key_lhs' => 'stud_student_projectstud_student_ida',
      'join_key_rhs' => 'stud_student_projectproject_idb',
    ),
  ),
  'table' => 'stud_student_project_c',
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
      'name' => 'stud_student_projectstud_student_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'stud_student_projectproject_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'stud_student_projectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'stud_student_project_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'stud_student_projectstud_student_ida',
        1 => 'stud_student_projectproject_idb',
      ),
    ),
  ),
);