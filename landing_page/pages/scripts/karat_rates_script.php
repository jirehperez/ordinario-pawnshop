<?php
$branch = $_GET['branch'];
$array = array();
switch($branch){
    case 'daet':
        $array['gold'] = array(
            "karat" => array(
                24, 23,22, 21,20,19,18,17, 16,15, 14,13,12,11,10,9,8,7,6,5,4,3,2,1
            ),
            "gram" => array(
                0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,
                0.9990,0.9990,0.9990

            ),
            "regular_rate" => array(
                10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10

            ),
            "special_rate" => array(
                12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12,12
            )

        );

        $array['silver'] = array(
            "karat" => array(
                925 , 720
            ),
            "gram" => array(
                120 , 150
            ),
            "regular_rate" => array(
                0 , 0
            ),
            "special_rate" => array(
                20 , 20
            ),
        );

        $array['platinum'] = array(
            "karat" => array(
                1000 , 950, 900, 850, 800, 750, 700 
            ),
            "gram" => array(
                120 , 150, 200, 250, 300, 350,400
            ),
            "regular_rate" => array(
                0, 0, 0, 0, 0, 0, 0
            ),
            "special_rate" => array(
                20 , 20, 20, 20, 20, 20, 20
            ),
        );


    break;
    case 'manila':
        $array['gold'] = array(
            "karat" => array(
                15, 14,13,12,11,10,9,8,7,6,5,4,3,2,1
            ),
            "gram" => array(
                0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990,0.9990

            ),
            "regular_rate" => array(
                10,10,10,10,10,10,10,10,10,10,10,10,10,10,10

            ),
            "special_rate" => array(
               12,12,12,12,12,12,12,12,12,12,12,12,12,12,12
            )

        );

        $array['silver'] = array(
            "karat" => array(
                925 , 720
            ),
            "gram" => array(
                120 , 150
            ),
            "regular_rate" => array(
                0 , 0
            ),
            "special_rate" => array(
                20 , 20
            ),
        );

        $array['platinum'] = array(
            "karat" => array(
                1000 , 950, 900, 850, 800, 750, 700 
            ),
            "gram" => array(
                120 , 150, 200, 250, 300, 350,400
            ),
            "regular_rate" => array(
                0, 0, 0, 0, 0, 0, 0
            ),
            "special_rate" => array(
                20 , 20, 20, 20, 20, 20, 20
            ),
        );

    break;
}

echo json_encode($array);