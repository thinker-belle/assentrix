<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card card-danger card-outline">
        <div class="card-header">
          <h5 class="card-tools float-left mb-0">Employee Type</h5>
          <div class="card-tools float-right p-0">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
          <div class="float-right col-4 p-0">
            <button type="button" class="btn btn-outline-danger btn-sm btn-block" data-toggle="modal" data-target="#modal-default">Add</button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <input class="form-control" type="search" placeholder="Search" name="finddevtype" id="devtypesearch">
          </div>
          <div class="card mb-0">
            <table class="table table-hover text-nowrap mb-0 text-center">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Device Type</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <tbody>
                <?php
                          require_once ("dbactions/dbconfig.php");
                          // $finddevtype = $_GET['finddevtype'];
                          // $finddevtype = htmlspecialchars($finddevtype);
                          // $finddevtype = mysql_real_escape_string($finddevtype);

                          $querydevtype = "SELECT * FROM itms_devtype";
                          $devtyperesult = $dbconnect->query($querydevtype);

                          if ($devtyperesult->num_rows > 0) {
                          while($devtyperow = $devtyperesult->fetch_assoc()) {
                          echo "<tr role='row'>
                                    <td>".$devtyperow["devtypeid"]."</td>
                                    <td>".$devtyperow["devtypename"]."</td>
                                    <td>
                                      <span class='badge badge-success'>
                                        ".$devtyperow["isactive"]."
                                      </span>
                                    </td>
                                    <td>
                                      <button type='button' class='btn btn-sm btn-info'>
                                        <i class='far fa-edit'></i>
                                      </button>
                                      <button type='button' class='btn btn-sm btn-danger'>
                                        <i class='far fa-trash-alt'></i>
                                      </button>
                                    </td>
                                  </tr>";
                            }
                          } else {
                            // echo "0 results";
                          }
                            $dbconnect->close();
                          ?>
              </tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card card-success card-outline">
        <div class="card-header">
          <h5 class="card-tools float-left mb-0">Device Interface</h5>
          <div class="card-tools float-right p-0">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
          <div class="float-right col-4 p-0">
            <button type="button" class="btn btn-outline-success btn-sm btn-block">Add</button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </div>
          <div class="card mb-0">
            <table class="table table-hover text-nowrap mb-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Device Interface</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Wireless LAN</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>External Wireless LAN</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>LAN</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Device Type</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form role="form" method="post" action="dbactions/devtype_insert.php">
        <div class="modal-body">
          <input type="text" class="form-control" placeholder="Enter Device Type" name="device_type" id="devtypename" autofocus>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button href="index.php?administration&general&saved" type="submit" class="btn btn-outline-danger swalDefaultSuccess" name="submit" value="Submit">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
