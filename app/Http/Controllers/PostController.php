<?php
namespace App\Http\Controllers;
//import Model "Post

use App\Models\Post;
//return type View

use Illuminate\View\View;
//return type redirectResponse

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

    //import Facades "Storage"
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    /**
     * index
     * 
     * @return View
     * 
     */

    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }

    public function create(): View
{
return view('posts.create');
}

    public function store(Request $request): RedirectResponse
    {
        //validate form
            $this->validate($request, [
                'nama' => 'required|min:1',
                'jurusan' => 'required|min:1',
                'alamat' => 'required|min:1',
                'email' => 'required|min:1',
                'nohp' => 'required|',
                'image' => 'image|mimes:jpeg,jpg,png|max:2048'
                ]);

    //upload image
    $image = $request->file('image');
    $image->storeAs('public/posts', $image->hashName());

    //create post
    Post::create([
    'nama' => $request->nama,
    'jurusan' => $request->jurusan,
    'alamat' => $request->alamat,
    'email' => $request->email,
    'nohp' => $request->nohp,
    'image' => $image->hashName()
    ]);

    //redirect to index
    return redirect()->route('posts.index')->with(['success'=>'Berhasil Disimpan!']);
    }
    
    //Show data
    public function show(string $id): View
    {
        //get post by id
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

    //hapus data
    public function destroy($id): RedirectResponse 
    {
        //get post by 10
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $post->image);

        //delete post 
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['succes'=>'Data Berhasil Disimpan']);
    }



    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
{
    //validate form
       $this->validate($request, [
        'nama' => 'required|min:1',
        'jurusan' => 'required|min:2',
        'alamat' => 'required|min:2',
        'email' => 'required|min:2',
        'nohp' => 'required|min:1',
        'image' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);
//get post by ID
$post = Post::findOrFail($id);

//check if image is uploaded
if ($request->hasFile('image')) {

//upload new image
$image = $request->file('image');

$image->storeAs('public/posts', $image->hashName());

//delete old image
Storage::delete('public/posts/'.$post->image);

//update post with new image
$post->update([
'image' => $image->hashName(),
]);

} else {

//update post without image
$post->update([
    'nama' => $request->nama,
    'jurusan' => $request->jurusan,
    'alamat' => $request->alamat,
    'email' => $request->email,
    'nohp' => $request->nohp]);
    }
           //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data
        Berhasil Diubah!']);
   }

}