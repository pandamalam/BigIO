<?php
echo "Berapa huruf: ";
$loop = trim(fgets(STDIN));
if(is_numeric($loop)){
    $word = [];
    for ($i=1; $i <= $loop; $i++) { 
        echo "Huruf ke-".$i." : ";
        $word[] = trim(fgets(STDIN));

    }
    $string = implode("",$word);
    $reverse = array_reverse($word);
    echo $string.implode("",array_slice($reverse, 1));  
}else{
    echo "Hanya inputan angka\n";
}

?>