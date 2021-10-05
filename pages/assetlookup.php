<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- /.card-header -->
    <div class="card-body">
      <table id="invasset" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Host Name</th>
            <th>Device Type</th>
            <th>Interface</th>
            <th>IP Address</th>
            <th>MAC Address</th>
            <th>Remarks</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
              require_once ("dbactions/dbconfig.php");
              $sql = "SELECT * FROM MainData";
              $result = $dbconnect->query($sql);

              if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              echo "<tr role='row'>
                        <td>".$row["ID"]."</td>
                        <td>".$row["UserName"]."</td>
                        <td>".$row["HostName"]."</td>
                        <td>".$row["DeviceType"]."</td>
                        <td>".$row["Interface"]."</td>
                        <td>".$row["IPAddress"]."</td>
                        <td>".$row["MACAddress"]."</td>
                        <td>".$row["Remarks"]."</td>
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
                echo "0 results";
              }
                $dbconnect->close();
              ?>
          </tbody>
      </table>
    </div>
      <!-- /.card-body -->
</div>
    <!-- /.card -->

  </div>
  <!-- /.col -->
</div>
