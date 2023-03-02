<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 





function sortByReward($a,$b){
  if ($a['reward'] == $b['reward']){
    return 0;
  }
  return ($a['reward'] < $b['reward']) ? 1 : -1; // 1 if true -1 if false
}

usort($mergedTaskUserData, 'sortByReward');



  //   echo '<pre>';
  // var_dump($mergedTaskUserData);
  // echo '</pre>';

// foreach($mergedTaskUserData as $task){
  

  $x=0;
while($x <= 2) {
  echo $mergedTaskUserData[$x]['reward'] . '<br>';
 $x++;
 }
?>
