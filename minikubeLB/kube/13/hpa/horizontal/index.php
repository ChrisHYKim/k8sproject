<?php
ini_set('max_execution_time', 300); 

$x = 0.0001;
for ($i = 0; $i <= 1000000; $i++) {
    $x += sqrt($x);

    // 메모리 사용량 확인
    if (memory_get_usage() > 1024 * 1024 * 100) { // 100MB 초과 시 종료
        echo "Memory limit exceeded.";
        exit;
    }
}

echo "OK!";
?>
