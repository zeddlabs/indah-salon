<?php

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets;

class Dashboard extends BaseDashboard
{
  protected static ?string $title = 'Dashboard';
  protected static ?string $navigationLabel = 'Dashboard';

  public function getWidgets(): array
  {
    return [
      Widgets\AccountWidget::class,
    ];
  }
}
