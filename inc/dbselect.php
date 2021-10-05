<div class="card-body table-responsive p-0" style="height:400px;">
    <table class="table table-head-fixed text-nowrap table-hover">
      <thead>
        <tr role="row">
          <th>ID</th>
          <th>User Name</th>
          <th>Host Name</th>
          <th>Device Type</th>
          <th>Interface</th>
          <th>IP Address</th>
          <th>MAC Address</th>
          <th>Remarks</th>
        </tr>
      </thead>
      <?php
      require_once ("inc/dbconfig.php");
      $sql = "SELECT ID,UserName,HostName,DeviceType,Interface,IPAddress,MACAddress,Remarks FROM MainData";
      $result = $dbconnect->query($sql);

      if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
      echo "<tbody><tr role='row'>
                <td>".$row["ID"]."</td>
                <td>".$row["UserName"]."</td>
                <td>".$row["HostName"]."</td>
                <td>".$row["DeviceType"]."</td>
                <td>".$row["Interface"]."</td>
                <td>".$row["IPAddress"]."</td>
                <td>".$row["MACAddress"]."</td>
                <td>".$row["Remarks"]."</td>
              </tr></tbody>";
        }

      } else {
        echo "0 results";
      }
        $dbconnect->close();
      ?>

      </table>
</div>
