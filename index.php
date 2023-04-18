<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <form action="index.php" method="get">

        <label for="select">Filtro parcheggio</label>
        <select  name="parking" id="select">
            <option selected></option>
            <option value="1" >Parking</option>
            <option value="2" >No Parking</option>
            <option value="3">Both</option>     
        </select>

        <label for="vote-select">Filtro voto</label>
        <select  name="vote" id="vote-select">
            <option selected></option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3">3</option>  
            <option value="4">4</option>
            <option value="5">5</option>    
        </select>

        <input type="submit">

    </form>
    
    <?php  

    $choice1 = $_GET['parking'];
    
    $choice2 = $_GET['vote'] ?? '';

    var_dump($choice1)

    ?>

    <table class="table">

        <thead>

            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>
            </tr>

        </thead>

        <tbody>

            <?php 
            
            foreach($hotels as  $hotel){
            
            ?>
                
                <tr class=" 
                <?php 

                    if($choice1 == '1' && $choice2 == '' ){

                        if($hotel['parking'] == false ){

                            echo 'visual';

                        };

                        
                    }elseif ($choice1 == 1 && $choice2 == '1') {
                        if($hotel['parking'] == false || $hotel['vote'] < 1 ){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 1 && $choice2 == '2') {
                        if($hotel['parking'] == false || $hotel['vote'] < 2 ){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 1 && $choice2 == '3') {
                        if($hotel['parking'] == false || $hotel['vote'] < 3 ){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 1 && $choice2 == '4') {
                        if($hotel['parking'] == false || $hotel['vote'] < 4 ){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 1 && $choice2 == '5') {
                        if($hotel['parking'] == false || $hotel['vote'] < 5 ){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 2 && $choice2 == '') {
                        if($hotel['parking'] == true ){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 2 && $choice2 == '1') {
                        if($hotel['parking'] == true || $hotel['vote'] <1){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 2 && $choice2 == '2') {
                        if($hotel['parking'] == true || $hotel['vote'] <2){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 2 && $choice2 == '3') {
                        if($hotel['parking'] == true || $hotel['vote'] <3){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 2 && $choice2 == '4') {
                        if($hotel['parking'] == true || $hotel['vote'] <4){

                            echo 'visual';

                        };

                    }elseif ($choice1 == 2 && $choice2 == '5') {
                        if($hotel['parking'] == true || $hotel['vote'] <5){

                            echo 'visual';

                        };

                    }elseif ($choice1 == '' && $choice2 == '1') {
                        if( $hotel['vote'] <1){

                            echo 'visual';

                        };

                    }elseif ($choice1 == '' && $choice2 == '2') {
                        if( $hotel['vote'] <2){

                            echo 'visual';

                        };

                    }elseif ($choice1 == '' && $choice2 == '3') {
                        if( $hotel['vote'] <3){

                            echo 'visual';

                        };

                    }elseif ($choice1 == '' && $choice2 == '4') {
                        if( $hotel['vote'] <4){

                            echo 'visual';

                        };

                    }elseif ($choice1 == '' && $choice2 == '5') {
                        if( $hotel['vote'] <5){

                            echo 'visual';

                        };

                    }

                    

                    
                ?>" 

                >

                    <?php
                    
                    foreach ($hotel as $key => $element) {
                        
                    ?>
                        
                        <td> 

                            <?php
                                if($key == 'parking'){
                                    // controllo per cambiare il valore 1 o '' della chiave parking in yes o no
                                    if($element == true){
                                        echo 'yes';
                                    }else{
                                        echo 'no';
                                    }
                                }else{

                                    echo $element;
                                }
                            
                            ?> 
                        
                        </td>

                    <?php

                    };

                    ?>

                </tr>

            <?php

            };

            ?>
        </tbody>

    </table>

    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>