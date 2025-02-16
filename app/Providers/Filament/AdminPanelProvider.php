<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Facades\Filament;
use Filament\Support\Colors\Color;
use Spatie\Permission\Models\Role;
use Filament\Widgets\AccountWidget;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\TrackVisitors;
use App\Http\Middleware\RoleMiddleware;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationGroup;
use Filament\Widgets\FilamentInfoWidget;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use App\Http\Middleware\PermissionMiddleware;
use App\Filament\Admin\Resources\UserResource;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use App\Filament\Admin\Resources\ArtikelResource;
use App\Filament\Admin\Resources\LayananResource;
use Filament\Http\Middleware\AuthenticateSession;
use App\Filament\Admin\Resources\OrganizerResource;
use App\Http\Middleware\RoleOrPermissionMiddleware;
use App\Filament\Admin\Resources\RecruitmentResource;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use App\Filament\Admin\Resources\ClientCounselerResource;
use App\Filament\Admin\Resources\JadwalCounselerResource;
use App\Filament\Admin\Resources\JadwalCounselorResource;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use App\Filament\Admin\Widgets\ArtikelChart;
use App\Filament\Admin\Widgets\StatsOverview;
use App\Filament\Admin\Widgets\VisitorChart;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('admin')
            ->login()
            ->registration()
            ->passwordReset()
            ->emailVerification()
            ->profile()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Admin/Resources'), for: 'App\\Filament\\Admin\\Resources')
            ->discoverPages(in: app_path('Filament/Admin/Pages'), for: 'App\\Filament\\Admin\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->plugins([
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make(),
            ])
            ->widgets([
                StatsOverview::class,
                ArtikelChart::class,
                VisitorChart::class,
            ])
            ->navigationitems([])
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
                // PermissionMiddleware::class,
                // RoleMiddleware::class,
                // RoleOrPermissionMiddleware::class,
            ])
            // ->resources([
            //     UserResource::class,
            //     ArtikelResource::class,
            //     ClientCounselerResource::class,
            //     JadwalCounselorResource::class,
            //     LayananResource::class,
            //     OrganizerResource::class,
            //     RecruitmentResource::class,
            // ])
            ->brandName('Open Your Mind Indonesia')
            ->favicon(asset('images/Logo.svg'))
            ->authMiddleware([
                Authenticate::class,
                // RoleMiddleware::class,
                // PermissionMiddleware::class,
            ]);
    }
}
