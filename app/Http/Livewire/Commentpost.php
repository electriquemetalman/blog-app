<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment as Comments;

class Commentpost extends Component
{
    public $name, $email, $comment, $id_post, $comments, $comment_nomber, $comment_id;

    protected $rules = [
        'name' => 'required|min:4',
        'email' => 'required|email|min:6',
        'comment' => 'required'
    ];

    public function resetFields()
    {
        $this->name = '';
        $this->email = '';
        $this->comment = '';
    }

    public function render()
    {
        $this->comment_nomber = Comments::where('post_id', $this->id_post)->count();
        $this->comments = Comments::where('post_id', $this->id_post)->orderBy('created_at', 'desc')->get();
        return view('livewire.commentpost');
    }

    public function storeComment()
    {
        $this->validate();

        try {
            Comments::create([
                'nom' => $this->name,
                'email' => $this->email,
                'comment' => $this->comment,
                'post_id' => $this->id_post
            ]);
            session()->flash('success', 'Envoyer avec succes!!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('error', "Une erreur c'est produit!!");
        }
    }

    public function editComment($id)
    {
        try {
            $comment = Comments::findOrFail($id);
            if (!$comment) {
                session()->flash('error', 'comment not found');
            } else {
                $this->comment = $comment->comment;
                $this->comment_id = $comment->id;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }

    public function updateComment()
    {
        try {

            $comment = Comments::where('id', $this->comment_id)->first();
            if ($this->email == $comment->email) {
                $comment->update([
                    'comment' => $this->comment
                ]);
                session()->flash('success', 'Votre commentair a ete modifier!!');
            } else {
                session()->flash('error', "Une erreur c'est produit!!");
            }
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('error', "Une erreur c'est produit!!");
        }
    }
}
