<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post as Posts;
use PhpParser\Node\Stmt\TryCatch;

class Post extends Component
{
    public $posts, $name, $description, $post_id;
    public $updatePost = false;

    //Validation
    public $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    public function resetfields()
    {
        $this->name = '';
        $this->description = '';
        $this->updatePost = false;
    }
    public function render()
    {
        $this->posts = Posts::select('id', 'name', 'description')->get();
        return view('livewire.post');
    }

    public function store()
    {
        $this->validate();

        try {
            Posts::create([
                'name' => $this->name,
                'description' => $this->description
            ]);
            $this->resetfields();
        } catch (\Exception $e) {
            session()->flash('error', 'Algo deu errado!');
            $this->resetfields();
        }
    }

    public function edit($id)
    {
        $post = Posts::findOrFail($id);
        $this->name = $post->name;
        $this->description = $post->description;
        $this->post_id = $post->id;
        $this->updatePost = true;
    }

    public function cancel()
    {
        $this->updatePost = false;
        $this->resetfields();
    }

    public function update($id)
    {

        $this->validate();
        // dd($id);
        try {
            Posts::find($id)->fill([
                'name' => $this->name,
                'description' => $this->description
            ])->save();
            // dd($dados);


            $this->resetfields();

        } catch (\Exception $e) {
            session()->flash('error', 'Algo deu errado!');
            $this->resetfields();
        }
    }
}
