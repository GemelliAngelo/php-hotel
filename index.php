<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container my-4">
        <h1>HOTELS</h1>

        <div class="border border-dark rounded p-3">

            <form action="./index.php" method="GET">
                <div class="row g-0">
                    <div class="col-9">
                        <input type="number" name="rating" class="form-control" id="inputRating" placeholder="Rating" name="rating">
                    </div>
                    <div class="col-3">
                        <div class="mb-3 form-check form-check-reverse mt-1">
                            <label class="form-check-label" for="exampleCheck1">Parcheggio</label>
                            <input type="checkbox" name="parking" class="form-check-input" id="exampleCheck1">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100">Cerca</button>
            </form>
        </div>
        <div class="row g-3 mt-3">
            
            
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


foreach ($hotels as $hotel){

    if($_GET["rating"] <= $hotel["vote"]){
        echo "<div class='col-6'>";
        echo "<ul class='list-group'>";
        foreach ($hotel as $key => $value){
            if($key == "parking"){
                if($value == true){
                    $value = "Si";
                }else{
                    $value = "No";
                }
            }
            echo "<li class='list-group-item text-bg-secondary'> $key: $value </li>";
        }
        echo "</ul>";
        echo "</div>";
    }

}

?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>