# PHP Book Scraper

This PHP project is designed to scrape book information from the website (https://books.toscrape.com/).

## Overview

The PHP Book Scraper utilizes GuzzleHttp for making HTTP requests and DOMDocument with DOMXPath for parsing HTML content. It fetches book titles and prices from the specified website and prints them to the console.

## Requirements

- PHP >= 5.5
- Composer (for installing GuzzleHttp)

## Installation

1. Clone this repository:

    ```bash
    git clone (https://github.com/lucasnotini/book-scraper.git)
    ```

2. Navigate to the project directory:

    ```bash
    cd php-book-scraper
    ```

3. Install dependencies using Composer:

    ```bash
    composer install
    ```

## Usage

1. Run the `guzzle_requests.php` script:

    ```bash
    php guzzle_requests.php
    ```

2. The script will make a GET request to [https://books.toscrape.com/](https://books.toscrape.com/), scrape the book titles and prices, and print them to the console.

## Example Output

The output will resemble the following format:

Title 1 @ $10.99
Title 2 @ $15.99
Title 3 @ $8.99

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve this project.

## Credits

This PHP Book Scraper was developed by Lucas Notini, inspired by the excelent freecodecamp.org PHP scraping tutorial (https://www.freecodecamp.org/news/web-scraping-with-php-crawl-web-pages/)
