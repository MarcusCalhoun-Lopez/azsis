<?php
declare(strict_types=1);
namespace AzSIS\Db;

final class Db {
    public static function handler(bool $canWrite = false): \PDO {
        [$user, $password] = $canWrite ? self::admin_user() : self::reader_user();

        $tz = self::time_zone();
        if( !in_array($tz, \DateTimeZone::listIdentifiers()) )
            throw new \RuntimeException("Timezone {$tz} is Invalid");

        // See https://www.php.net/manual/en/pdo.setattribute.php
        // https://mariadb.com/kb/en/sql-mode/#traditional but *without* STRICT_ALL_TABLES, NO_AUTO_CREATE_USER
        $options = [
            \PDO\Mysql::ATTR_EMULATE_PREPARES   => false,
            \PDO\Mysql::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO\Mysql::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO\Mysql::ATTR_INIT_COMMAND       => "SET sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION'; SET time_zone = '{$tz}'",
        ];

        return new \PDO(self::server(), $user, $password, $options);
    }

    public static function time_zone(): string {
        $ret = getenv('AZSIS_TIME_ZONE');
        if( $ret === false )
            throw new \RuntimeException('Timezone Not Found');
        return $ret;
    }

    // Get current academic year.
    public static function current_year(\PDO $dbh): int {
        $sth = $dbh->query('SELECT MAX(SchoolCalendars.AcademicYear) AS CurrentYear FROM `SchoolCalendars`');
        $allAcacemicYears = $sth->fetchAll(\PDO::FETCH_ASSOC);
        if( count($allAcacemicYears) !== 1 )
            throw new \RuntimeException('Cannot Determine Current Year');
        return $allAcacemicYears[0]['CurrentYear'];
    }

    // Get current academic year.
    public static function academic_year(\PDO $dbh): int {
        if( isset($_SESSION['AcademicYear']) && is_int($_SESSION['AcademicYear']) )
            // User has set the current academic year.
            return $_SESSION['AcademicYear'];
        else
            // Return the current academic year.
            return self::current_year($dbh);
    }

    private static function server(): string {
        $ret = getenv('AZSIS_SQL_SERVER');
        if( $ret === false )
            throw new \RuntimeException('SQL Server Not Found');
        return $ret;
    }

    private static function admin_user(): array {
        $ret1 = getenv('AZSIS_SQL_ADMIN_USER');
        if( $ret1 === false )
            throw new \RuntimeException('SQL Admin User Not Found');
        $ret2 = getenv('AZSIS_SQL_ADMIN_PASS');
        if( $ret2 === false )
            throw new \RuntimeException('SQL Admin Password Not Found');
        return [$ret1, $ret2];
    }

    private static function reader_user(): array {
        $ret1 = getenv('AZSIS_SQL_READER_USER');
        if( $ret1 === false )
            throw new \RuntimeException('SQL Reader User Not Found');
        $ret2 = getenv('AZSIS_SQL_READER_PASS');
        if( $ret2 === false )
            throw new \RuntimeException('SQL Reader Password Not Found');
        return [$ret1, $ret2];
    }
}
