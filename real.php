<?php
include 'database.php';
include 'vendor/autoload.php';
    $filePath = 'kuldeep.pdf';
    // $pdf_files = $_POST['pdf_files'];
    $parser = new \Smalot\PdfParser\Parser();
    $pdf = $parser->parseFile($filePath);
    $extract = $pdf->getText();

    $sql = "INSERT INTO pdf1(pdf)
        VALUES(?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error in preparing the statement: " . $conn->error);
    }
    $stmt->bind_param("s", $extract);
    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

?>