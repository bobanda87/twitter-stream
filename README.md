### Tweets Stream API processor

This project is used for collecting tweets for specified hashtags. 

The intention is that the project populates our database with tweets that are streamed via Tweets Stream API.

The returned tweets are parsed and saved into the database.

The other application `https://github.com/bobanda87/twitter-stream-app` is a frontend application that shows the latest tweets using Pusher (without page reload).

### Instructions

### Local setup

1. Copy `.env.example` to `.env`
1. Create a new database and enter credentials in `.env` file
1. Run migrations `php artisan migrate`
1. Run seeds `php artisan db:seed`
1. Install static files `npm install`
1. Generate static files `npm run dev`
1. Run local server `php artisan serve` 

### Running locally

1. Configure hashtags in Config table
1. Start frontend application (following instructions here `https://github.com/bobanda87/twitter-stream-app`)
1. Navigate to `http://127.0.0.1:8000/tweets-process` to start tweets collecting process
1. Check if you can see new tweets in the Frontend application 

### Notices / Assumptions

* No UI is provided as a part of this project
* The main purpose of this system is to fetch the data from Twitter via Twitter Stream API
* This system sends all new tweets to a open Pusher channel, where other application can listen
* No authentication is used between this system and the frontend system
* No CI/CD is configured for this project
* Defined command is triggered via web url (just for testing purposes - this is not a recommended way of doing this)
