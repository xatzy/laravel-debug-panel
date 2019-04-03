# laravel-debug-panel
A simple debug panel written in pure PHP with laravel, printing SQL queries and request input informations.

# How it works

Uses a middleware to attach request data and SQL queries to the request, if debug is set to true in the .env file.
Then displays that data through a simple dd() call in a footer that, which be simply toggled with a button.

# Setting-up

Clone the repository - it is equivalent to a new laravel 5.8 install with only the addition of the debug bar.
To enable within blade templates, add @extends('debugger.debugger').


# Example output

After filling a simple login form, with APP_DEBUG=true in .env file:

![description](media/sample_image.png)
