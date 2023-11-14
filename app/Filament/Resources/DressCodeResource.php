<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DressCodeResource\Pages;
use App\Filament\Resources\DressCodeResource\RelationManagers;
use App\Models\DressCode;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class DressCodeResource extends Resource
{
    protected static ?string $model = DressCode::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->label('Title')
                                    ->lazy()
                                    ->afterStateUpdated(function ($set, $state) {
                                        $slug = Str::slug($state);
                                        $set('slug', $slug);
                                    }),
                                TextInput::make('slug')
                                    ->unique(ignorable: fn ($record) => $record),
                                MarkdownEditor::make('description'),
                                FileUpload::make('image')
                                    ->label('thumbnail')
                                    ->image()
                                    ->required(),
                                FileUpload::make('images')
                                    ->image()
                                    ->multiple(),
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
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
            'index' => Pages\ListDressCodes::route('/'),
            'create' => Pages\CreateDressCode::route('/create'),
            'edit' => Pages\EditDressCode::route('/{record}/edit'),
        ];
    }
}
