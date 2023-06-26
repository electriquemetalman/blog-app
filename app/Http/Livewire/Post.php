<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post as Posts;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Post extends Component
{
    use WithFileUploads;
    public $posts, $title, $image, $postId, $paragraph1, $paragraph2, $paragraph3, $paragraph4, $updatePost = false, $addPost = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deletePostListner' => 'deletePost'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required|min:5',
        'image' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:1024',
        'paragraph1' => 'required'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->title = '';
        $this->image = '';
        $this->paragraph1 = '';
        $this->paragraph2 = '';
        $this->paragraph3 = '';
        $this->paragraph4 = '';
    }

    public function render()
    {
        $this->posts = Posts::select('id', 'title', 'paragraph1')->get();
        return view('livewire.post');
    }

    /**
     * Open Add Post form
     * @return void
     */
    public function addPost()
    {
        $this->resetFields();
        $this->addPost = true;
        $this->updatePost = false;
    }

    /**
     * store the user inputted post data in the posts table
     * @return void
     */
    public function storePost()
    {
        $this->validate();
        try {

            $img = Image::make($this->image)->encode('jpg');
            $img->resize(350, 210);
            $name = Str::random() . time() . '.jpg';
            $path = storage_path() . "/app/public/posts/";
            $img->save($path . $name);

            //$image = $this->image->store('posts', 'public');
            Posts::create([
                'title' => $this->title,
                'image' => $name,
                'paragraph1' => $this->paragraph1,
                'paragraph2' => $this->paragraph2,
                'paragraph3' => $this->paragraph3,
                'paragraph4' => $this->paragraph4
            ]);
            session()->flash('success', 'Post Created Successfully!!');
            $this->resetFields();
            $this->addPost = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }


    /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancelPost()
    {
        $this->addPost = false;
        $this->updatePost = false;
        $this->resetFields();
    }

    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function deletePost($id)
    {
        try {
            Posts::find($id)->delete();
            session()->flash('success', "Post Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong!!");
        }
    }
}
