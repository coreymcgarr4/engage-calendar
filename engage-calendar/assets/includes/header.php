<!DOCTYPE html>
<html>
  <head>
    <title>Engage 2018 Calendar</title>
	
	<?php require_once(dirname(__FILE__)."/../../config.php"); ?>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT; ?>/assets/styles/style.css" />
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
	
    <!-- AddEvent Settings -->
    <script type="text/javascript">
    window.addeventasync = function(){
        addeventatc.settings({
            appleical  : {show:true, text:"Apple Calendar"},
            google     : {show:true, text:"Google <em>(online)</em>"},
            outlook    : {show:true, text:"Outlook"},
            outlookcom : {show:true, text:"Outlook.com <em>(online)</em>"},
            yahoo      : {show:true, text:"Yahoo <em>(online)</em>"}
        });
    };
    </script>
	
  </head>
	<body>
	
		<div id="header">
		  <img src="<?php echo ROOT; ?>/assets/styles/images/engage-text.png" width = "180" class="engage-img" />
		</div>