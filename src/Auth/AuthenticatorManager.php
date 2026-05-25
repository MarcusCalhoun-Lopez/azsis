<?php
declare(strict_types=1);
namespace AzSIS\Auth;

final class AuthenticatorManager {
    public static function authenticator(): Authenticator {
        return new GoogleAuthenticator();
    }
}

