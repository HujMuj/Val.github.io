<?php
$result=mail("kovirjalka@mail.ru","Mesage",Message: \nName: $_POST[name]);
if ($result) {
    echo "<p> sent</p?";
}
else {
    echo "<p> fuckt</p>";
}
?>