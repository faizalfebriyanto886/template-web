<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css">
</head>
<body>
<center><img src="logo1.jpg"></center>
	<center>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggleroggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item actiontive">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">informasi</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="logout.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br><br><br>
<table width="1000" border="1">
<tr>
<td colspan="2" align="center"><h1>Sistem Informasi Sewa Kamera</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="customer.php">Customer</a></li>
<li><a href="kamera.php">Kamera</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<a href="input_customer.php">Input customer</a>
 <table border="1" >
                                        <thead>	

          <tr>
      <th >No</th>
      <th >id_customer </th>
			<th >nama customer </th>
			<th >alamat </th>
			<th >no_telp </th>
			
			<th >Aksi</th>
          </tr>
        </thead>
                                    
									

                                    <tbody>
									<?php 
include 'assets/conn.php';
$sql	= mysql_query ("SELECT * FROM customer ORDER BY id_customer DESC") or die(mysql_error());
$no = 1;
while ($data=mysql_fetch_assoc($sql)) {
?>			
                                        <tr class="odd gradeX">
                                            <td><?php echo $no?></td>
                                            <td><?php echo $data['id_customer'];?></td>
											 <td><?php echo $data['nm_customer'];?></td>
											  <td><?php echo $data['alamat'];?></td>
											   <td><?php echo $data['no_telp'];?></td>
											
                                            <td class="center"><a href="edit_customer.php?id=<?php echo $data['id_customer']; ?>" > Edit </a>|<a href="hapus_customer.php?id=<?php echo $data['id_customer']; ?>" 
	onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['nm_customer']; ?>?')"> hapus</a>
                                        </tr>
										
                                        <?php $no++; }?>
                                    </tbody>
									
									

                                </table>
</td>
</tr>
<tr>
<td colspan="2" align="center"><br><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></td>
</tr>
</table>
</body>
</html>