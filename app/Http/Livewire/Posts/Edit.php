<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\BelongsToManyMultiSelect;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class Edit extends Component implements HasForms
{
    use InteractsWithForms;

    public Post $post;

    public $title;

    public $categories;

    public $is_published;
    public $published_at;
 
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

            Toggle::make('is_published')
                ->default(false)
                ->reactive()
                ->helperText('This is sending a request back to livewire. Is it an idea to do this with Alpine instead?'),

            Card::make()
                ->visible(fn (callable $get) => $get('is_published'))
                ->schema([
                    DatePicker::make('published_at'),
                ]),
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
