# Maxout

An app for tracking your max out progress when you're lifting.

## Description

Maxout is an app that power lifters can use to keep track of their progress towards lifting goals. A lifter can create an account and then immediately start adding goals for common power lifting lifts complete with target date/weight/reps. Whenever the lifter works out and needs to add progress towards a goal, they can log a measurement for each of their goals. The measurements can then be viewed in a graph or chart format while signed in and looking at their dashboard.

## Inspiration

I've been big into weightlifting for a very long time, competing as a high-schooler in the bench press and clean and jerk, and then as a cheerleader (lifting people). Weightlifters are very goal oriented and I felt like an app like this would be useful and fun to make! I also believe that there's a huge social aspect to weightlifting for most people. Tracking/sharing information about progress is both exciting and helpful!

## More Info and Commentary

There's a lot of things I'd like to do more on this application. I started creating a "public page" where people could have a public facing dashboard to share with people who want to see their progress (its accessible via `/view/{yourusername}`). It's nowhere near finished. There is a class called Progress in `App\Classes` that has the beginnings of some logic I want to use to provide insights to the lifters based on their measurements. It REALLY needs unit test coverage and they are not there yet nor is it done. I could actually see needing a base class for the analytics portion so I could expand it to look at the list of goals in addition to the measurements.

Additionally, as you can probably see, I spent the bare minimum on styling...I think some styling/colors would very much help!

## Code Test Tasks

* [x] Create a git repo and make meaningful periodic commits with appropriate comments
* [ ] Tests are important: unit tests and or Behat bevioral tests.
  * Not much here...I did start unit testing for the `App\Classes\Progress` class
* [ ] Fire events and listeners
* [x] Implement an authentication scheme with Policies or Middleware
  I used the Laravel included authentication and middleware. In another application I'm working on, I used JSON Web Tokens so that I could hold the token in a native app and do CORS.
* [x] Show your data model skills - create models with complex relations
* [x] Implement a service, either yours or a third party, and instantiate via a service provider
  * AB Testing ServiceProvider added (I chose this because you mentioned that SalterMitchell does a lot of AB Testing). There's a basic test in place on the landing page.  
* [ ] Organize and deploy your Javascript with RequireJS
  * TBH the Javascript in my application is not well organized at all. If I had a little more time, this is one of the first things I would do. Some of it is loaded via CDN (not actually included as a dependency) which I did for expediency.
* [x] Responsive design with Bootstrap and Sass
  * Bootstrap responsive design used throughout the application
* [x] Integrate with Social Media Using AddThis
  * I hadn't used AddThis and just added one of their basic plugins. Unfortunately it is visible throughout the app which doesn't make sense as some of the pages are 'authentication only'.
* [ ] Integrate with any other 3rd Party API
  * None present - I would have liked to add a feature for people to become part of a "Gym" where they could post and share progress. The Gym info could come from Yelp and possibly even use check-in info from Square or Facebook. Just didn't get to this in the time I had though.

## Special Deployment Instructions
  * This should be a standard Laravel deployment so:
    * Run the DB migrations
    * (Not Standard) Run the required DB seeder using the artisan command `php artisan db:seed --class=ExerciseTableSeeder`
      * This seeder adds the default exercises that users can pick from when creating goals

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
