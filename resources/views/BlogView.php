<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $heading; ?></h1>
    <h3> Subjects</h3>
    <ul>
    <?php
        //php core technique
        /*if(count($subjects)>0){
            
    foreach($subjects as $sub)
    {
        echo "<li>".$sub."</li>";
    }
        }
        else
        {
         echo "<p> Sorry ! No records Found</p>";    
        }*/
        
        //template engine technique
        if(count($subjects>0)):
        foreach($subjects as $sub):
        ?>
        <li><?= $sub ?></li>
        <?php
        endforeach;
        else:
            echo "sorry shapar hona parrna aap ko";
        endif;
    ?>
    </ul>
</body>
</html>