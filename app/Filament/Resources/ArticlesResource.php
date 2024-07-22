<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Articles;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticlesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticlesResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class ArticlesResource extends Resource
{
    protected static ?string $model = Articles::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titre')
                    ->required()
                    ->live(onBlur:true)
                    ->afterStateUpdated(function(string $operation, $state, Set $set){
                        if($operation !== 'create'){
                            return;
                        }
                        $set('slug', Str::slug($state));
                    }),
                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->disabled()
                        ->dehydrated()
                        ->unique(Articles::class, 'slug', ignoreRecord:true),
                    TextArea::make('contenu')
                        ->required(),
                    FileUpload::make('images')
                        ->multiple()
                        // ->directory('articles')
                        ->maxFiles(5)
                        ->reorderable()


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titre')
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticles::route('/create'),
            'edit' => Pages\EditArticles::route('/{record}/edit'),
        ];
    }
}
