<html>
  <head>
    <style>
      table {
        border: 1px solid white;
      }

      .Name {
        background-color: orange;
      }

      .Header {
        background-color: orange;
        color: white;
        text-align: center;
        font-weight: bold;
      }

      .Body {
        background-color: peachpuff;
      }

    </style>

  </head>
  </body>
    <?php
      require_once("productListdb.php");
    /*
    if(isset($mydb)) {
      echo "true<br  />";
    } else {
      echo "false<br />";
    }*/

      
      
    //send a query to the database
      $sql = "Select ProductName, CompanyName, UnitsInStock, UnitPrice from products p Join suppliers s On p.SupplierID = s.SupplierID";
      $result = $mydb->query($sql);
      //$result should be a resultset
      echo "<table>";
        echo "<thead>";
          echo "<tr class = 'Header'>";
            echo "<td>","Product Name","</td>";
            echo "<td>","Supplier Name","</td>";
            echo "<td>","Units In Supply","</td>";
            echo "<td>","Unit Price","</td>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
              echo "<td class = 'Name'>".$row["ProductName"]."</td>";
              echo "<td class = 'Body'>".$row["CompanyName"]."</td>";
              echo "<td class = 'Body'>".$row["UnitsInStock"]."</td>";
              echo "<td class = 'Body'>".$row["UnitPrice"]."</td>";
            echo "</tr>";
          }
        echo "</tbody>";
      echo "</table>"; 
    ?>

  </body>

</html>
