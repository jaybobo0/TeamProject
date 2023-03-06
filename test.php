<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 


$sortedTaskUserData = $mergedTaskUserData;


// function sortByReward($a,$b){
//   if ($a['reward'] == $b['reward']){
//     return 0;
//   }
//   return ($a['reward'] < $b['reward']) ? 1 : -1; // 1 if true -1 if false
// }


usort($sortedTaskUserData, 'sortByReward');





// foreach($sortedTaskUserData as $task){
  $topThreeRewards = [];

  $x=0;
while($x <= 2) {
  // echo $sortedTaskUserData[$x]['reward'] . '<br>';
  $topThreeRewards[$x] = $sortedTaskUserData[$x];
  
 $x++;
 }

  echo '<pre>';
  var_dump($topThreeRewards);
  echo '</pre>';
?>
