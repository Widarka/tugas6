<!DOCTYPE html>
<head>
  <title>Insert Data Baru</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body style="background-image: url(OfficialLogoDies56-01.png);background-repeat: no-repeat;background-position: top right;background-size: 50% 120%;margin-top: 30px;position: relative;background-color: lightblue">
  <div class="container">
    <form action="{{ route('mhs.store')  }}" method="post">
    	@csrf
      <h1 align="center" style="-webkit-text-stroke: 2px grey;-webkit-text-fill-color: transparent; font-family: sao ui; letter-spacing: 10px">Input Biodata</h1> 
      <hr size="10px">
      <div class="form-group" style="width: 50%">
        <strong>NIM</strong>
        <input type="tel" pattern="^\d{10}$" class="form-control" name="NIM" placeholder="Masukkan NIM" required="">
      </div>
      <div class="form-group" style="width: 50%">
      <strong>Nama</strong>
       <input type="text" class="form-control" name="nama" placeholder="masukkan nama" required="">
      </div>
      <div class="form-group" style="width: 50%">
        <strong>Alamat</strong>
        <textarea type="longtext" class="form-control" rows="5" name="alamat" placeholder="Masukkan alamat" required=""></textarea>
      </div>
      <div style="width: 50%">
        <strong>Program Studi</strong>
        <select class="form-control" name="prodi" required="">
        	<option value="0" >pilih</option>
        	<option value="1" >Teknologi Informasi</option>
        	<option value="2" >Teknik Mesin</option>
        	<option value="3" >Teknik Elektro</option>
        	<option value="4" >Teknik Sipil</option>
        	<option value="5" >Teknik Arsitektur</option>
        </select>
    	</div>
        <br>  
      <button type="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body> 