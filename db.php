<?php

function Query($query)
{
    $servername = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)}"; 
    $username = "Admin"; 
    $password = ""; 
    $dbname = "C:\\xampp\htdocs\\myphp\\econtratual3.accdb"; 
    try { 
        $conn = new PDO("$servername; Dbq=$dbname", $username, $password); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $stmt = $conn->prepare($query); 
        $stmt->execute(); 
        //set the resulting array to associative 
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $result = $stmt; 
        
        echo '<table>';

        foreach($result as $item) 
        { 
            echo '<tr>';
            foreach ($item as $value) 
            { 
                echo '<td>'.utf8_encode($value).'</td>';                 
            } 
            echo '</tr>'; 
        } 
        echo '</table>';
        
        } 
            
        catch (PDOException $e) { 
            echo "Error: " . $e->getMessage(); 
        } 
}

function QueryValue($query)
{
    $servername = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)}"; 
    $username = "Admin"; 
    $password = ""; 
    $dbname = "C:\\xampp\htdocs\\myphp\\econtratual3.accdb"; 
    try { 
        $conn = new PDO("$servername; Dbq=$dbname", $username, $password); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $stmt = $conn->prepare($query); 
        $stmt->execute(); 
        //set the resulting array to associative 
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $result = $stmt; 
        
        foreach($result as $item) 
        {             
            foreach ($item as $value) 
            { 
                return $value; 
            }             
        }         
        
        } 
            
        catch (PDOException $e) { 
            echo "Error: " . $e->getMessage(); 
        } 
}

?>