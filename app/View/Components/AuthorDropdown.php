<?php

namespace App\View\Components;

use Closure;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthorDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.author-dropdown', [
            'authors' => User::all(),
            'currentAuthor' => User::firstWhere('username', request('author'))
        ]);
    }
}
