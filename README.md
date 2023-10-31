# Moodle REST Plugin

This project is just a test to create a simple plugin for Moodle that can response to a REST request.

## Setup Moodle

Clone Moodle and checkout the Moodle version you like

```bash
git clone https://github.com/moodle/moodle.git --branch MOODLE_402_STABLE
cp config.php moodle/config.php
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
