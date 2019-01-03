<?php
  include_once("cache.php");
  include_once("includes.php");
?>
<!doctype html>
<html lang="en">
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<title><?php echo SRV_NAME ;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css?v=<?php if(DEV_MODE == "ON"){echo rand();}else{echo CSS_VER;};?>">
<meta name="theme-color" content="#c43235">
<meta name="description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?php echo SRV_NAME; ?>">
<meta property="og:url" content="<?php echo SITE_URL; ?>" />
<meta property="og:description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:title" content="<?php echo SRV_NAME; ?>">

<!-- Recomended size for image is 800 x 420 px! -->
<link rel="image_src" href="img/256x256.png">
<meta property="og:image" content="img/256x256.png" />
<meta property="og:image:width" content="256" />
<meta property="og:image:height" content="256" />

<meta name="twitter:image" content="img/256x256.png" />
<meta name="twitter:site" content="@<?php echo SRV_TWITTER; ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@Mo_45">

<link rel="apple-touch-icon-precomposed" href="img/256x256.png">

<link rel="stylesheet" href="https://use.fontawesome.com/8f466ad9bd.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#scroll">
<?php include_once("template/navbar.php");?>
<?php include_once("template/top.php");?>

<div class="container">
<?php if(MODULE_SERVERS == "ON"){include_once("modules/servers.php");};?>
<?php if(MODULE_COMMUNITY == "ON"){include_once("modules/community.php");};?>
<?php if(MODULE_STORE == "ON"){include_once("modules/store.php");};?>
<?php if(MODULE_RULES == "ON"){include_once("modules/rules.php");};?>
<?php if(MODULE_DISCORD == "ON"){include_once("modules/discord.php");};?>
<?php if(MODULE_STAFF == "ON"){include_once("modules/staff.php");};?>
<?php if(MODULE_SOCIAL == "ON"){include_once("modules/social.php");};?>
<?php if(MODULE_CONTACT == "ON"){include_once("modules/contact.php");};?>
</div>
<?php include_once("template/footer.php");?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>
$('.progress-bar').each(function() {
  var min = $(this).attr('aria-valuemin');
  var max = $(this).attr('aria-valuemax');
  var now = $(this).attr('aria-valuenow');
  var siz = (now-min)*100/(max-min);
  $(this).css('width', siz+'%');
});
</script>
</body>
</html>
