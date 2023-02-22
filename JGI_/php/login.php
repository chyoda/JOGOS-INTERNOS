<?php
$servername = "localhost";
$database = "jogos_internos";
$username = "root";
$password = "angel27643078";
$login = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM login WHERE email ='$login' AND senha = '$senha'";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

if (!$sql) {
    echo "erro";
}
                                                                                                                                                        
if (isset($entrar)) {
    $verifica = mysqli_query($conn,$sql) or die("erro ao selecionar");
}
?>