# Log Library

## Installation:
Add the code snippets to the application root `composer.json` file and run `composer udpate`

    "repositories": {
        "pory-logs": {
            "type": "path",
            "url" : "arabhossain/pory-logs",
            "options": {
                "symlink": true
            }
        }
    }

place it and update to the `.env` file

    #Logs Library
    LOG_DB_CONNECTION=mysql
    LOG_DB_HOST=127.0.0.1
    LOG_DB_PORT=3306
    LOG_DB_DATABASE=pory_logs
    LOG_DB_USERNAME=root
    LOG_DB_PASSWORD=arabrmc148
