# UniqueErrorMemes

A PHP application to display custom memes and error messages for HTTP status codes.

## Description

UniqueErrorMemes provides a light-hearted way to inform users about different HTTP status codes on your website. Instead of showing the standard error pages, it displays a meme along with a custom error message, making the error encounter a bit more enjoyable.

## Features

- Custom meme images for each HTTP status code (200, 400, 404, 500).
- Custom error messages for each HTTP status code.
- Easy integration with `.htaccess` for seamless error handling.

## How to Use

1. **Place Memes**: Put your meme images in a directory on your server. Name them according to the status codes (`200.jpg`, `400.jpg`, `404.jpg`, `500.jpg`).

2. **Configure `.htaccess`**: Redirect HTTP status codes to `custom_error.php` using the `.htaccess` file.

    ```apache
    ErrorDocument 200 /custom_error.php
    ErrorDocument 400 /custom_error.php
    ErrorDocument 404 /custom_error.php
    ErrorDocument 500 /custom_error.php
    ```

3. **Set Up `custom_error.php`**: Place `custom_error.php` in your website's root directory. Customize the script according to your meme directory path.

4. **Enjoy**: Navigate to a page that triggers one of the specified error codes and enjoy your custom error page!

## Contributions

Feel free to fork this project and submit pull requests for additional features or improvements. Let's make web errors a little less frustrating and a bit more fun!

## License

This project is open-source and available under the [MIT License](LICENSE).
