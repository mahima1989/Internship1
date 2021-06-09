<!-- heads -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
 <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<!-- heads end -->


<?php  include"./includes/navsides.php";?>

<!-- style -->
<style>


 /* footer */


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
        background-color:#0779e4;
        padding:50px 40px;
    }
    .cont h2{
        color:white;
        
    }
    .for{
        padding:70px 220px;
    }


    @media screen and (max-width:650px){

      .for{
        padding:70px 100px;
    }


   

    }
</style>

<!-- style end -->

<!-- banner -->
<div class="cont">

<h2>Request Demo</h2>

</div>


<!-- form -->

<div class="for">
<form name="request_form" action="thankyou.php" method="post" onsubmit="return validateForm()">
 
  <div class="row ">
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text" name="name" class="form-control" required />
        <label class="form-label" >Name</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text" name="comp_name" class="form-control required" />
        <label class="form-label" >Company Name</label>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-outline">
        <input type="email" name="email" class="form-control " required/>
        <label class="form-label" >Email</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-outline">
        <input type="text" name="ph_no" class="form-control " required/>
        <label class="form-label" >Phone No</label>
      </div>
    </div>
  </div>

  
  <div class="row ">
    <div class="col-md-6">
    <select name="product"class="form-select" required >
  <option selected></option>
  <option value="TransPro">Trans Pro</option>
  <option value="AutoPro">Auto Pro</option>
  <option value="BizPro">Biz Pro</option>
  <option value="InfraPro">Infra Pro</option>
  <option value="EduPro">Edu Pro</option>
  <option value="FuelPro">Fuel Pro</option>
</select>
<label class="form-label" >Product</label>
    </div>
    <div class="col-md-6">
        <!-- Submit button -->
  <button type="submit" name="request" class="btn btn-primary btn-lg mb-4">SEND</button>
    </div>
  </div>

</form>
</div>

<!-- form end -->


<!-- footer -->


<?php include"./includes/footer.php" ?>



<!-- javascript -->
<script>

function validateForm()
{

  var z = document.forms["request_form"]["ph_no"].value.length;
    var x = document.forms["request_form"]["ph_no"].value;
    if(z!=10 || /\D/.test(x))
        {
        alert("Please only enter numeric characters  for phone number and total number of digits should be 10");
        return false; 
        }
}




</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>