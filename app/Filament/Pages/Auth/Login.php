<?php

use Filament\Actions\Action;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Login as BaseAuth;
use Illuminate\Contracts\Support\Htmlable;

class Login extends BaseAuth
{
  protected function getForms(): array
  {
    return [
      'form' => $this->form(
        $this->makeForm()
          ->schema([
            $this->getEmailFormComponent(),
            $this->getPasswordFormComponent(),
          ])
          ->statePath('data'),
      ),
    ];
  }

  protected function getEmailFormComponent(): Component
  {
    return TextInput::make('email')
      ->label('Email')
      ->email()
      ->required()
      ->autocomplete()
      ->autofocus()
      ->extraInputAttributes(['tabindex' => 1]);
  }

  public function getHeading(): string | Htmlable
  {
    return 'Masuk';
  }

  protected function getAuthenticateFormAction(): Action
  {
    return Action::make('authenticate')
      ->label('Masuk')
      ->submit('authenticate');
  }
}
