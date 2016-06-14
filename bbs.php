<?php

require_once './bbsdata.php';
class bbs
{
  public $data;

  public function __construct()
  {
    $this->data = new bbsdata();
  }
  public function getComment()
  {
    $data = $this->data->getData();
    foreach ($data as $row) {
      $return .= '<p>' . $row['logid'].'：'.$row['logtext'] . '</p>';
      $return .= '<br>';
    }
    return $return;
  }
  public function writeComment($post)
  {
    $this->data->add($post['text']);
  }
}

?>
