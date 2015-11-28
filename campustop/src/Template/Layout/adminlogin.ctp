<!DOCTYPE html>
<html lang="en">

    <head>
        
        <?= $this->element('headtag_admin') ?>
     
        <script>
                function scrollWin() {
                    window.scrollTo(0, 900);
                }
        </script>

    </head>
   <body class="hold-transition login-page">
       <?php echo $this->fetch('content'); ?>
        
       
    </body>
    
</html>