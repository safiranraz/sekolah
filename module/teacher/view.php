   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=".">Home</a></li>
              <li class="breadcrumb-item active">Daftar Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Daftar Guru</div>
                    <div class="col-4">
                        <a href="?m=teacher&s=add" class="btn btn-large btn-primary" style="float: right;"> <i class="fas fa-plus"></i>  Tambah Guru</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nip</th>
                                <th>name</th>
                                <th>tempat lahir</th>
                                <th>tanggal lahir</th>
                                <th>photo </th>
                                <th>wa</th>
                                <th>mata pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once('config.php');
                            $sql = "SELECT * FROM subjects ORDER BY subject ASC";
                            $result = mysqli_query($config, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $no=1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$row['nip'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['pob'].'</td>
                                            <td>'.$row['dob'].'</td>
                                            <td>'.$row['photo'].'</td>
                                            <td>'.$row['wa'].'</td>
                                            <td>'.$row['subject_id'].'</td>
                                            <td>
                                                <a href="?m=teacher&s=edit&id='.$row['id'].'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="?m=teacher&s=delete&id='.$row['id'].'" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a
                                            </td>
                                    </tr>';
                                    $no++;
                                }
                            } else {
                                echo "<td colspan='9' align='center'>Tidak Ada Data!</td>";
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>nip</th>
                                <th>name</th>
                                <th>tempat lahir</th>
                                <th>tanggal lahir</th>
                                <th>photo </th>
                                <th>wa</th>
                                <th>mata pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->