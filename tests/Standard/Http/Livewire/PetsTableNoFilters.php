<?php

namespace Rappasoft\LaravelLivewireTables\Tests\Standard\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Tests\Standard\Models\Pet;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PetsTableNoFilters extends DataTableComponent
{
    public $model = Pet::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->setSortingPillTitle('Key')
                ->setSortingPillDirections('0-9', '9-0'),
            Column::make('Sort')
                ->sortable(),
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('Age'),
            Column::make('Breed', 'breed.name')
                ->sortable(),
            Column::make('Other')
                ->label(function ($row, Column $column) {
                    return 'Other';
                }),
        ];
    }
}