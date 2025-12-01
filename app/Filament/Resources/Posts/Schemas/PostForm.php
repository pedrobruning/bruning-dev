<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Translations')
                    ->tabs([
                        Tabs\Tab::make('English')
                            ->schema([
                                TextInput::make('title.en')
                                    ->label('Title')
                                    ->required(),
                                TextInput::make('slug.en')
                                    ->label('Slug')
                                    ->required(),
                                Textarea::make('excerpt.en')
                                    ->label('Excerpt')
                                    ->rows(3),
                                RichEditor::make('content.en')
                                    ->label('Content')
                                    ->fileAttachmentsDirectory('posts'),
                            ]),
                        Tabs\Tab::make('Portuguese')
                            ->schema([
                                TextInput::make('title.pt')
                                    ->label('Title (PT)'),
                                TextInput::make('slug.pt')
                                    ->label('Slug (PT)'),
                                Textarea::make('excerpt.pt')
                                    ->label('Excerpt (PT)')
                                    ->rows(3),
                                RichEditor::make('content.pt')
                                    ->label('Content (PT)')
                                    ->fileAttachmentsDirectory('posts'),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Settings')
                    ->schema([
                        DateTimePicker::make('published_at'),
                        FileUpload::make('image')
                            ->image()
                            ->directory('posts/thumbnails'),
                        Toggle::make('is_active')
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}
