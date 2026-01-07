<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Grid;
use Filament\Tables\Filters\SelectFilter;


class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';


    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Card::make()
                ->schema([
                    Grid::make(2)
                        ->schema([


                    Select::make('country_id')
                        ->relationship('country', 'name')
                        ->required()
                        ->reactive(),


                    Select::make('state_id')
                        ->options(function (callable $get) {
                            $countryId = $get('country_id');
                            if (!$countryId) {
                                return [];
                            }
                            return \App\Models\State::where('country_id', $countryId)
                                ->pluck('name', 'id');
                        })
                        ->required()
                        ->reactive(),


                    Select::make('city_id')
                        ->options(function (callable $get) {
                            $stateId = $get('state_id');
                            if (!$stateId) {
                                return [];
                            }
                            return \App\Models\City::where('state_id', $stateId)
                                ->pluck('name', 'id');
                        })
                        ->required()
                        ->reactive(),

                    Select::make('department_id')
                        ->relationship('department', 'name')
                        ->required(),

                    TextInput::make('first_name')->required(),
                    TextInput::make('last_name')->required(),
                    TextInput::make('address')->required(),
                    TextInput::make('zip_code')->required(),
                    DatePicker::make('birth_date')->required(),
                    DatePicker::make('date_hired')->required(),
                     ]),
                ]),
        ]);
}
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('first_name')->searchable()->sortable(),
            TextColumn::make('last_name')->searchable()->sortable(),
            TextColumn::make('country.name')->label('Country')->sortable(),
            TextColumn::make('state.name')->label('State')->sortable(),
            TextColumn::make('city.name')->label('City')->sortable(),
            TextColumn::make('department.name')->label('Department')->sortable()->searchable(),
            TextColumn::make('address')->limit(30),
            TextColumn::make('zip_code')->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('birth_date')->date()->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('date_hired')->date()->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('created_at')->dateTime()->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([
                SelectFilter::make('department')
    ->relationship('department', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
