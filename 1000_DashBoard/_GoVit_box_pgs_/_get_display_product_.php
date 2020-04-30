<?php 

  if(isset($_SESSION['_getmeinplzdv_'])){

?>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable of Cars <span class="badge badge-primary">En location</span></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Product name</th>
                  <th>Price <span class="badge badge-primary">USD $</span></th>
                  <th>Categories</th>
                  <th>Update </th>
                  <th>Action On</th>
                </tr>
                </thead>
              <tbody>
              <?php 
                
                $action = _onLoadProductForLease($bdd); 
                foreach ($action as $key) {

              ?>

                <tr>
                  <td><?php echo($key->get_name());?></td>
                  <td>
                    <?php echo($key->get_price());?>
                  </td>
                  <td> <span class="badge badge-warning">En vente</span></td>
                  <td><?php echo($key->get_date());?></td>
                  
                  <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">Action</button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" id="<?php echo($key->get_id());?>" href="#"  onclick="getItemForEditForLease(this.id);">Edit</a>
                        <a class="dropdown-item" href="#" id="<?php echo($key->get_id());?>"  onclick="getItemForDeleteLese(this.id);">Delete this product</a>
                      </div>
                    </button>
                  </div>
                  </td>
                </tr>

              <?php    
                
                } 
                
              ?>
              </tbody>
                <tfoot>
                <tr>
                  <th>Product name</th>
                  <th>Price <span class="badge badge-primary">USD $</span></th>
                  <th>Categories</th>
                  <th>Update</th>
                  <th>Action On</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable of Cars <span class="badge badge-primary">En Vente</span></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Product name</th>
                  <th>Price <span class="badge badge-primary">USD $</span></th>
                  <th>Categories</th>
                  <th>Update </th>
                  <th>Action On</th>
                </tr>
                </thead>
              <tbody>
              <?php 
                
                $action = _onLoadProductForSale($bdd); 
                foreach ($action as $key) {

              ?>

                <tr>
                  <td><?php echo($key->get_name());?></td>
                  <td>
                    <?php echo($key->get_price());?>
                  </td>
                  <td> <span class="badge badge-warning">En vente</span></td>
                  <td><?php echo($key->get_date());?></td>
                  
                  <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">Action</button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" id="<?php echo($key->get_id());?>" href="#"  onclick="getItemForEditForSale(this.id);">Edit</a>
                        <a class="dropdown-item" href="#" id="<?php echo($key->get_id());?>"  onclick="getItemForDeleteSale(this.id);">Delete this product</a>
                      </div>
                    </button>
                  </div>
                  </td>
                </tr>

              <?php    
                
                } 
                
              ?>
              </tbody>
                <tfoot>
                <tr>
                  <th>Product name</th>
                  <th>Price <span class="badge badge-primary">USD $</span></th>
                  <th>Categories</th>
                  <th>Update</th>
                  <th>Action On</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
    <script>
      // (function(){
        function getItemForEditForLease(ex){
            window.location.href = '?_trgPage_=_get_action_editing&this84='+ex;
        };
        function getItemForDeleteLese(ec){
          var xhr = new XMLHttpRequest();
                xhr.open('GET', 'dist/js/_actionOn_.php?targeted84='+ec+'&from=84');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                      if(xhr.response.indexOf(xhr.status) != -1){
                        alert('supprime avec succes');
                        setTimeout(function(){
                            window.location.reload();
                        }, 100);
                    }
                  }
                };
                xhr.send(null);
        }
        function getItemForEditForSale(ex){
          window.location.href = '?_trgPage_=_get_action_editing&this84='+ex;

        };
        function getItemForDeleteSale(ec){
          var xhr = new XMLHttpRequest();
                xhr.open('GET', 'dist/js/_actionOn_.php?targeted95='+ec+'&from=95');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                      if(xhr.response.indexOf(xhr.status) != -1){
                        alert('supprime avec succes');
                        setTimeout(function(){
                            window.location.reload();
                        }, 100);
                    }
                  }
                };
                xhr.send(null);
        }
      // })()
    </script>
    
<?php 

  }else{

    header("location:?_trgPage_=_get_home_pg_");

  }

?>