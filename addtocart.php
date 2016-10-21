<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

         $connection=  mysql_connect('localhost:8081','root','root');
              if(!$connection)
              {
                  
                  echo 'Could Not Connect'.  mysql_errno();
              }
              mysql_select_db('product');
              $sql="select * from product.test";
              $result=  mysql_query($sql);
              echo $row[Id];
              echo $row[Name];
              echo $row[Quantity];
       
        ?>
    </body>
</html>



Schema name-product
Table nm-test

(Id,Name,Quantity,Image)