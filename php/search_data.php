<?php 

require_once('database.php');

$search = $_POST['search_criteria'];

$query = "SELECT id, firt_name, last_name, emails, birthdate FROM 
bbiblioteca_php WHERE firt_name LIKE '%" .$search."%' OR last_name LIKE '%" .$search."%'";

$receive = [];
$errors = ['data' => false];


$getReceive = $db->query($query);

if($getReceive -> num_rows > 0){
    while($data = $getReceive-> fetch_assoc()){
        $receive[] = $data;
    }

    echo json_encode($receive);
}else{
    echo json_encode($errors);
}
?>
