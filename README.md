Strong Studio Website
===

### PHP/Kirby

The root web directory is `/kirby`.

Content is managed with [Kirby](https://wwww.getkirby.com) - a flat file CMS built in PHP.

[Kirby Documentation](https://getkirby.com/docs).

Content Types are defined in `/kirby/site/blueprints` in YML.

See the [Cheat Sheet](https://getkirby.com/docs/cheatsheet/) for the API.


###JS

Javascript is in `/kirby/site/snippets/footer.php` so that some variables can be written dynamically by the back-end.

Desktop navigation uses [Fullpage JS](http://alvarotrigo.com/fullPage/).


###Styles

Styles are Sass, using [Compass](http://compass-style.org/). Scss files are in `/sass` and are compiled to `/kirby/stylesheets/main.css`.

Type `compass watch` in the root directory to watch the and transpile to CSS when changes are made.

Documentation for the grid is [here](http://andosteinmetz.github.io/sass_grundrisse/).

###Environment
All that's required to run Kirby is an Apache server with PHP > 5.6 installed.

I have been using [MAMP](https://www.mamp.info/en/) for local development. 

Point Apache to `/kirby` as the webroot. Since Kirby uses flat-file storage, no database configuration is necessary.

###Content
**IMPORTANT**

To keep version control sane, content is not sync'ed between the development branch and the live site. 
Be sure not to overwrite the server's content with your local content folder. It is also a good idea to 
keep a copy of the live content folder outside of version control for backup.