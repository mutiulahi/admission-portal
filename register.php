<?php
    session_start();
    if(isset($_POST['submit'])){
    include ("includes/database.php");

    $surename = $_POST['surename'];  $othername = $_POST['othername'];  $religion = $_POST['religion']; 
    $contactNumber = $_POST['contactNumber'];  $contactEmail = $_POST['contactEmail'];  $contactAddress = $_POST['contactAddress'] ;  
    $contactNationality = $_POST['contactNationality'];  $PSName = $_POST['PSName']; $PSEmail = $_POST['PSEmail'];  
    $PSNumber = $_POST['PSNumber']; $PSAddress = $_POST['PSAddress']; $refereeName = $_POST['refereeName']; 
    $refereeAddress = $_POST['refereeAddress']; $refereeNumber = $_POST['refereeNumber'];  $CompLitLev = $_POST['ComputerLiteracyLevel']; 
    $HowKnown = $_POST['HowKnown'];  $entryMode = $_POST['entryMode'];  $ProgType = $_POST['ProgType'];
    $AdminType = $_POST['AdminType'];  $FirstChoiceCourse = $_POST['FirstChoiceCourse'];  $SecondChoiceCourse = $_POST['SecondChoiceCourse'];
    $firstSubject = $_POST['firstSubject']; $firstGrade = $_POST['firstGrade']; 
    $secondSubject= $_POST['secondSubject'];  $secondGrade = $_POST['secondGrade'] ;  
    $thirdSubject  = $_POST['thirdSubject'] ;  $thirdGrade = $_POST['thirdGrade'] ;  
    $fourthSubject = $_POST['fourthSubject'] ;  $fourthGrade = $_POST['fourthGrade'] ;  
    $fifthSubject = $_POST['fifthSubject'] ;  $fifthGrade = $_POST['fifthGrade'] ;  
    $sixthSubject = $_POST['sixthSubject'] ;  $sixthGrade = $_POST['sixthGrade'] ;  
    $seventhSubject  = $_POST['seventhSubject'];  $seventhGrade = $_POST['seventhGrade'] ;  
    $eightSubject = $_POST['eightSubject'] ;  $eightGrade = $_POST['eightGrade'] ;  
    $ninethSubject = $_POST['ninethSubject'] ;  $ninethGrade = $_POST['ninethGrade'] ;  



    $profilePic = $surename.' '.$othername.'PROFILE '.$_FILES['profilePic']['name'];  
    $Olevel = $surename.'  '.$othername.'OLEVEL '.$_FILES['Olevel']['name'];  
    $Jamb = $surename.'  '.$othername.'JAMB '.$_FILES['Jamb']['name'];
    
    $pic = $_FILES['profilePic']['type'];
    $pic_pdf_olevel = $_FILES['Olevel']['type'];
    $pic_pdf_Jamb = $_FILES['Jamb']['type'];

    echo $pic_pdf_Jamb ;
    echo $pic ;

    if(strpos($pic,'image')!==0)
    {
        echo "<script type=\"text/javascript\">
        alert(\"Sorry only jpeg is allowed for passport!\");
        window.location = \"application.php\"
        </script>";
    }
    elseif (strpos($pic_pdf_olevel,'application')!==0 || strpos($pic_pdf_Jamb,'application')!==0)
    {
        echo "<script type=\"text/javascript\">
        alert(\"Sorry only pdf is allowed for both o level and Jamb!\");
        window.location = \"application.php\"
        </script>";
    }
else{

    $profilePicDestination = 'upload/'.$profilePic;
    $OlevelDestination = 'upload/'.$Olevel;
    $JambDestination = 'upload/'.$Jamb;
    


    $currentSeasion = date('Y');
    $currentSeasionp = date('Y')+1;
    $seasion = $currentSeasion.'/'.$currentSeasionp;
    $seasion;




    $insertToDb = "INSERT INTO  studentApplication 
    (seasion, surename, othername, religion, contactNumber, contactEmail, contactAddress, contactNationality, PSName, PSEmail, PSNumber, PSAddress, refereeName, refereeAddress, refereeNumber, CompLitLev, HowKnown, entryMode, ProgType, AdminType, FirstChoiceCourse, SecondChoiceCourse, firstSubject, firstGrade, secondSubject, secondGrade, thirdSubject, thirdGrade, fourthSubject, fourthGrade, fifthSubject, fifthGrade, sixthSubject, sixthGrade, seventhSubject, seventhGrade, eightSubject, eightGrade, ninethSubject, ninethGrade, profilePic, Olevel, Jamb) VALUES
    ('$seasion','$surename','$othername','$religion','$contactNumber','$contactEmail','$contactAddress','$contactNationality','$PSName','$PSEmail','$PSNumber','$PSAddress','$refereeName','$refereeAddress','$refereeNumber','$CompLitLev','$HowKnown','$entryMode','$ProgType', '$AdminType', '$FirstChoiceCourse', '$SecondChoiceCourse','$firstSubject','$firstGrade','$secondSubject','$secondGrade','$thirdSubject','$thirdGrade','$fourthSubject','$fourthGrade' ,'$fifthSubject', '$fifthGrade','$sixthSubject','$sixthGrade','$seventhSubject','$seventhGrade' ,'$eightSubject','$eightGrade','$ninethSubject','$ninethGrade', '$profilePic', '$Olevel', '$Jamb')";
    if(mysqli_query($dbconnect, $insertToDb)){
        move_uploaded_file($_FILES['profilePic']['tmp_name'],$profilePicDestination);
        move_uploaded_file($_FILES['Olevel']['tmp_name'],$OlevelDestination);
        move_uploaded_file($_FILES['Jamb']['tmp_name'],$JambDestination);
            $last_id = mysqli_insert_id($dbconnect);
            $correntYear = date('Y');
            $fisrtLSurname = $surename[0]; 
            $fisrtLOthername = $othername[0]; 
            $APPNUMBER = 'FOTU'.$correntYear.$fisrtLSurname.$fisrtLOthername.$last_id;
            $IsertedId = "UPDATE studentApplication SET applicateNum = '$APPNUMBER' WHERE contactEmail = '$contactEmail'";
            if(mysqli_query($dbconnect, $IsertedId)){
                // echo "New record created successfully. Last inserted ID is: " . $last_id;
                $_SESSION['name'] = $surename.'  '.$othername;
                $_SESSION['registered'] = true;
                $_SESSION['application'] = $APPNUMBER;
                $_SESSION['picture'] = $profilePic;
                header('Location:portal.php');
            }
           

    }
    else{
        
        die(mysqli_error($dbconnect));
    }
}

}
?>