<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\NewsItem;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Faker\Provider\ar_SA\Text;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\NewsItemResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsItemResource\RelationManagers;

class NewsItemResource extends Resource
{
    use Translatable;

    protected static ?string $model = NewsItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name'),
//                        RichEditor::make('body'),
                    ])
//                    ->inlineLabel()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
//                BooleanColumn::make('is_published')
//                    ->label('Is Published?')
//                    ->getStateUsing(fn($record) => filled($record->published_at) ? true : false)
//                    ->trueIcon('heroicon-o-badge-check')
//                    ->falseIcon('heroicon-o-x-circle')
//                    ->trueColor('success')
//                    ->falseColor('warning'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNewsItems::route('/'),
            'create' => Pages\CreateNewsItem::route('/create'),
            'view' => Pages\ViewNewsItem::route('/{record}'),
            'edit' => Pages\EditNewsItem::route('/{record}/edit'),
        ];
    }
}
