<?php

function gradingStudents($grades) {

    $length = 0;

    // Find the number of grades
    foreach ($grades as $grade) {
        $length++;
    }

    for ($i = 0; $i < $length; $i++) {

        if ($grades[$i] >= 38) {

            $next = $grades[$i];

            while ($next % 5 != 0) {
                $next++;
            }

            if ($next - $grades[$i] < 3) {
                $grades[$i] = $next;
            }
        }
    }

    return $grades;
}

?>