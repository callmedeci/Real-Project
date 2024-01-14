<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectsResource\Pages;
use App\Filament\Resources\ProjectsResource\RelationManagers;
use App\Models\Projects;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\View\View;
use PhpParser\Lexer\TokenEmulator\FlexibleDocStringEmulator;

Filament::serving(function () {
    Filament::registerNavigationItems([
        NavigationItem::make('About me')
            ->url(route('home'), shouldOpenInNewTab: true)
            ->icon('heroicon-m-folder-open')
            ->group('Projects')
            ->sort(3),
        ]);
});

Filament::serving(function () {
    Filament::registerNavigationItems([
        NavigationItem::make('Play with JS')
            ->url(route('index-js'), shouldOpenInNewTab: true)
            ->icon('heroicon-o-bug-ant')
            ->group('Projects')
            ->sort(3),
    ]);
});

Filament::serving(function () {
    Filament::registerNavigationItems([
        NavigationItem::make('Roocket')
            ->url(route('roocket'), shouldOpenInNewTab: true)
            ->icon('heroicon-o-credit-card')
            ->group('Projects')
            ->sort(3),
    ]);
});
class ProjectsResource extends Resource
{

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'description', 'created_by'];
    }
    public static function getGlobalSearchResultTitle(Model $record): string
    {
        return $record->name . " created by " . $record->created_by;
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'name' => $record->name,
        ];
    }
    protected static ?string $model = Projects::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make()
                    ->icon('heroicon-o-inbox-arrow-down')
                    ->heading('Fill The form')
                    ->description('Enter your Resume Information')
                    ->columns(2)
                    ->schema(
                    [
                        Forms\Components\FileUpload::make('picture')
                            //->imageEditorMode(2) // Setting the image editor's mode
                            //->imageEditorEmptyFillColor('#000000') // Customizing the image editor's empty fill color
//                            ->avatar() // Avatar mode
                            ->required()
                            ->alignCenter()
                            ->columnSpanFull()
                            ->preserveFilenames() // To preserve the original filenames of the uploaded files, use the preserveFilenames()
                            ->image() // Enable image editor, image() method as shorthand to allow all image MIME types.
                            ->imageEditor() // Image editor
                            ->imageEditorAspectRatios(['200:200']) // Allowing users to crop images to aspect ratios
                            ->imageEditorViewportWidth('1920') // Setting the image editor's viewport size
                            ->imageEditorViewportHeight('1080'), // Setting the image editor's viewport size

                        Forms\Components\TextInput::make('name')
                            ->columnSpan(2)
                            ->required()
                            ->string(),

                        Forms\Components\TextInput::make('created_by')
                            ->columnSpan(2)
                            ->required()
                            ->string(),

                        Forms\Components\Textarea::make('description')
                            ->columnSpan(2)
                            ->string()
                            ->nullable()
                            ->autosize(),

                        Forms\Components\Toggle::make('has_DarkMode')
                            ->required()
                            ->onIcon('heroicon-s-check-circle')
                            ->offIcon('heroicon-m-no-symbol')
                            ->offColor('danger')
                            ->onColor('primary')
                            ->inline(),

                        Forms\Components\Toggle::make('is_Responsive')
                            ->required()
                            ->onIcon('heroicon-s-check-circle')
                            ->offIcon('heroicon-m-no-symbol')
                            ->offColor('danger')
                            ->onColor('primary'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->searchable()
                    ->label('Since')
                    ->sortable()
                    ->since(),

                Tables\Columns\TextColumn::make('created_by')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\IconColumn::make('has_DarkMode')
                    ->alignCenter()
                    ->label('Has darkMode ?')
                    ->searchable()
                    ->sortable()
                    ->boolean(),

                Tables\Columns\IconColumn::make('is_Responsive')
                    ->alignCenter()
                    ->sortable()
                    ->searchable()
                    ->label('Is Responsive ?')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProjects::route('/create'),
            'edit' => Pages\EditProjects::route('/{record}/edit'),
        ];
    }
}
