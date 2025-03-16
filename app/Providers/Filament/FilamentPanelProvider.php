<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use App\Filament\Pages\Auth\Register;
use App\Http\Middleware\TrackVisitors;
use Filament\Http\Middleware\Authenticate;
use App\Filament\Admin\Resources\UserResource;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use App\Filament\Admin\Resources\ArtikelResource;
use App\Filament\Admin\Resources\LayananResource;
use Filament\Http\Middleware\AuthenticateSession;
use App\Filament\Admin\Resources\OrganizerResource;
use App\Filament\Admin\Resources\RecruitmentResource;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use App\Filament\Admin\Resources\ClientCounselerResource;
use App\Filament\Admin\Resources\JadwalCounselorResource;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;

class FilamentPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('filament')
            ->path('filament')
            ->login()
            // ->registration()
            ->passwordReset()
            ->emailVerification()
            ->profile()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                TrackVisitors::class,
            ])
            ->resources([
                UserResource::class,
                ArtikelResource::class,
                ClientCounselerResource::class,
                JadwalCounselorResource::class,
                LayananResource::class,
                OrganizerResource::class,
                RecruitmentResource::class,
            ])
            ->brandName('Open Your Mind')
            ->brandLogo(asset('images/logo.svg'))
            ->favicon(asset('images/logo.svg'))
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make(),
            ]);
    }
}
