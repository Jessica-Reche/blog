<?php
function fechaActual($formato){
    return date($formato);
}

function setActivo($nombreRuta)
{
    return request()->routeIs($nombreRuta) ? 'active' : '';
}

?>



