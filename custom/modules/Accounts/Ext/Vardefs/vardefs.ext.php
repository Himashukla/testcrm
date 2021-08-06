<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-08-06 11:51:50
$dictionary["Account"]["fields"]["accounts_stud_student_1"] = array (
  'name' => 'accounts_stud_student_1',
  'type' => 'link',
  'relationship' => 'accounts_stud_student_1',
  'source' => 'non-db',
  'module' => 'stud_student',
  'bean_name' => 'stud_student',
  'vname' => 'LBL_ACCOUNTS_STUD_STUDENT_1_FROM_STUD_STUDENT_TITLE',
  'id_name' => 'accounts_stud_student_1stud_student_idb',
);
$dictionary["Account"]["fields"]["accounts_stud_student_1_name"] = array (
  'name' => 'accounts_stud_student_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_STUD_STUDENT_1_FROM_STUD_STUDENT_TITLE',
  'save' => true,
  'id_name' => 'accounts_stud_student_1stud_student_idb',
  'link' => 'accounts_stud_student_1',
  'table' => 'stud_student',
  'module' => 'stud_student',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Account"]["fields"]["accounts_stud_student_1stud_student_idb"] = array (
  'name' => 'accounts_stud_student_1stud_student_idb',
  'type' => 'link',
  'relationship' => 'accounts_stud_student_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_STUD_STUDENT_1_FROM_STUD_STUDENT_TITLE',
);


 // created: 2021-08-04 13:00:41
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2021-08-04 13:00:40
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2021-08-04 13:00:40
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2021-08-04 13:00:40
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>