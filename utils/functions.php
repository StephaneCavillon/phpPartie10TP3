<?php

function extract_data($array){
    $portrait = $array['portrait'];
    $name = $array['name'];
    $firstname = $array['firstname'];

    $user_card = 
    
        '<div class="card" style="width: 18rem;">
            <img src="' . $portrait . '" class="card-img-top" alt="user portrait">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nom : ' . $name .'</li>
                <li class="list-group-item">Prénom : ' .  $firstname .'</li>
            </ul>
        </div>'
    ;  

    return $user_card;

}

?>
