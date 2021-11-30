<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = mysqli_query($connection, "SELECT * FROM upload ORDER BY uploaddate"); 

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        $imageURL = 'upload/'.$row["img_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>