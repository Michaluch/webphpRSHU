<?php
/**
 * Created by JetBrains PhpStorm.
 * User: michaluch
 * Date: 2/6/14
 * Time: 8:52 PM
 * To change this template use File | Settings | File Templates.
 */
echo "
<div>
    <div class='sub'>
        X
    </div>
    <div class='sub'>
        Y
    </div>
</div>
";
for ($x=0; $x<=10; $x++){
    $y = ( $x + cos(2*$x) ) / 3 * $x;
    echo "<div>
            <div class='sub_'>$x</div>
            <div class='sub_'>$y</div>
        </div>";
}
?>