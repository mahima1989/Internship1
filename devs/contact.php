<!-- head -->

 <head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
 <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head> 




<!-- style -->

<style>


#footer{
background:#f9f6f7;
color:#0779e4;
position: relative;

}


#footer h1{
  font-size: 25px;
}
 .loc{
   position: relative;
   top:25px;
 }
.l1{
  margin-top: 20px;
}
.l1 p{
  margin-left: 40px;
}
#footer p{
  color: grey;

}

.l2{
  margin: 0;
}
.loc2{

  color: grey;


}
.l2 p{
  position: relative;
  bottom:24px;
  margin-left: 40px;
}


.l3{
  margin: 0px;
  position: relative;
  bottom:24px;
}
.l3 p{
  position: relative;
  bottom:24px;
  margin-left: 40px;
}
.l4{
  margin: 0px;
  position: relative;
  bottom:50px;
}
.l4 p{
  position: relative;
  bottom:24px;
  margin-left: 40px;
}


.k1{
  text-align:center;
}
.k1 p{
  text-align: left;
  position: relative;
  left:23px;
  top:40px;
}
.k2{
margin-top: 60px;


}
.k3{
  height: 25px;

}
#footer h2{
  font-size: 16px;
  color: grey;
  text-align: center;

}


@media screen and (max-width:991px){
  #footer h1{
    text-align: left;
  }
  #footer p{
    width:50%;
  }
  .k2{
    text-align: left;
    margin-top: 60px;
    margin-bottom: 40px;
  margin-left: 12px;
  }
  .k1 h1{
    margin-left:25px;
  }
  .hav{
    margin-left: 25px;
  }
  .l1,.l2,.l3,.l4{
    margin-left:25px;
  }
  .map{
    margin-left: 25px;
  }
  .hav{
    margin-top:50px;
  }
}



/* footer style end */

  .to{
        size:100px;
    }
    .c{
        padding:20px 30px;
        background-color:#47597e;
        color:white;
        height:280px;
        margin:40px 10px;
      
    }
    h1{
       color:#47597e;
    }
  .cont{
      padding:40px;
  }
  .card-text{
      text-align:center;
  }
    

    </style>




<?php  include"./includes/navsides.php";?><br><br>

<!-- content -->

<div class="cont">
    
    <h1>Contact</h1>
 <div id="contact">
     <div class="row">
         <div class="col-lg-3">
         <div class="card c" style="width: 18rem;">
  
  <center><i class="fas fa-map-marker-alt fa-3x"></i></center>
  <div class="card-body">
    <p class="card-text">A 301, Ornament, Evershine City, Next to Bharath Gas, Vasai East, Thane, Mumbai-401208, Maharastra, India</p>
  </div>
  
</div>
</div>
<div class="col-lg-3">
<div class="card c" style="width: 18rem;">
  
  <center><i class="fas fa-phone-volume fa-3x"></i></center>
  <div class="card-body">
    <p class="card-text"> (+91)9380278844<br><br><br></p>
  </div>
  
</div>

</div>
<div class="col-lg-3">
<div class="card c" style="width: 18rem;">
  
  <center><i class="fas fa-envelope-open fa-3x"></i></center>
  <div class="card-body">
    <p class="card-text">sales@tdcchennai.com

support@tdcchennai.com

www.digitaladvancedsoftware.com<br></p>
  </div>
  
</div>

</div>
<div class="col-lg-3">
<div class="card c" style="width: 18rem;">
  
  <center><i class="far fa-clock fa-3x"></i></center>
  <div class="card-body">
    <p class="card-text">Monday-Saturday:<br>10 am to 6:30 pm<br>



Sunday : Closed</p>
  </div> 
</div>
</div>
</div>
</div>
<br><br>





<!-- form -->
<form name="contact_form" action="thankyou.php" method="post" onsubmit="return validateForm() " >
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" name="name" class="form-control" required/>
    <label class="form-label" >Name</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" class="form-control" required/>
    <label class="form-label">Email address</label>
  </div>

   <!--Phone no -->
   <div class="form-outline mb-4">
    <input type="text" name="ph_no" class="form-control" required/>
    <label class="form-label" >Phone No</label>
  </div>


  <!-- Submit button -->
  <button  id="buttonClick"  type="submit" name="contact" class="btn btn-secondary btn-lg mb-4">Send</button>
</form>

</div>

<!-- footer -->

<?php include"./includes/footer.php" ?>



<!-- javascript -->

<script>


  function validateForm()
{

    var z = document.forms["contact_form"]["ph_no"].value.length;
    var x = document.forms["contact_form"]["ph_no"].value;
    if(z!=10 || /\D/.test(x))
        {

   
  alert("Please only enter numeric characters  for phone number and total number of digits should be 10");
 
       return false; 
        }

}



</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>