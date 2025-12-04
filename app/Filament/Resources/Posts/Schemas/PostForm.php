<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
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
                                MarkdownEditor::make('content.en')
                                    ->label('Content')
                                    ->fileAttachmentsDirectory('posts')
                                    ->columnSpanFull()
                                    ->extraAttributes(['style' => 'min-height: 500px']),
                            ]),
                        Tabs\Tab::make('Portuguese')
                            ->schema([
                                TextInput::make('title.pt-BR')
                                    ->label('Title (PT)')
                                    ->required(),
                                TextInput::make('slug.pt-BR')
                                    ->label('Slug (PT)')
                                    ->required(),
                                Textarea::make('excerpt.pt-BR')
                                    ->label('Excerpt (PT)')
                                    ->rows(5),
                                MarkdownEditor::make('content.pt-BR')
                                    ->label('Content (PT)')
                                    ->fileAttachmentsDirectory('posts')
                                    ->columnSpanFull()
                                    ->extraAttributes(['style' => 'min-height: 500px']),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Settings')
                    ->schema([
                        DateTimePicker::make('published_at'),
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('posts/thumbnails'),
                        Toggle::make('is_active')
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}
