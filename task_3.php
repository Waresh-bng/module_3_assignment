<?php
$grades = [85, 92, 78, 88, 95];
function sortGradesDescending($grades) {
    $rshortGrade=rsort($grades);
    return $rshortGrade;
}
$sortedGrades = sortGradesDescending($grades);
print_r($sortedGrades);
?>
