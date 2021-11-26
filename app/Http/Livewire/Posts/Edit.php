<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\BelongsToManyMultiSelect;

class Edit extends Component implements HasForms
{
    use InteractsWithForms;

    public Post $post;

    public $title;

    public $categories;
 
    public function mount(): void
    {
        $this->form->fill([
            'title' => $this->post->title,
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),

            BelongsToManyMultiSelect::make('categories')
                ->preload()
                ->relationship('categories', 'name'),
        ];
    }
 
    protected function getFormModel(): Post
    {
        return $this->post;
    }
 
    public function save(): void
    {
        $this->post->update(
            $this->form->getState(),
        );
    }

    public function render()
    {
        return view('livewire.posts.edit');
    }
}
