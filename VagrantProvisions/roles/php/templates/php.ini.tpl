[PHP]
engine = On
short_open_tag = Off
precision = 14
output_buffering = 4096
implicit_flush = Off
unserialize_callback_func =
; When floats & doubles are serialized store serialize_precision significant
; digits after the floating point. The default value ensures that when floats
; are decoded with unserialize, the data will remain the same.
serialize_precision = 17
; This directive allows you to disable certain functions for security reasons.
; It receives a comma-delimited list of function names.
; http://php.net/disable-functions
disable_functions =
; This directive allows you to disable certain classes for security reasons.
; It receives a comma-delimited list of class names.
; http://php.net/disable-classes
disable_classes =
zend.enable_gc = On
expose_php = Off
max_execution_time = 30
max_input_time = 60
memory_limit = 128M
error_reporting = E_ALL
display_errors = On
display_startup_errors = On
log_errors = On
log_errors_max_len = 1024
ignore_repeated_errors = Off
ignore_repeated_source = Off
report_memleaks = On
track_errors = On
html_errors = On
variables_order = "GPCS"
request_order = "GP"
register_argc_argv = Off
auto_globals_jit = On
post_max_size = 8M
auto_prepend_file =
auto_append_file =
default_mimetype = "text/html"
default_charset = "UTF-8"
doc_root =
user_dir =
enable_dl = Off
file_uploads = On
upload_max_filesize = 2M
max_file_uploads = 20
allow_url_fopen = On
allow_url_include = Off
default_socket_timeout = 60

[Session]
session.auto_start               = 0
session.cache_expire             = 180
session.cache_limiter            = "nocache"
session.cookie_domain            = ".dev.phpwarks"
session.cookie_httponly          = 0
session.cookie_lifetime          = 0
session.cookie_path              = "/"
session.cookie_secure            = 0
session.entropy_file             = "/dev/urandom"
session.entropy_length           = 32
session.gc_divisor               = 100
session.gc_maxlifetime           = 1440
session.gc_probability           = 1
session.hash_bits_per_character  = 4
session.hash_function            = 0
session.lazy_write               = 1
session.name                     = "phpwarks"
session.referer_check            = ""
session.save_handler             = "files"
session.save_path                = "/var/tmp"
session.serialize_handler        = "php"
session.upload_progress.cleanup  = 1
session.upload_progress.enabled  = 1
session.upload_progress.freq     = "1%"
session.upload_progress.min_freq = 1
session.upload_progress.name     = "PHP_SESSION_UPLOAD_PROGRESS"
session.upload_progress.prefix   = "upload_progress_"
session.use_cookies              = 1
session.use_only_cookies         = 1
session.use_strict_mode          = 0
session.use_trans_sid            = 0

[CLI Server]
cli_server.color = On

[Date]
date.timezone = "Europe/London"

[Pdo]
;pdo_odbc.connection_pooling=strict
;pdo_odbc.db2_instance_name

[Pdo_mysql]
pdo_mysql.cache_size = 2000
pdo_mysql.default_socket=

[opcache]

opcache.memory_consumption=128
opcache.interned_strings_buffer=8
opcache.max_accelerated_files=4000
opcache.revalidate_freq=60
opcache.fast_shutdown=1
opcache.enable_cli=1

; zend_extension=/usr/local/lib/php/extensions/debug-zts-20151012/opcache.so

[x-debug]

xdebug.remote_enable=on
xdebug.remote_host="{{ host_ip | replace("\n","") }}"
xdebug.idekey="PHPSTORM"
xdebug.remote_log=/tmp/xdebug.log

zend_extension=/usr/local/lib/php/extensions/debug-zts-20151012/xdebug.so
