<?php

$dictionary["three_cee_three_aye"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' =>
  array(
    'three_cee_three_aye' =>
    array(
      'lhs_module' =>'three_cee',
      'lhs_table' => 'three_cee',
      'lhs_key' => 'id',
      'rhs_module' => 'three_aye',
      'rhs_table' => 'three_aye',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'three_cee_three_aye_c',
      'join_key_lhs' => 'three_cee_three_ayethree_cee_ida',
      'join_key_rhs' => 'three_cee_three_ayethree_cee_idb',
    ),
  ),
  'table' => 'three_cee_three_aye_c',
  'fields' =>
  array (
    'id' =>
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' =>
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' =>
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'three_cee_three_ayethree_cee_ida' =>
    array (
      'name' => 'three_cee_three_beethree_cee_ida',
      'type' => 'id',
    ),
    'three_cee_three_ayethree_aye_idb' =>
    array (
      'name' => 'three_cee_three_ayethree_cee_idb',
      'type' => 'id',
    ),
  ),
  'indices' =>
  array (
    0 =>
    array (
      'name' => 'three_cee_three_ayespk',
      'type' => 'primary',
      'fields' =>
      array (
        0 => 'id',
      ),
    ),
    1 =>
    array (
      'name' => 'three_cee_three_aye_ida1',
      'type' => 'index',
      'fields' =>
      array (
        0 => 'three_cee_three_ayethree_cee_ida',
      ),
    ),
    2 =>
    array (
      'name' => 'three_cee_three_aye_idb2',
      'type' => 'index',
      'fields' =>
      array (
        0 => 'three_cee_three_ayethree_cee_idb',
      ),
    ),
  ),
);
?>
