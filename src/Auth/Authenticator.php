<?php
declare(strict_types=1);
namespace AzSIS\Auth;

interface Authenticator {
    // Authenticator is ready to provide information.
    public function is_logged_in(): bool;

    // Get redirection URL for password verification service.
    public function redirect_url(): string;

    // Initialize data from verification service.
    public function initialize(): void;

    // Get staff ID and privileges.
    public function staff_id(\PDO $dbh): array;

    // Get student ID.
    public function student_id(\PDO $dbh): ?int;

    // Get Adult ID.
    public function adult_id(\PDO $dbh): ?int;

    // Get URL for user picture from verification service.
    public function picture_url(): string;

    // Get user name from verification sercie.
    public function display_name(): string;
}

