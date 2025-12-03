<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
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
                                Textarea::make('description.en')
                                    ->label('Description')
                                    ->rows(3),
                                MarkdownEditor::make('content.en')
                                    ->label('Content')
                                    ->fileAttachmentsDirectory('projects')
                                    ->columnSpanFull()
                                    ->extraAttributes(['style' => 'min-height: 500px']),
                            ]),
                        Tabs\Tab::make('Portuguese')
                            ->schema([
                                TextInput::make('title.pt-BR')
                                    ->label('Title (PT)'),
                                TextInput::make('slug.pt-BR')
                                    ->label('Slug (PT)'),
                                Textarea::make('description.pt-BR')
                                    ->label('Description (PT)')
                                    ->rows(5),
                                MarkdownEditor::make('content.pt-BR')
                                    ->label('Content (PT)')
                                    ->fileAttachmentsDirectory('projects')
                                    ->columnSpanFull()
                                    ->extraAttributes(['style' => 'min-height: 500px']),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Settings')
                    ->schema([
                        TextInput::make('url')
                            ->label('Project URL')
                            ->url()
                            ->prefixIcon('heroicon-o-globe-alt'),
                        TextInput::make('github_url')
                            ->label('GitHub URL')
                            ->url()
                            ->prefixIcon('heroicon-o-code-bracket'),
                        FileUpload::make('thumbnail')
                            ->image()
                            ->directory('projects/thumbnails'),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}
