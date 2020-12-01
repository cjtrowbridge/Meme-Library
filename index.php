<?php

$Path = '../memes';
$URL = 'https://cjtrowbridge.com/memes';
$Limit = 100;
$Pics = GetFiles($Path, $URL, $Limit);

function GetFiles($Path, $URL, $Limit, $Count = 0){
  
  $Ret = array();
  if ($Handle = opendir($Path, $URL)) {
    while (false !== ($File = readdir($Handle))) {
      if($Count < $Limit){
        if ($File != "." && $File != "..") {
          if(is_dir($File)){
            GetFiles($Path.'/'.$URL, $URL, $Limit, $Count);
          }else{
            $Count++;
            $File = $URL.$File;
            echo "<!--$File-->\n";
            $Ret[] = array(
              'URL' => $File
            );
          }
        }
      }
    }
    closedir($Handle);
  }
  return $Ret;
}


?><!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-49854332-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-49854332-1');
  </script>

  <title>👁👄👁 - CJ Trowbridge</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="icon" type="image/jpg" href="/cj.jpg">
  <style>
    img{
      width: 100%;
      max-width: 100%;
      border-radius: 1em;
      margin-bottom: 1.5rem;
    }
    body{
      background-color: #F8F8F8;
      padding-top: 2rem;
    }
  </style>
</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="col-12">
      
      <h2 class="mt-2">My Memetic Library</h2>
      <p><style>.bmc-button img{height: 34px !important;width: 35px !important;margin-bottom: 1px !important;box-shadow: none !important;border: none !important;vertical-align: middle !important;}.bmc-button{padding: 7px 10px 7px 10px !important;line-height: 35px !important;height:51px !important;min-width:217px !important;text-decoration: none !important;display:inline-flex !important;color:#FFFFFF !important;background-color:#FF813F !important;border-radius: 5px !important;border: 1px solid transparent !important;padding: 7px 10px 7px 10px !important;font-size: 20px !important;letter-spacing:-0.08px !important;box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;margin: 0 auto !important;font-family:'Lato', sans-serif !important;-webkit-box-sizing: border-box !important;box-sizing: border-box !important;-o-transition: 0.3s all linear !important;-webkit-transition: 0.3s all linear !important;-moz-transition: 0.3s all linear !important;-ms-transition: 0.3s all linear !important;transition: 0.3s all linear !important;}.bmc-button:hover, .bmc-button:active, .bmc-button:focus {-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;text-decoration: none !important;box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;opacity: 0.85 !important;color:#FFFFFF !important;}</style><link href="https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext" rel="stylesheet"><a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/cjtrowbridge"><img src="https://cdn.buymeacoffee.com/buttons/bmc-new-btn-logo.svg" alt="Buy me a coffee"><span style="margin-left:15px;font-size:19px !important;">Buy me a coffee</span></a></p>
      <p>NOTE: This is all the memes and content I choose to save. Some of it I agree with. Some of it I specifically disagree with. This is my unfiltered stream of saving for noteworthy memes.</p>
      
      <div class="card-columns">
        <?php foreach($Pics as $Pic){ ?>
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-text">
              <img src="<?php echo $Pic['URL']; ?>" width="300">
            </div><!--End Card-text-->
          </div><!--End Card-body-->
        </div><!--End Card-->
        <?php } ?>
      </div><!--/card-columns-->
    </div><!--/col-12-->

    <div class="col-12"><!--Begin Footer-->
      <div class="text-muted text-center mt-1">
        
        <p>
          Check out my 
          <a href="//facebook.com/djcj88/" target="_blank">facebook</a>,
          <a href="//instagram.com/cjtrowbridge/" target="_blank">instagram</a>,
          <a href="//github.com/cjtrowbridge/" target="_blank">github</a>,
          <a href="//www.linkedin.com/in/cjtrowbridge" target="_blank">linkedin</a>, 
          <a href="//cjtrowbridge.com/resume/">resume</a>, 
          and <a href="//blog.cjtrowbridge.com" target="_blank">blog</a>.<br>
          Also feel free to check out my list of <a href="/maybe" target="_blank">back-burner projects</a>.
        </p>
      </div>
    </div><!--End Footer-->
    
  </div><!--End row-->
</div><!--End Container-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>
