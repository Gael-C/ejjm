<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Bureau;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BureauResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BureauResource\RelationManagers;
use Filament\Forms\Components\FileUpload;

class BureauResource extends Resource
{
    protected static ?string $model = Bureau::class;

    protected static ?string $modelLabel = 'Bureau';

    public static ?string $navigationLabel = 'Bureau';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make(('nom'))
                    ->required(),
                Textinput::make('prenom')
                    ->required(),
                Textarea::make('description')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('bureau'),
                TextInput::make('poste')
                    ->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fullname')
                    ->label('Nom complet'),
                TextColumn::make('poste')
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
            'index' => Pages\ListBureaus::route('/'),
            'create' => Pages\CreateBureau::route('/create'),
            'edit' => Pages\EditBureau::route('/{record}/edit'),
        ];
    }
}
