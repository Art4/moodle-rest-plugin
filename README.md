# Moodle REST Plugin

This project is just a test to create a simple plugin for Moodle that can response to a REST request.

## Setup Moodle

Clone Moodle and checkout the Moodle version you like

```bash
git clone https://github.com/moodle/moodle.git
cp config.php moodle/config.php
cd moodle
git checkout v4.3.0
cd ..
```

## Run Moodle

To start moodle run:

```bash
docker compose up -d
```

To stop moodle run:

```bash
docker compose down
```
