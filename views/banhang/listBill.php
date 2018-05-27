<?php 
include_once 'views/layouts/header.php';

?>
<!-- Page Content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <div class="box-body">


            <table  id="example"" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Mã Hóa Đơn</th>
                        <th>Mã Khách Hàng</th>
                        <th>Ngày Bán</th>
                        <th>Tổng Tiền</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach ($bill as $product) { ?>
                    <tr>
                        <td align="center"><?= $product['ma_hoa_don'] ?></td>
                        <td align="center"><?= $product['ma_kh'] ?></td>
                        <td align="center"><?= $product['created_at'] ?> </td>
                        <td align="center"><?= $product['quantity'] ?></td>
                        
                        
                        <td class="text-center">
                          <a type="button" id="" href="?mod=BanHang&act=addcart&ma_sp=<?php echo $product['ma_sp'] ?>" class="btn btn-sm btn-info"  value="" ><span class="glyphicon glyphicon-shopping-cart "></span></a>
                            <!-- <a  title="Add to cart" class="cart btn btn-sm btn-danger " id="">Add to cart</a>
                            <i class="fas fa-cart-arrow-down"></i> -->

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php include_once 'views/layouts/footer.php'; ?>