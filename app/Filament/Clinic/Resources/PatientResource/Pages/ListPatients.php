<?php

namespace App\Filament\Clinic\Resources\PatientResource\Pages;

use App\Filament\Clinic\Resources\PatientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPatients extends ListRecords
{
    protected static string $resource = PatientResource::class;

    public function getTitle(): string
    {
        return __('resources.patients.title');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('resources.patients.create_title')),
        ];
    }

}
