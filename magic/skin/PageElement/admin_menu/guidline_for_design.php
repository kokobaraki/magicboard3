<?php exit;?>
===========================================
  디자인 가이드라인
===========================================
- 변수목록
  원하는 html코드 사이에 입력하면 됩니다.
-------------------------------------------
<?php foreach($this->menu_main as $v) {?>  // 메인메뉴 (배열변수)
   <?php echo $v['active']?>    - 메뉴 활성화가 되어 있는지 유무
   <?php echo $v['link']?>      - 메뉴위치 링크 값
   <?php echo $v['m_id']?>      - 메뉴이름
   <?php echo $v['popup']?>     - 외부링크 값의 유무: 외부링크일 경우 <a>태그에 class="popup" 추가하여 팝업으로 뜨도록 할수 있음
   <?php echo $v['last']?>      - 마지막메뉴
   <?php echo $v['icon']?>      - 메뉴아이콘
<?php }?>

