<?php
    ob_start();
    include 'latex_template.php';
    $outputData .= ob_get_contents();
    ob_end_clean();
    $texFile = tempnam(sys_get_temp_dir(), 'test');
    $base = basename($texFile);
   
    rename($texFile, $texFile.".tex");
    $texFile .= ".tex";
    file_put_contents($texFile, $outputData);
    chdir(dirname(realpath($texFile)));
    $console = shell_exec("xelatex {$base}");
    header("Content-type: application/pdf");
    $pdf =  dirname(realpath($texFile)).DIRECTORY_SEPARATOR.$base.".pdf";
    // echo dirname(realpath($texFile)).DIRECTORY_SEPARATOR.$base.".pdf";
    readfile($pdf);
    // does not work on mac
?>