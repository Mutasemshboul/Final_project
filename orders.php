<?php
include 'connection.php';
include 'headerAdmin.php';

?>

<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js "></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js "></script>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Tables</h2>
                           </div>
                        </div>
<div class="col-md-9" style="margin-left: 300px;margin-right:550px">
                           <div class="white_shd full margin_bottom_60">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Users</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table" id="example">
                                       <thead class="thead-dark">
                                          <tr>
                                             <th>Image</th>
                                             <th>Product</th>
                                             <th>Product Price</th>
                                             <th>Product Sale</th>
                                             <th>Category Name</th>
                                             <th>Profit from Demand</th>

                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php 
                                        $sql = "Select * from orders inner join product on product.ProductID = orders.ProductID inner join category on product.CategoryID = category.CategoryID";
                                        $result=mysqli_query($connection,$sql);
                                        while($row = mysqli_fetch_array($result)){

                                        
                                          echo '<tr>
                                            <td><img src="uploads/'.$row['Imagepath'].'" width="50px" height="50px"/></td>
                                             <td>'.$row['ProductName'].'</td>
                                             <td>'.$row['ProductPrice'].'</td>
                                             <td>'.$row['ProductSale'].'</td>
                                             <td>'.$row['CategoryName'].'</td>
                                             <td>'.$row['ProductPrice'] - $row['ProductSale'].'</td>
                                          </tr>';
                                        }
                                        
                                        ?>
                                        
                                       </tbody>
                                       <?php 
                                       $query = "select sum(product.ProductPrice) as total,sum(product.ProductSale) as sale,count(orders.ProductID) as totalorders,max(product.ProductPrice) as maxPrice,max(product.ProductSale) as maxSale,min(product.ProductPrice) as minPrice,min(product.ProductSale) as minSale  from orders inner join product on product.ProductID = orders.ProductID";
                                       $result = mysqli_query($connection,$query);
                                       while($row = mysqli_fetch_array($result)){
                                        echo'<td> Total Profit : '.$row['total'] - $row['sale'].'</td>
                                        <td>Total Orders :'.$row['totalorders'].' </td>
                                        <td>Max Price :'.$row['maxPrice'].' </td>
                                        <td>Min Price :'.$row['minPrice'].' </td>
                                        <td>Max Sale :'.$row['maxSale'].' </td>
                                        <td>Min Sale :'.$row['minSale'].' </td>';
                                        
                                       } ?>
                                       
                                    </table>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                           </div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" defer></script>

<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js" defer></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                
                'pdfHtml5',
                 
            ]
            
        });
    });
</script>