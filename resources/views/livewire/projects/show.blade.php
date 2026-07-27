<?php

use App\Models\Project;
use Livewire\Component;

new class extends Component
{
    public Project $project;
};
?>

<div>
    componente livewire projects.show

    <pre>
        title: {{ $project->title }}
        description: {!! $project->description !!}
    </pre>
</div>