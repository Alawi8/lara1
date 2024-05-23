<?
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class IndexPosts extends Component
{
    public $title;

    public function mount($title)
    {
        $this->title = str_replace('_', ' ', $title);
    }

    public function render()
    {
        $post = Post::where('title', $this->title)->firstOrFail();

        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->slug);
        $this->seo()->opengraph()->setUrl($post->slug);
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->addImages($post->img_url);
        $this->seo()->setCanonical(route('display', ['title' => str_replace(' ','_',$post->title)]) );
        $this->seo()->jsonLd()->setType('Article');

        $this->seo()->jsonLd()
            ->setType('Article')
            ->setTitle($post->title)
            ->setDescription($post->slug)
            ->addImage(asset($post->img_url));
        $this->seo()->twitter()
            ->setTitle($post->title)
            ->setDescription($post->slug)
            ->setImage($post->img_url)
            ->setSite('meshcah');

        $dis_posts = Post::with('comments')->where('title', $this->title)->first();

        if (!$dis_posts) {
            abort(404);
        }

        $comments = $dis_posts->comments ?? [];

        return view('livewire.display-post', compact('dis_posts', 'comments'));
    }
}
