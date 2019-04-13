<?php
// for reading uploaded file
$link = mysqli_connect(“localhost”, “root”,””, “docs”) or die (“Error”.mysqli_error($link));
if(isset($_POST[‘p’]))
{

//Query to fetch field where we are saving pdf file
$sql = “SELECT uploaded_on FROM pdf WHERE file_name = ‘1’”;
$result2 = mysqli_query($link, $sql);    // query execution
$row = mysqli_fetch_object($result2); // returns the current row of the resultset
$pdf_content = $row->uploade_on; // Put contents of pdf into variable
$fileName = time().”.pdf”; // create the unique name for pdf generated
//download file from database and allows you to save in your system
header(“Content-type: application/pdf”);
header(“Content-disposition: attachment; filename=”.$fileName);
print $pdf_content;
}
?>