<?php

namespace App\Filament\Resources\NewsItemResource\Pages;

use App\Filament\Resources\NewsItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsItem extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = NewsItemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
