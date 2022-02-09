<?php
  include('class.php');
  $api = new HitoriAPI();
  $gift = "https://gift.truemoney.com/campaign/?v=NlnmJThk3hbmpBppug"; //ซองอังเปา
  $result = $api->truewallet($gift);
    
  if($result['code'] == '200'){  //เมื่อรายการสำเร็จ

    $amount =  $result['amount'];
    echo "คุณเติมเงินสำเร็จแล้ว เป็นจำนวน $amount";
  
  }else{  //เมื่อรายการไม่สำเร็จ

    echo $result['code'];
    echo $result['msg'];

  }
  
?>