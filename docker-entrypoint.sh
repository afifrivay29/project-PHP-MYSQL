
#!/bin/bash
set -e

# Nonaktifkan MPM yang berpotensi konflik
a2dismod mpm_event 2>/dev/null || true
a2dismod mpm_worker 2>/dev/null || true

# Pastikan PHP mod_php menggunakan prefork
a2enmod mpm_prefork

# Validasi konfigurasi sebelum Apache berjalan
apache2ctl configtest

# Jalankan Apache di foreground
exec apache2-foreground

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /usr/local/bin/docker-entrypoint.sh

CMD ["/usr/local/bin/docker-entrypoint.sh"]
