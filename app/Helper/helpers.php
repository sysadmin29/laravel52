<?php
function setActive($path)
{
    return 'contacts' == 'admin' ? 'active' : '';
}

function status_color($status){
    if($status == 'Pending'){
        return 'red';
    }elseif($status == 'Open'){
        return 'green';
    } else {
        return 'blue';
    }
}

function hello_world(){
    return "hello";
}
