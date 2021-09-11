<?php
$benua= array (
    array('benua asia' , 'indonesia' , 'kota banda aceh ' , 'kota bandung ' , 'kota denpasar ' , 'kota pangkal pinang ' , 'kota jambi',
                         'brunei darussalam' , 'kota bandar seri begawan' , 'kota seria' , 'kota bangar' , 'kota muara town' , 'kota sukang',
                         'malaysia' , 'kota georgetown' , 'kota kuala lumpur' , 'kota ipoh' , 'kota kuchingg' , 'kota johor bahru'),
    array('benua afrika' , 'mesir' ,'kota akhmim' , 'kota al fayyum ' , 'kota aswan ' , 'kota asyut ' , 'kota banha',
                         'aljazair' , 'kota aljir' , 'kota oran' , 'kota constantine' , 'kota aannaba' , 'kota blida',
                         'libya' ,'kota benghazi' , 'kota bayda' , 'kota misrata' , 'kota derna' , 'kota tobruk <br>'),
    array('benua australia' , 'new south wales' , 'kota armidale' , 'kota barthurst ' , 'kota broken hill ' , 'kota cessnock' , 'kota dubbo',
                         'queensland' , 'kota brisbane' , 'kota bundaberg' , 'kota cairns' , 'kota gladstone' , 'kota hervey bay',
                         'victoria' , 'kota benalla' , 'kota ballarat' , 'kota bendigo' , 'kota mildura' , 'kota shepparton'),
    array('benua eropa' ,'denmark' , 'kota ribe' , 'kota ebelfot' , 'kota skagen' , 'kota dragor' , 'kota odense',
                         'norwegia' , 'kota oslo' , 'kota bergen' , 'kota drammen' , 'kota skien' , 'kota trondheim',
                         'swedia' , 'kota skara' , 'kota lund' , 'kota sigtuna' , 'kota visby' , 'kota kalmar')
);
foreach ($benua as $key => $value){
    echo "<p>";
    echo "<li>";
    echo  'Yang ada di' . $value[0] . ' terdapat negara ' . $value[1]. ' dan didalamnya terdapat beberapa kota yaitu, ' . $value[2]. ', '.$value[3].', '. $value[4]. ', '.$value[5].', '. $value[6];
    echo "<br>";
    echo "<li>";
    echo  'Yang ada di' . $value[0] . ' terdapat negara ' . $value[7]. ' dan didalamnya terdapat beberapa kota yaitu, ' . $value[8]. ', '.$value[9].', '. $value[10]. ', '.$value[11].', '. $value[12];
    echo "<br>";
    echo "<li>";
    echo  'Yang ada di' . $value[0] . ' terdapat negara ' . $value[13]. ' dan didalamnya terdapat beberapa kota yaitu, ' . $value[14]. ', '.$value[15].', '. $value[16]. ', '.$value[17].', '. $value[18];
    
}