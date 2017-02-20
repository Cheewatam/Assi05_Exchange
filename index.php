<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Exchange</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  

  <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body>
  <?php
  function get_currency($amount, $from, $to) {
      if($from == 'THB'){
        if($to == 'JPY'){
          $result = $amount * 3.230;
        }else if($to == 'CNY'){
          $result = $amount * 0.196;
        }else if($to == 'KRW'){
          $result = $amount * 32.55;
        }
      }else if($from == 'JPY'){
        if($to == 'CNY'){
          $result = $amount * 0.060;
        }else if($to == 'THB'){
          $result = $amount * 0.309;
        }else if($to == 'KRW'){
          $result = $amount * 10.145;
        }
      }else if($from == 'CNY'){
        if($to == 'JPY'){
          $result = $amount * 16.447;
        }else if($to == 'THB'){
          $result = $amount * 5.091;
        }else if($to == 'KRW'){
          $result = $amount * 166.89;
        }
      }
      return $result;
  }



  if (isset($_GET['submit'])) {
    
    $val1 = htmlentities($_GET['from']);
      $val2 = htmlentities($_GET['to']);
      $money = htmlentities($_GET['num']);
      if($val1==$val2){
        echo "";
        $result = $money;
    }else{
        $result = get_currency($money,$val1, $val2);
    }
      $moneylast = $money." ".$val1;
      $resultlast = $result." ".$val2;
  }
?>
<script>
  function myFunction() {
      document.getElementById("from").innerHTML = "<?php echo $moneylast ?>";
      document.getElementById("to").innerHTML = "<?php echo $resultlast ?>";
  }
</script>

    <div class="animated slideInLeft" id="square">    
      <div class="animated bounceInUp" id="rightSquare">
        <div class="animated bounceInUp" id="circle">
        <!-- <img class="brand img-responsive" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/827672/branding.png" /> -->
        
        </div>
        <h3 id="subtitle">ผลลัพธ์การแปลงค่าสกุลเงิน</h3>
                
<h1 id="title"><?php  
  if(isset($moneylast)&&isset($resultlast)){
    echo $moneylast." = ".$resultlast;
  }
  
?></h1>
        
      
     </div>   
        
        <div class="animated bounceInDown" id="leftSquare">
          <div id="container">


<form  method="GET" className="animated slideInLeft">
  <select name="from" class="optin">
    <option value="THB">บาทไทย (THB)</option>
    <option value="JPY">เงินเยน (JPY)</option>
    <option value="CNY">หยวนจีน (CNY)</option>
    <option value="KRW">เกาหลีวอน (KRW)</option>
  </select> 

  <div class="deadline"></div>
  
  <input type="text" name="num" placeholder="Input" class="optin fontsize line drop" ><br>


  <input type="submit" name="submit" value="" onclick="myFunction()" class="animated infinite pulse button btn btn-info"></input>
  
  <select name="to" class="optin">
    <option value="THB">บาทไทย (THB)</option>
    <option value="JPY">เงินเยน (JPY)</option>
    <option value="CNY">หยวนจีน (CNY)</option>
    <option value="KRW">เกาหลีวอน (KRW)</option>
  </select>

</form>
                         
                
      
          <h2 id="answer"><?php  
  if(isset($moneylast)&&isset($resultlast)){
    echo $resultlast;
  }
  
?></h2>
          </div>   
          
     </div> 
        
   
  </div>


  
</body>
</html>
