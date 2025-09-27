# ARCADIA — Design Generator (PHP + MySQL + GPT-4)

## Overview

ARCADIA is a **web application** built with **PHP** and **MySQL** that allows users to generate design suggestions, UI components, or starter code by simply entering a text prompt. The app integrates with **GPT-4** to accelerate the design and prototyping process for developers and designers.

## Features

* User input prompt to describe desired design or component.
* GPT-4 integration to return ready-to-use HTML/CSS or UI design suggestions.
* Database (MySQL) storage of prompts and results for later reference.
* Dashboard to review previous generations.
* Simple and responsive interface for an easy workflow.

## Requirements

* PHP 7.4+
* MySQL (or XAMPP for local development)
* OpenAI GPT-4 API key (not included in repository)

## Installation (Local with XAMPP)

1. Place the project folder into your `htdocs` directory in XAMPP.
2. Start **Apache** and **MySQL** from the XAMPP control panel.
3. Open phpMyAdmin, create a new database (e.g., `arcadia_db`), and import `database.sql`.
4. Configure your environment by adding a `.env` or `config.php` file with:

   ```
   DB_HOST=localhost
   DB_NAME=arcadia_db
   DB_USER=root
   DB_PASS=
   OPENAI_API_KEY=your_api_key_here
   ```

   > **Do not commit your API key to GitHub.**
5. Open your browser and go to `http://localhost/arcadia`.

## Demo / Screenshots

Include screenshots in the `screenshots/` folder, such as:

* `screenshots/home.png`
* `screenshots/generate_result.png`
* `screenshots/dashboard.png`

## Tech Stack

* **Backend**: PHP, MySQL
* **Frontend**: HTML, CSS, JavaScript
* **AI Integration**: OpenAI GPT-4 API
* **Local Server**: XAMPP

## Notes

* Keep your API key secure using environment variables.
* Validate and sanitize all user inputs to prevent injection attacks.
* Implement rate limiting or error handling for API requests to avoid overuse.

## License

This project is released under the MIT License.
