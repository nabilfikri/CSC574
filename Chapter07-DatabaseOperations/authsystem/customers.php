<?php require_once './header.php'; ?>

<?php
    //if user not logged in, redirect user to signin.php
    if(!isset($_SESSION["loggedin"])){
        header("location: signin.php");
        exit;
    }
?>

<h1>Customers</h1>

<?php   //pagination
    require_once '../db_connect.php';

    //define total number of results you want per page  
    $results_per_page = 10;  
  
    //find the total number of results stored in the database  
    $query = "select * from customers";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);

    echo "Number of customers: " . $number_of_result . "<br><br>";
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page - 1) * $results_per_page;  
  
    //retrieve the selected results from database   
    $query = "SELECT * FROM customers LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($conn, $query);  
      
    //display the retrieved result on the webpage
    echo '<table border="1">';
    echo '  <tr>';
    echo '      <th>Customer No.</th> ';
    echo '      <th>Customer Name</th>';
    echo '      <th>Phone</th>';
    echo '      <th>Country</th>';
    echo '      <th>Credit Limit</th>';  
    echo '  </tr>';
    
    while ($row = mysqli_fetch_array($result)) {  
        echo '<tr>';
        echo '  <td>' . $row['customerNumber'] . '</td> ';
        echo '  <td>' . $row['customerName'] . '</td>';
        echo '  <td>' . $row['phone'] . '</td>';
        echo '  <td>' . $row['country'] . '</td>';
        echo '  <td>' . $row['creditLimit'] . '</td>';  
        echo '</tr>';
    }
    echo '</table><br><br>';
    
    echo '<p style="text-align: center">';
    echo 'Current Page: ' . $page . '<br>';
  
    //display the link of the pages in URL  
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '&nbsp;<a href = "customers.php?page=' . $page . '">' . $page . '</a>&nbsp;';  
    }
    echo '</p>';
?>

<?php require_once './footer.php'; ?>