<?php
$nums = [15, 4, 18, 23, 10];

// 昇順ソート
sort($nums);
echo "昇順にソートします\n";
foreach ($nums as $num) {
    echo $num . "\n";
}

echo "\n"; // 改行

// 降順ソート
rsort($nums);
echo "降順にソートします\n";
foreach ($nums as $num) {
    echo $num . "\n";
}
?>

