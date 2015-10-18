# Web Components + WordPress REST API Example
Uses polymer iron-ajax and some other fun stuff to embed blog posts in an HTML site.

This is a work in progress of a proof of concept. Needs moar abstraction/ css.

### Installation:

In WordPress:
* Install REST API plugin v2
* Setup CORS headers properly.
    * Use the cors.php file in this directory as an example.
    * See [this article for more information on REST API + CORS](http://joshpress.net/access-control-headers-for-the-wordpress-rest-api/)
    * You should probably set a more specific CORS header than "*"
    
This HTML Doc
* If Bower and NPM are not installed, [install them](http://lmgtfy.com/?q=Install+Bower).
* Run `bower install`
* In index.html set attribute `data-wp-api-root` on `#id` to your REST API root URL
    * Don't trailingslash that shit.

### Questions?
Wait for me to write this up for Torque, if it's still not clear, tweet at me.

Please feel free to submit a pull request to fix whatever is dumb/ busted about this.

### @todo
1. Local Storage and/or offline mode.
2. CSSeses
3. Forms, etc.
4. Move as much as possible into standalone components that y'all can bower on into your own projects.
