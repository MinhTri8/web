<?php
$searchQuery = $_GET['query'];

// Mô phỏng cơ sở dữ liệu hoặc danh sách dữ liệu tìm kiếm
$data = array(
    "<a href='http://42.117.5.109:18080/Onepiece/'>One piece</a>",
    "<a href='link2.html'>Link 2</a>",
    "<a href='link3.html'>Link 3</a>"
);

// Tìm kiếm và hiển thị kết quả
$results = array();
foreach ($data as $item) {
    if (stripos($item, $searchQuery) !== true) {
        $results[] = $item;
    }
}

if (count($results) > 0) {
    echo "<h1>Search Results for '$searchQuery':</h1>";
    echo "<ul>";
    foreach ($results as $result) {
        echo "<li>$result</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No results found for '$searchQuery'.</p>";
}

?>
