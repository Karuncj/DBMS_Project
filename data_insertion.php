<?php
$host="localhost";

$user="root";

$password="";

$db="project";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false){ 
    
    die("connection error");
}
else{
    
}

if(isset($_POST['submit']))

{
    $data_fullname=$_POST['fullname'];
    $data_parent=$_POST['username'];
    $data_admno=$_POST['admission'];
    $data_email=$_POST['email'];
    $data_gender=$_POST['gender'];
    $data_dob=$_POST['DOB'];
    $data_course=$_POST['level'];
    $data_dptm=$_POST['department'];
    $data_contc=$_POST['phonenumber'];
    $data_pstate=$_POST['pstate'];
    $data_pdstrct=$_POST['pDistrict'];
    $data_pcity=$_POST['pcity'];
    $data_ppin=$_POST['pzip'];
    $data_pcontct=$_POST['pphonenumber'];
    $data_tstate=$_POST['tstate'];
    $data_tdstrct=$_POST['tDistrict'];
    $data_tcity=$_POST['tcity'];
    $data_tpin=$_POST['tzip'];
    $data_tcontct=$_POST['tphonenumber'];
    

    $sql="INSERT INTO `registration`(`name`,`parentName`,`gender`,`admissonNo`,`dob`,`email`,`program`,`department`,`contact`,`p_state`,`p_district`,`p_city`,`p_pincode`,`p_contact`,`t_state`,`t_district`,`t_city`,`t_pincode`,`t_contact`) VALUES('$data_fullname','$data_parent','$data_gender','$data_admno','$data_dob','$data_email','$data_course','$data_dptm','$data_contc','$data_pstate','$data_pcity','$data_pdstrct','$data_ppin','$data_pcontct','$data_tstate','$data_tcity','$data_tdstrct','$data_tpin','$data_tcontct')";
    $result=mysqli_query($data,$sql);

  
    if($result){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }
}
?>
