# Use official PHP CLI image
FROM php:8.2-cli

# Install SQLite3 and enable PHP extensions
RUN apt-get update && apt-get install -y \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-configure pdo_sqlite \
    && docker-php-ext-install pdo_sqlite


# Set the working directory
WORKDIR /app

# Copy project files into the container
COPY . /app

# Copy php.ini to the correct location
COPY php.ini /usr/local/etc/php/php.ini

# Ensure SQLite database has correct permissions
RUN chmod -R 775 /app/database && chown -R www-data:www-data /app/database

# Expose port 8000 for the PHP server
EXPOSE 8000

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "Public"]
