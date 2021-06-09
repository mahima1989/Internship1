<!-- head -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
 <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<?php  include"./includes/navsides.php";?>


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


    .cont{
        height:200px;
        background-color:#a8dda8;
        padding:50px 40px;
    }
    .cont h2,h5{
        color:white;
        
    }
    .cot{
        height:250px;
        width:700px;
    }
    .for{
        padding:20px 220px;
    }
   

    @media screen and (max-width:650px){

      .cot{
        height:170px;
        width:500px;
    }

    .for{
        padding:20px 170px;
    }
    }
</style>

<!-- banner -->
<div class="cont">

<h2>Careers</h2><br>
<h5 style="color:#5e8b7e;">Roles : Business Analyst/Quality Analyst /Software Developer/Marketing-Tele Caller</h5>


</div>
<br><br>


<!-- image -->
<center><img class="cot" src="./images/career.png"></center>



<!-- form -->

<div class="for">
<form name="career_form" action="thankyou.php" method="post" enctype="multipart/form-data"   onsubmit="return validateForm()">
  
  <div class="row ">
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text"  class="form-control" name="name"  required />
        <label class="form-label" >Name</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-outline">
        <input type="email" name="email" class="form-control" required/>
        <label class="form-label" for="form6Example2">Email</label>
      </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text" name="ph_no" class="form-control" required/>
        <label class="form-label" >Contact no</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text"  name="exp"class="form-control" required />
        <label class="form-label" >Total Experience (years) </label>
      </div>
    </div>
  </div>



  <div class="row">
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text" name="address" class="form-control" />
        <label class="form-label" >Residential Address</label>
      </div>
    </div>

    <div class="col-md-6">
    <input type="file" name="resume" accept="application/pdf" required/><br>
    <label class="form-label" >Upload Resume  </label>
    </div>
  </div>



 
  <div class="row ">
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text" name="current_company" class="form-control" required />
        <label class="form-label" >Current Organization</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text"  name="current_role" class="form-control" required/>
        <label class="form-label" >Current Designation</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text"  name="current_salary" class="form-control" required />
        <label class="form-label" >Current Annual Salary</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text" name="notice_time" class="form-control" required />
        <label class="form-label" >Notice Period</label>
      </div>
    </div>
  </div>
 

 

  <!-- Submit button -->
  <button type="submit" name="career" class="btn btn-success btn-lg mb-4">Send</button>
</form>
</div>
<br><br><br><br>


<!-- footer -->

<?php include"./includes/footer.php" ?>




<!-- javascript -->


<script>

function validateForm()
{

  var z = document.forms["career_form"]["ph_no"].value.length;
    var x = document.forms["career_form"]["ph_no"].value;
    if(z!=10 || /\D/.test(x))
        {
        alert("Please only enter numeric characters  for phone number and total number of digits should be 10");
        return false;
        }


        var b = document.forms["career_form"]["exp"].value;
    if(/\D/.test(b))
        {
        alert("Please only enter numeric characters for years of experience ");
        return false;
        }

        var c = document.forms["career_form"]["current_salary"].value;
    if(/\D/.test(c))
        {
        alert("Please only enter numeric characters for current salary ");
        return false;
        }

        var d = document.forms["career_form"]["notice_time"].value;
    if(/\D/.test(d))
        {
        alert("Please only enter numeric characters for notice time of months ");
        return false;
        }
}




</script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>