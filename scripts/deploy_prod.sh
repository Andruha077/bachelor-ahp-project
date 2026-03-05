#!/bin/bash

echo "Розгортання проєкту у production..."

PROJECT_DIR=/var/www/html

echo "Копіювання файлів..."

sudo cp ../index.html $PROJECT_DIR

echo "Перезапуск веб-сервера..."

sudo systemctl restart nginx

echo "Deployment завершено успішно."
