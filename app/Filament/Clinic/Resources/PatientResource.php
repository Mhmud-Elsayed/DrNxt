<?php

namespace App\Filament\Clinic\Resources;

use App\Filament\Clinic\Resources\PatientResource\Pages;
use App\Filament\Clinic\Resources\PatientResource\RelationManagers;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use App\Models\Allergy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'patients.navigation_label';

    public static function getNavigationLabel(): string
    {
        return __('resources.patients.navigation_label');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('clinic_id')
                    ->default(fn () => Auth::user()?->clinic_id)
                    ->required()
                    ->disabled()
                    ->numeric(),
                Forms\Components\TextInput::make('name')
                    ->label(__('resources.patients.name')) // Translated
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label(__('resources.patients.email'))
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label(__('resources.patients.phone'))
                    ->tel()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('dob')
                    ->label(__('resources.patients.dob')),
                Forms\Components\Textarea::make('address')
                    ->label(__('resources.patients.address'))
                    ->columnSpanFull(),
                Repeater::make('patientAllergies')
                    ->relationship('patientAllergies')
                    ->schema([
                        Select::make('allergy_id')
                            ->label(__('resources.patients.allergy'))
                            ->options(Allergy::pluck('name', 'id'))
                            ->searchable(),
                    ])
                    ->columns(1)
                    ->defaultItems(0)
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('resources.patients.name')) // Translated
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label(__('resources.patients.email'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label(__('resources.patients.phone'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->label(__('resources.patients.dob'))
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'view' => Pages\ViewPatient::route('/{record}'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
