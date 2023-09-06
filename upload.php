<?php
include_once 'database.php';
include 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $upload = $_FILES['upload']['tmp_name'];

    if (empty($upload)) {
        echo "Please select a file to upload.";
    } else {
        // Check if the uploaded file is a valid PDF
        $file_info = pathinfo($_FILES['upload']['name']);
        if (strtolower($file_info['extension']) !== 'pdf') {
            echo "Invalid file format. Please upload a PDF file.";
        } else {
            // Parse the PDF
            $parser = new \Smalot\PdfParser\Parser();
            $pdf = $parser->parseFile($upload);
            $extractedText = $pdf->getText();
            // testing 



            // tesing

            // Insert the extracted text into the database
            $sql = "INSERT INTO pdf1 (pdf) VALUES (?)";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                die("Error in preparing the statement: " . $conn->error);
            }

            $stmt->bind_param("s", $extractedText);

            if ($stmt->execute()) {
                echo "Record inserted successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    }
}
?>