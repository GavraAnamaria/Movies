<!DOCTYPE html>
<html>
    <head>
        <title>Exercitiul 3.a</title>
                <style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #f44336;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #f44336}

.button:active {
  background-color: #f44336;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
div {
    width: 1200px;
    padding: 15px;
    border: 25px groove;
    margin: 30px;
    text-align: center;
}
p {
    font-family: "Times New Roman", Times, serif;
    font-size: 30px;
}
body {
    background-color: whitesmoke;
}
table {
    text-align:center;
    margin: auto;
    border: solid 3px;
    border-color: black;
}
th {
    background-color: #f44336;
    color: black;
    border: 3px;
}
td{
    border: solid 1px;
    border-color: black;
    width: 200px;
}
</style>   
    </head>
<body>
    <div> 
<?php
echo "<table>";
echo "<tr><th>ID</th><th>Data</th><th>Aparat</th><th>Simptome</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr style='text-align:center'>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 
include "/connection.php";
try {
     $conn = new PDO("mysql:host=$db_host;dbname=$dbname", $db_username, $db_pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT id_d,data_introducere,aparat,simptome
                             FROM Deviz
                             WHERE data_constatare IS NULL"); 
     $stmt->execute();
     $result1 = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>  
        <br><br>
        <a href="index.html" class="button">Inapoi</a>
    </div>
</body>
</html>


