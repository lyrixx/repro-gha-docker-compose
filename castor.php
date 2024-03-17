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
        environment: gen_env(),
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
        environment: gen_env(),
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
        environment: gen_env(),
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
        environment: gen_env(),
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
        environment: gen_env(),
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
        environment: gen_env(),
        pty: false,
        tty: true,
    );
    run(['docker', 'compose', '--ansi=never', 'up', '-d'], context: $c);
    run(['docker', 'compose', '--ansi=never', 'stop'], context: $c);
}


function gen_env():array
{
    return [
        'SELENIUM_JAR_PATH' => '/usr/share/java/selenium-server.jar',
        'CONDA' => '/usr/share/miniconda',
        'GITHUB_WORKSPACE' => '/home/runner/work/repro-gha-docker-compose/repro-gha-docker-compose',
        'JAVA_HOME_11_X64' => '/usr/lib/jvm/temurin-11-jdk-amd64',
        'COMPOSER_NO_INTERACTION' => '1',
        'GITHUB_PATH' => '/home/runner/work/_temp/_runner_file_commands/add_path_d4ea3778-c0ee-44f2-8dd1-f3b07e82bd85',
        'GITHUB_ACTION' => '__run',
        'JAVA_HOME' => '/usr/lib/jvm/temurin-11-jdk-amd64',
        'GITHUB_RUN_NUMBER' => '12',
        'RUNNER_NAME' => 'GitHub Actions 8',
        'GRADLE_HOME' => '/usr/share/gradle-8.6',
        'GITHUB_REPOSITORY_OWNER_ID' => '408368',
        'ACTIONS_RUNNER_ACTION_ARCHIVE_CACHE' => '/opt/actionarchivecache',
        'XDG_CONFIG_HOME' => '/home/runner/.config',
        'DOTNET_SKIP_FIRST_TIME_EXPERIENCE' => '1',
        'SGX_AESM_ADDR' => '1',
        'GITHUB_RUN_ATTEMPT' => '1',
        'STATS_RDCL' => 'true',
        'ANDROID_HOME' => '/usr/local/lib/android/sdk',
        'GITHUB_GRAPHQL_URL' => 'https://api.github.com/graphql',
        'ACCEPT_EULA' => 'Y',
        'RUNNER_USER' => 'runner',
        'STATS_UE' => 'true',
        'USER' => 'runner',
        'GITHUB_SERVER_URL' => 'https://github.com',
        'STATS_V3PS' => 'true',
        'PIPX_HOME' => '/opt/pipx',
        'GECKOWEBDRIVER' => '/usr/local/share/gecko_driver',
        'STATS_EXT' => 'true',
        'CHROMEWEBDRIVER' => '/usr/local/share/chromedriver-linux64',
        'SHLVL' => '1',
        'ANDROID_SDK_ROOT' => '/usr/local/lib/android/sdk',
        'VCPKG_INSTALLATION_ROOT' => '/usr/local/share/vcpkg',
        'GITHUB_ACTOR_ID' => '408368',
        'RUNNER_TOOL_CACHE' => '/opt/hostedtoolcache',
        'ImageVersion' => '20240310.1.0',
        'DOTNET_NOLOGO' => '1',
        'GITHUB_WORKFLOW_SHA' => 'd0b9c16452d878374ccd61c1adfc7b55ec3d1518',
        'GITHUB_REF_NAME' => 'main',
        'GITHUB_JOB' => 'castor',
        'XDG_RUNTIME_DIR' => '/run/user/1001',
        'AZURE_EXTENSION_DIR' => '/opt/az/azcliextensions',
        'PERFLOG_LOCATION_SETTING' => 'RUNNER_PERFLOG',
        'GITHUB_REPOSITORY' => 'lyrixx/repro-gha-docker-compose',
        'ANDROID_NDK_ROOT' => '/usr/local/lib/android/sdk/ndk/25.2.9519653',
        'CHROME_BIN' => '/usr/bin/google-chrome',
        'GOROOT_1_22_X64' => '/opt/hostedtoolcache/go/1.22.1/x64',
        'GITHUB_RETENTION_DAYS' => '90',
        'JOURNAL_STREAM' => '8:18732',
        'RUNNER_WORKSPACE' => '/home/runner/work/repro-gha-docker-compose',
        'LEIN_HOME' => '/usr/local/lib/lein',
        'LEIN_JAR' => '/usr/local/lib/lein/self-installs/leiningen-2.11.2-standalone.jar',
        'GITHUB_ACTION_REPOSITORY' => '',
        'COMPOSER_NO_AUDIT' => '1',
        'PATH' => '/home/runner/.composer/vendor/bin:/snap/bin:/home/runner/.local/bin:/opt/pipx_bin:/home/runner/.cargo/bin:/home/runner/.config/composer/vendor/bin:/usr/local/.ghcup/bin:/home/runner/.dotnet/tools:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin',
        'RUNNER_PERFLOG' => '/home/runner/perflog',
        'GITHUB_BASE_REF' => '',
        'GHCUP_INSTALL_BASE_PREFIX' => '/usr/local',
        'CI' => 'true',
        'SWIFT_PATH' => '/usr/share/swift/usr/bin',
        'ImageOS' => 'ubuntu22',
        'GITHUB_REPOSITORY_OWNER' => 'lyrixx',
        'GITHUB_HEAD_REF' => '',
        'GITHUB_ACTION_REF' => '',
        'GITHUB_WORKFLOW' => 'CI',
        'DEBIAN_FRONTEND' => 'noninteractive',
        'GITHUB_OUTPUT' => '/home/runner/work/_temp/_runner_file_commands/set_output_d4ea3778-c0ee-44f2-8dd1-f3b07e82bd85',
        'AGENT_TOOLSDIRECTORY' => '/opt/hostedtoolcache',
    ];
}
