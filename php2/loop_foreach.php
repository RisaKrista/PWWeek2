<?php
$contacts = array(
    array('nama' => 'Chihiro', 'email' => 'chisadgirl@gmail.com') ,
    array('nama' => 'Yubaba', 'email' => 'grumpygrandma@gmail.com') ,
    array('nama' => 'Haku', 'email' => 'hakucoolboy@gmail.com') ,
    array('nama' => 'Lin', 'email' => 'caringLin@gmail.com')
);
foreach ($contacts as $kontak) {
    echo $kontak['nama'];
    echo " - ";
    echo $kontak['email'];
    echo "<br>";
}
?>