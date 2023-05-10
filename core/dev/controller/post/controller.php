<?php
if(!empty($_POST)) {
    echo 'test post';
    switch ($_POST['CODE']) {
        case 'CONTACT' : {
           $result = mQuery("INSERT INTO contacts VALUES(
                0, 
                '".$_POST['NAME']."', 
                '".$_POST['PHONE']."', 
                '".$_POST['EMAIL']."', 
                '".$_POST['MESSAGE']."', 
                NOW()
            )");
           redirect("/contacts?status=".$result);
        } break;
    }
}
else {
    redirect('/');
}
?>
