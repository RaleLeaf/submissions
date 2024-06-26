<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="<?php echo e(csrf_token()); ?>"/>
        <meta name="google-signin-client_id" content="208330682621-554aj7nfir6jns78avmruvqjp59mokdi.apps.googleusercontent.com">
        <title>Schedule</title>
        <link rel="icon" type="image/x-icon" href="img/web_elements/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="<?php echo e(mix('css/external_static.css')); ?>" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div id="studbar">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div id="schedule">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <script src="https://apis.google.com/js/platform.js" async defer></script>    
        <script src="<?php echo e(mix('js/schedule.js')); ?>" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\Users\Gestoni Cobar\sirton\resources\views/schedule.blade.php ENDPATH**/ ?>