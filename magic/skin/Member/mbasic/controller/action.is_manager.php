<?php if(!defined("__MAGIC__")) exit; 
/*
 * action파일
 * action.*.php 파일은 Alert을 호출하지 않고 단순한 하나의 행동을하고
 * 결과 값을 알려준다.
 * $result에 결과값을 저장해 줌
 * --------------------------
 */

$result = false;
if($this->Action('is_superadmin')) $result = true;
else if($this->Action('is_admin')) $result = true;
else if($this->mb_grade == 'manager') $result = true;
