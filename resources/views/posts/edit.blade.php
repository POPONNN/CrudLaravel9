<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

 <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}"
                    method="POST" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')

                    <div class="form-group">
                        <label class="font-weight-bold">GAMBAR</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                              <label class="font-weight-bold">Nama</label>
                              <input type="text" class="form-control
                              @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $post->nama) }}" placeholder="Masukkan Judul Post">
                                 <!-- error message untuk nama -->
                              @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                    </div>
                    
                    <div class="form-group">
                              <label class="font-weight-bold">JUDUL</label>
                              <input type="text" class="form-control
                              @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan', $post->jurusan) }}" placeholder="Masukkan Judul Post">
                                 <!-- error message untuk jurusan -->
                              @error('jurusan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                    </div>
                    
                    <div class="form-group">
                              <label class="font-weight-bold">JUDUL</label>
                              <input type="text" class="form-control
                              @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $post->alamat) }}" placeholder="Masukkan Judul Post">
                                 <!-- error message untuk alamat -->
                              @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                    </div>
                    
                    <div class="form-group">
                              <label class="font-weight-bold">JUDUL</label>
                              <input type="text" class="form-control
                              @error('email') is-invalid @enderror" name="email" value="{{ old('email', $post->email) }}" placeholder="Masukkan Judul Post">
                                 <!-- error message untuk email -->
                              @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                    </div>
                    
                    <div class="form-group">
                              <label class="font-weight-bold">JUDUL</label>
                              <input type="number" class="form-control
                              @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp', $post->nohp) }}" placeholder="Masukkan Judul Post">
                                 <!-- error message untuk nohp -->
                              @error('nohp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-md btnprimary">UPDATE</button>
                    <button type="reset" class="btn btn-md btnwarning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
                <script>
                CKEDITOR.replace( 'content' );
                </script>
    </body>
</html>