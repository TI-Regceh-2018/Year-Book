# Our Yearbook

Welcome to our year-book repository. It will be implemented as well as our design on figma.

## Getting Started

### Prerequisites

-   [PHP.8.1](https://www.php.net/releases/8.1/en.php)
-   [MySQL](https://www.apachefriends.org/download.html)
-   [Composer](https://getcomposer.org/download/)
-   [NodeJS](https://nodejs.org/en/)

### Installation

-   Clone the git repository:

```
$ git clone https://github.com/TI-Regceh-2018/Year-Book.git
$ cd year-book
```

-   Install Dependencies

```
$ npm install
$ composer install
```

-   What's We Need To Install in Our VSCode (Extension)
    --- Prettier
    --- PHP Intelephense (v.1.2.3)
    --- PHP Intellisense
    --- PHP Debug
    --- Material Icon Theme
    --- Laravel GoTo View
    --- Laravel Extra Intellisense
    --- Laravel Blade Snippets
    --- Laravel Blade Spacer
    --- Laravel Blade
    --- Laravel Artisan
    --- IntelliCode
    --- Intellisense for CSS
    --- HTML CSS Support

### Set the environment

```
$ cp .env.example .env
$ php artisan key:generate
```

###### \* We need to set our database name on `.env` as well.

### Running

```
$ npm run dev
$ php artisan serve
```

## Git Flow

1. Open Jira and take the ticket.
2. Create a branch with name as same as our ticket number.
3. Do the development.
4. Commit and push to our branch.
5. Open Pull Request to `master` branch.
