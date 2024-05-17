<?php

use Filament\Pages\Auth\Login as BaseAuth;

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
}
