<?php

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    #[Computed()]

    public function projects() {

        return Project::query()->inRandomOrder()->get();
    }
};
?>

<div>
    @foreach($this->projects as $project)
        <li>
            <a href="{{ route('projects.show', $project) }}">
                {{ $project->id }}. {{ $project->title }}
            </a>
        </li>
    @endforeach
</div>