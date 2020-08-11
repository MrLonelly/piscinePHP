<!DOCTYPE html>
<html>
    <head>
        <title>FirstSite</title>
    </head>
    <body>
        <?php
        	foreach($_GET as $key => $value)
        	{
        		?><h3><?php echo $key." : ".$value ?></h3><?php
        	}
        ?>
    </body>
</html>