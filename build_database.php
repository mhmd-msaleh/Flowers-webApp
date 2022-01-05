<?php 
require('connect_db.php')


$flower2 = "INSERT INTO flowers (name, price, instructions, photo, categoryID)
VALUES('Tibouchina Semidecandra', '33.99', 
'Beautiful large royal purple flowers adorn attractive satiny green leaves that turn orange\\/red in cold weather. Grows to up to 18 feet, or prune annually to shorten.', 
'princess_flower.jpg', 1);";

$sql = "INSERT INTO flowers (name, price, instructions, photo, categoryID)
VALUES
(
    ('Azalea', '15.99', 
    'Large double. Good grower, heavy bloomer. Early to mid-season, acid loving plants. Plant in moist well drained soil with pH of 4.0-5.5.', 
    'california_snow.jpg', 1),
    
    ('Tibouchina Semidecandra', '33.99', 
    'Beautiful large royal purple flowers adorn attractive satiny green leaves that turn orange\\/red in cold weather. Grows to up to 18 feet, or prune annually to shorten.', 
    'princess_flower.jpg', 1),

    ('Hibiscus', '12.99', 
    'Blooms in summer, 20-35 inches high. Fertilize regularly for best results. Full sun, drought tolerant.', 
    'haight_ashbury.jpg', 1),

    ('Plectranthus', '15.99', 
    'Quick-growing, herbaceous, shrub reaching up to 30 inches in height, forming a rounded, dense bush.', 
    'mona_lavender.jpg', 1),

    ('Camellia Japonica', '5.99', 
    'Slow growing, upright to spreading shrub. Oval, glossy, leaves and profuse winter to spring blooming flowers.', 
    'camellia.jpg', 1),

    ('Bougainvillea Spectabilis', '10.99', 
    'Thorny woody vine scrambles over other plants with their hooked thorns. Pest free.', 
    'bougainvillea.jpg', 1),
);";

if(!mysqli_query($connection, $sql)){
    die("Error has occured".mysqli_error());
}
mysqli_close($connection); 
?>