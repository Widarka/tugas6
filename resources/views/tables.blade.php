<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="{{asset('css/tmp.css')}}" rel="stylesheet">
	<title>table</title>
</head>
<div class="container" style="margin-top: 5%">
<body>
	<table class="zebra-table bordered table">
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Program Studi</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $hsl)
			<tr>
				<td>{{  $loop->iteration }}</td>
				<td>{{  $hsl->NIM  }}</td>
				<td>{{  $hsl->Nama  }}</td>
				<td>{{  $hsl->Alamat  }}</td>
				<td>{{  $hsl->prodi->Program_Studi  }}</td>
				<td><a type="submit" style="text-decoration: none" role="button" href="{{  route('mhs.edit', $hsl->id)  }}" class="tombol">Update</a></td>
				<td>
					<form method="post" action="{{  route('mhs.destroy', $hsl->id)  }}">
						@csrf
						@method('DELETE')
					<input type="submit" role="button" class="tombol" value="Delete" onclick="return confirm('anda yakin ingin menghapus data ?')">
				</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
<a href="mhs/create" style="width: 30%;margin-left: 30%;margin-top: 5% "class="btn btn-outline-success">Tambah</a>
</body>
</html>