<?php



echo "In storage create utility<br><br>";

/*

proveri da si pozicioniran u /public_html/public (tu gde si menjao naziv fodlera storage)

i u njemu kucas komandu za kreiranje soft linka

ln -s /home/<SAJT>/public_html/storage/app/public storage



/home/platforma/public_html/public/



*/





$target = '/home/' . env("APP_FOLDER") . '/public_html/storage/app/public';

$shortcut = '/home/' . env("APP_FOLDER") . '/public_html/public/storage';



if (symlink($target, $shortcut)){

    echo "create symlink OK";

} else {

    echo "create symlink OK";

}









?><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/storageCreate.blade.php ENDPATH**/ ?>