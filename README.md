Strong Studio Website
===

### PHP/Kirby

The root web directory is `/kirby`.
Content is managed with (https://wwww.getkirby.com)[Kirby] - a flat file CMS built in PHP.
[https://getkirby.com/docs](Kirby Documentation).

Content Types are defined in `/kirby/site/blueprints` in YML.

See the (https://getkirby.com/docs/cheatsheet/)[Cheat Sheet] for the API.


###JS

Javascript is in `/kirby/site/snippets/footer.php` so that some variables can be written dynamically by the back-end.
Desktop navigation uses (http://alvarotrigo.com/fullPage/)[Fullpage JS].


###Styles

Styles are Sass, using (http://compass-style.org/)[Compass]. Scss files are in `/sass` and are compiled to `/kirby/stylesheets/main.css`.

Type `compass watch` in the root directory when making changes to Scss to watch the files for changes.

Documentation for the grid is (http://andosteinmetz.github.io/sass_grundrisse/)[here].