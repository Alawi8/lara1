

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\Controller;



class postsController extends Controller
{
    // display info function
    //------------------------------------------

    public function index()
    {
        $post = Post::all();
        $arr = array('posts' => $post);
        return view('dash.components.posts.display', $arr);
    }

    // blade info function
    public function create(Request $request)
    {  
        
    }
    //insert data from view 
    public function store(Request $request)
    {
        $validated = $request->validate([
            //blade data in db
            'title' => 'required',
            'content' => 'required',
            'image'=> 'required|mimes:jpg,png,jpeg|max:5048',
            
        ]);
        $newImageName = time() . '-' . $request->name . '.' .
        $request->image->extension();

        $request->image->move(public_path('../storage/img/offers'),$newImageName);
           

        DB::table('posts')->insert([
            'title' => $request->title,
            'time'  => $request->time,
            'content' => $request->content,
            'writer' => $request->writer,
            'image_path'=> $newImageName ,
        ]);
        return redirect()->route('dash.display');
    }


    
    public function show()
    {
       

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    //function to display posts in home page
    public function display($id){
        $dis_posts = Post::where('id',$id)->first();
        return view ('home.pages.display',compact('dis_posts'));
    }
}