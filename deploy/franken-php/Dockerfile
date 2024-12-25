FROM dunglas/frankenphp

# Or developement:
RUN cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

WORKDIR /app/public
COPY . /app/public
COPY Caddyfile /etc/caddy/Caddyfile

# FROM dunglas/frankenphp:1.0.0-beta.2-bookworm

# RUN echo "variables_order = \"EGPCS\"" >> $PHP_INI_DIR/conf.d/990-php.ini

# WORKDIR /app/public

# COPY . /app/public
# COPY Caddyfile /etc/caddy/Caddyfile
