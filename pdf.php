<?php
if(isset($_POST["create_pdf"]))
session_start();
{ 
 function fetch_data()  
 {  
      $output = '';  
      $name = array();
      $appName = $_SESSION['application'];

      include ('includes/database.php');  
      $sql = "SELECT * FROM studentApplication WHERE applicateNum = '$appName'";  
      $result = mysqli_query($dbconnect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
        
        $output .= '<div class="container">
        <strong style="color:blue;"> Personal information</strong><br>
        <div style="width:80%">
            <span style="font-weight: 800;">Full name: </span>
            <span style="margin-left: 10px;">'. $row["surename"].' '.$row["othername"].'</span>
        </div>
        <div style="width:80%">
            <span style="font-weight: 800;">Email: </span>
            <span style="margin-left: 10px;">'.$row["contactEmail"].'</span>
        </div>
        <div style="width:80%">
            <span style="font-weight: 800;">Religion: </span>
            <span style="margin-left: 10px;">'.$row["religion"].'</span>
        </div>
        <div style="width:80%">
            <span style="font-weight: 800;">Address: </span>
            <span style="margin-left: 10px;">'.$row["contactAddress"].'</span>
        </div>
        <div style="width:80%">
            <span style="font-weight: 800;">Nationality: </span>
            <span style="margin-left: 10px;">'.$row["contactNationality"].'</span>
        </div><br>

        <strong style="color:blue;"> Admission Information</strong><br>
        <div style="width:80%">
            <span style="font-weight: 800;">Entry Mode: </span>
            <span style="margin-left: 10px;">'.$row["entryMode"].'</span>
        </div>
        <div style="width:80%">
            <span style="font-weight: 800;">Program Type: </span>
            <span style="margin-left: 10px;">'.$row["ProgType"].'</span>
        </div>
        <div style="width:80%">
            <span style="font-weight: 800;">Admission Type: </span>
            <span style="margin-left: 10px;">'.$row["AdminType"].'</span>
        </div>
        <div style="width:80%">
            <span style="font-weight: 800;">First Choice: </span>
            <span style="margin-left: 10px;">'.$row["FirstChoiceCourse"].'</span>
        </div>
        <div style="width:80%">
            <span style="font-weight: 800;">Second Choice: </span>
            <span style="margin-left: 10px;">'.$row["SecondChoiceCourse"].'</span>
        </div>
    </div>  
                            '; 


      }  
      
      return $output;  
 }  
   
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("FOUNTAIN UNIVERSITY APPLICATION CLEARANCE 2020/2021");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      include ('includes/database.php');  
      $appName = $_SESSION['application'];
      $sqll = "SELECT * FROM studentApplication WHERE applicateNum = '$appName'";  
                 $results = mysqli_query($dbconnect, $sqll);  
                 while($rows = mysqli_fetch_array($results))  
                {
                    $pic = $rows['profilePic'];
                }
      $content .= '  
      
      <table style="width: 100%;">
          <tr>
              <td style="text-align:left; width: 10%"><img style="width: 100px; height: 140px;" src="images/logo.jpeg" alt="" srcset=""></td>
              <td style="text-align:center; width: 70%">
                  <h1>Fountain University,</h1> 
                  <h2>Osogbo, Osun State</h2>
                  <h3>Opp. Olomola Hospital, Along Agric Settlement Road, Oke-Osun, Osogbo.</h3>
                  <h4>Faith, Knowledge and Service</h4>
                  <br>
                  <p style="font-weight: 700;">APPLICATION CLEARANCE 2020/2021</p>
                 
              </td>
              <td style="text-align:center; width: 10%">
                <img style="width: 100px; height: 140px;" src="upload/'.$pic.'" alt="" srcset="">
              </td>
          </tr>
       
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Export HTML Table data to PDF using TCPDF in PHP</title>  
           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />             -->
      </head>  
      <body>  
           <br /><br />  
             
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                      
                </div>  
           </div>  
      </body>  
 </html>  

