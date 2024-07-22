<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Judokas;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Faker\Provider\ar_EG\Text;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\JudokasResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JudokasResource\RelationManagers;

class JudokasResource extends Resource
{
    protected static ?string $model = Judokas::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                    ->required(),
                TextInput::make('prenom')
                    ->required(),
                TextInput::make('telephone')
                    ->required()
                    ->tel(),
                TextInput::make('email')
                    ->required()
                    ->email(),
                Select::make('categorie_id')
                    ->required()
                    ->relationship('categorie', 'nom')
                    ->searchable()
                    ->preload()
                    ->reactive()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fullname')
                    ->label('Nom complet')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('telephone')
                    ->label('Téléphone')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('categorie.nom')
                    // ->getRelationship('categories', 'nom')
                    ->label('Categorie')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListJudokas::route('/'),
            'create' => Pages\CreateJudokas::route('/create'),
            'edit' => Pages\EditJudokas::route('/{record}/edit'),
        ];
    }
}
