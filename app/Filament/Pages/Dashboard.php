<?php

use App\Filament\Widgets;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
  protected static ?string $title = 'Dashboard';
  protected static ?string $navigationLabel = 'Dashboard';

  public function getWidgets(): array
  {
    return [
      Widgets\StatsOverview::class,
      Widgets\PenjualanChart::class,
      Widgets\PerawatanChart::class,
    ];
  }
}
