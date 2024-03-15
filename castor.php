<?php

use Castor\Attribute\AsTask;
use Castor\Context;

use function Castor\run;

#[AsTask()]
function ansi_raw()
{
    `docker compose --ansi=always up -d`;
    `docker compose --ansi=always stop`;
}

#[AsTask()]
function ansi_false()
{
    $c = new Context(
        pty: false,
        tty: false,
    );
    run(['docker', 'compose', '--ansi=always', 'up', '-d'], context: $c);
    run(['docker', 'compose', '--ansi=always', 'stop'], context: $c);
}

#[AsTask()]
function ansi_pty()
{
    $c = new Context(
        pty: true,
        tty: false,
    );
    run(['docker', 'compose', '--ansi=always', 'up', '-d'], context: $c);
    run(['docker', 'compose', '--ansi=always', 'stop'], context: $c);
}

#[AsTask()]
function ansi_tty()
{
    $c = new Context(
        pty: false,
        tty: true,
    );
    run(['docker', 'compose', '--ansi=always', 'up', '-d'], context: $c);
    run(['docker', 'compose', '--ansi=always', 'stop'], context: $c);
}

#[AsTask()]
function no_ansi_raw()
{
    `docker compose --ansi=never up -d`;
    `docker compose --ansi=never stop`;
}


#[AsTask()]
function no_ansi_false()
{
    $c = new Context(
        pty: false,
        tty: false,
    );
    run(['docker', 'compose', '--ansi=never', 'up', '-d'], context: $c);
    run(['docker', 'compose', '--ansi=never', 'stop'], context: $c);
}

#[AsTask()]
function no_ansi_pty()
{
    $c = new Context(
        pty: true,
        tty: false,
    );
    run(['docker', 'compose', '--ansi=never', 'up', '-d'], context: $c);
    run(['docker', 'compose', '--ansi=never', 'stop'], context: $c);
}

#[AsTask()]
function no_ansi_tty()
{
    $c = new Context(
        pty: false,
        tty: true,
    );
    run(['docker', 'compose', '--ansi=never', 'up', '-d'], context: $c);
    run(['docker', 'compose', '--ansi=never', 'stop'], context: $c);
}
