<?php

namespace App\Filament\Clinic\Resources\PatientResource\Pages;

use App\Filament\Clinic\Resources\PatientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPatient extends EditRecord
{
    protected static string $resource = PatientResource::class;

    public function getTitle(): string
    {
        return __('resources.patients.edit_title');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
