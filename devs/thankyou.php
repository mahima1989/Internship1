<!-- head -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
 <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<?php  include"./includes/navsides.php";?>


<style>

body{
    background-color:#c0fefc;
}
    </style>


<!-- post request -->

<?php



$name="";
$email="";
$ph_no="";
$body="";
$comp_name="";
$product="";

$address="";
$current_company="";
$current_role="";
$notice_time="";
$exp="";
$current_salary="";
$resumes="";



if(isset($_POST['contact'])){

$name.=$_POST['name'];
$email.=$_POST['email'];
$ph_no.=$_POST['ph_no'];


$body.="<h1><b>Contact Form Response</b></h1>"."<br>";
$body.="<b> Name : ".$name."</b><br>";
$body.="<b>Email: ".$email."</b><br>";
$body.="<b> Phone No : ".$ph_no."</b><br>";


}else if(isset($_POST['request'])){
    $name.=$_POST['name'];
    $comp_name.=$_POST['comp_name'];
    $email.=$_POST['email'];
    $ph_no.=$_POST['ph_no'];
    $product.=$_POST['product'];

$body.="<h1><b>Request Demo Form Response</b></h1>"."<br>";
$body.="<b> Name : ".$name."</b><br>";
$body.="<b>Email: ".$email."</b><br>";
$body.="<b> Phone No : ".$ph_no."</b><br>";
$body.="<b> Company Name : ".$comp_name."</b><br>";
$body.="<b> Product Interested : ".$product."</b><br>";




}
else if(isset($_POST['career'])){

    
    $name.=$_POST['name'];
    $address.=$_POST['address'];
    $email.=$_POST['email'];
    
    
$resume=$_FILES['resume']['name'];
$resume_temp=$_FILES['resume']['tmp_name'];
 

    $exp.=$_POST['exp'];
    $ph_no.=$_POST['ph_no'];
    $current_company.=$_POST['current_company'];
    $current_role.=$_POST['current_role'];
    $current_salary.=$_POST['current_salary'];
    $notice_time.=$_POST['notice_time'];

    move_uploaded_file($resume_temp, "./$resume" );

    $resumes.=$resume;
 

  
$body.="<h1><b>Career Form Response</b></h1>"."<br>";
$body.="<b> Name : ".$name."</b><br>";
$body.="<b>Email: ".$email."</b><br>";
$body.="<b> Phone No : ".$ph_no."</b><br>";
$body.="<b> Address : ".$address."</b><br>";
$body.="<b> Current Company : ".$current_company."</b><br>";
$body.="<b>Total Experience (years) : ".$exp."</b><br>";
$body.="<b> Current Role : ".$current_role."</b><br>";
$body.="<b> Current Annual Salary : ".$current_salary."</b><br>";
$body.="<b> Notice Period  : ".$notice_time."</b><br><br>";
$body.="<b>Resume attached below</b><br>";


 }
else{
   header("Location:index.php");
}



//mail


use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail=new PHPMailer();


$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;

       


$mail->Username = 'samantaramahima@gmail.com';               
$mail->Password = 'Mahima1989';  

$mail->setFrom($email,$name);
$mail->addAddress('samantaramahima@gmail.com', 'Digital Advanced Software Pvt Ltd');
 $mail->addAttachment($resumes, 'Resume');
                                

$mail->Subject = 'Digital Advanced Software Pvt.Ltd Website Form Response';
$mail->Body    = $body;


$mail->isHTML(true);  


?>


<?php if(!$mail->send()): ?>

    <br><br><br><br>
    <div class="">
      <div class="container">
        <h1 class="display-4">Sorry,for the inconvenience.</h1><br>
        <p class="lead">There was some issue in form submission ,try again later.    <span font-style=bold;> - Digital Support Team</span></p>
      </div>
    </div>
   
    
 <?php else: ?>

    <br><br><br><br>
    <div class="">
      <div class="container">
        <h1 class="display-4">Thankyou for contacting us.</h1><br>
        <p class="lead">  Our Executive will get back to you very soon      <span font-style=bold;> - Digital Support Team</span></p>
      </div>
    </div>

<?php endif; ?>







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>