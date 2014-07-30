<?php
$migration_conf = array(
      'dsn' => 'pgsql://postgres:123@192.254.56.102:5432/shoptst?charset=utf8',
      'schema' => DB_MIGRATION_ROOT . '/sql/schema.sql',
      'data' => DB_MIGRATION_ROOT . '/sql/data.sql',
      'migrations' => DB_MIGRATION_ROOT . '/sql/migrations/',
      );
