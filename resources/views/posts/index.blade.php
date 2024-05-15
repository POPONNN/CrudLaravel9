<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My data</title>
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Mas Admin Mas Admin</h3>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">JURUSAN</th>
                                        <th scope="col">ALAMAT</th>
                                        <th scope="col">NOHP</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">GAMBAR</th>
                                    </tr>
                                </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->nama }}</td>
                                <td>{{ $post->jurusan }}</td>
                                <td>{{ $post->alamat }}</td>
                                <td>{{ $post->nohp }}</td>
                                <td>{{ $post->email }}</td>
                                <td class="text-center">
                                <img src="{{asset('/storage/posts/'.$post->image) }}" class="rounded" style="width:150px">
                                </td>
                    <td>{!! $post->content !!}</td>
                    <td class="text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?')" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                <a href="{{ route('posts.show',$post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
        @csrf
        @method('DELETE')
            <button type="submit"class="btn btn-sm btn-danger">HAPUS</button>
            </form>
                </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                            Data Post belum Tersedia.
                          </div>
                         @endforelse
                       </tbody>
                    </table>
                    {{ $posts->links() }}
                    </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>