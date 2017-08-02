<?php
 // created: 2017-07-25 18:37:37
$layout_defs["rt1_Teacher_Module"]["subpanel_setup"]['rt1_student_module_rt1_teacher_module'] = array (
  'order' => 100,
  'module' => 'rt1_Student_Module',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RT1_STUDENT_MODULE_RT1_TEACHER_MODULE_FROM_RT1_STUDENT_MODULE_TITLE',
  'get_subpanel_data' => 'rt1_student_module_rt1_teacher_module',
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
