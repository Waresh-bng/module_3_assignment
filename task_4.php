<?php
$studentGrades = [
    'Rony' => [
      'Math' => 90,
      'English' => 85,
      'Science' => 95
    ],
    'Roy' => [
      'Math' => 80,
      'English' => 90,
      'Science' => 75
    ],
    'Rahul' => [
      'Math' => 70,
      'English' => 80,
      'Science' => 90
    ]
  ];
function calculateAverageGrade($studentGrades) {
    foreach ($studentGrades as $studentName => $studentGrades) {
      $totalGrade = 0;
      foreach ($studentGrades as $subjectGrade) {
        
        $totalGrade += $subjectGrade;
      }
      $averageGrade = $totalGrade / count($studentGrades);
      echo "$studentName's average grade is $averageGrade.\n";
    }
  }
  calculateAverageGrade($studentGrades);
?>
