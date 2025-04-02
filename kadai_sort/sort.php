<?php
function sort_2way(array &$nums, bool $order): void {
    if ($order) {
        // 昇順ソート
        sort($nums);
    } else {
        // 降順ソート
        rsort($nums);
    }
}

// テスト
$nums = [15, 4, 18, 23, 10];

echo "昇順にソートします:\n";
sort_2way($nums, true); // 昇順
foreach ($nums as $num) {
    echo $num . "\n";
}

echo "\n"; // 改行

echo "降順にソートします:\n";
sort_2way($nums, false); // 降順
foreach ($nums as $num) {
    echo $num . "\n";
}
?>

