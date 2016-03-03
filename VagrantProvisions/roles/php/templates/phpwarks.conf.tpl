[www]
user = nobody
; group = nobody

listen = 127.0.0.1:9000

pm = dynamic

; Default Value: min_spare_servers + (max_spare_servers - min_spare_servers) / 2
pm.max_children = 5
pm.start_servers = 2
pm.min_spare_servers = 1
pm.max_spare_servers = 3

pm.status_path = /status
ping.path = /ping
ping.response = pong

access.log = log/$pool.access.log
