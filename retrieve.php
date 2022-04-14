<html xmlns="http://www.w3.org/1999/xhtml">
    <link rel="stylesheet" href="css/style.css">
<head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</head>

<body>
    <form id="form1">
    <div id="dvContainer">
        <!-- This content needs to be printed. -->
        <?php
			$id=$_SESSION['id'];
			$query = "SELECT * FROM `user` WHERE userid='$id'";
			$result = $connect->query($query);
		  ?>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Advanced Table</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Start time</th>
                              <th>End time</th>
                              <th>Shift ID</th>
                              <th>Job</th>
                              <th>Company</th>
                              <th>Pay rate</th>
							                <th>Hours worked</th>
							                <th>Amount earned</th>	
                              <th></th>
                            </tr>
							<?php while($row = $result->fetch_assoc()):?>
							<tr>
							  <td><?php echo $row['Date']?></td>
							  <td><?php echo $row['Start']?></td>
							  <td><?php echo $row['End']?></td>
							  <td><?php echo $row['id']?></td>
							  <td><?php echo $row['Job']?></td>
							  <td><?php echo $row['Company']?></td>
							  <td><?php echo $row['Pay_rate']?></td>
							  <td><?php echo $row['Hours_worked']?></td>
							  <td><?php echo $row['Amount_earned']?></td>
							</tr>
							<?php endwhile;?>
                          </thead>
                      </table>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <input type="button" value="Print Div Contents" id="btnPrint" />
    </form>
</body>
</html>