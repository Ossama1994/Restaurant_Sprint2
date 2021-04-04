<?php



function card($style,$path,$content){

    return '<div class=" '.$style.'">
    <img class="chef__profile" src="'.$path.'" alt="">
    <div class="chef__text">   
       '.$content.'
    </div>
</div>';
}


?>