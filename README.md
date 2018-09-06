# IMDB Auto Embed Wordpress Plugin

Automatically embed any movie stream using a shortcode and the films IMDB code. 

Movies are embedded on your wordpress website within an iframe. Everything is automated including the management of dead links, dmca requests and the scraping of all the latest movies.

## Installation

Upload the **imdb-auto-embed** folder including all its contents to the **/wp-content/plugins** directory. Login to wordpress, navigate to **Plugins** then **Installed Plugins** to locate and activate **IMDB Auto Embed**. Now you are reading to start embedding movies onto your website.

### Example:

Lets say we wanted to embed the movie with the IMDB ID [tt0063350](https://www.imdb.com/title/tt0063350/) - To do this, we would use the shortcode   

```[IMDB id="tt0063350"]```

By default this will produce an iframe with a height of 360px and a width of 640px. These parameters and several others can be customized by making some minor changes to the shortcode.

###  Customizing Parameters:

Width in pixels or percentage – default is 640px:

```[IMDB id="tt0063350" width="100%"]```

Height in pixels or percentage – default is 360px:

```[IMDB id="tt0063350" height="500"]```

CSS Class given to the iframe (for advanced customising using your stylsheet). Default is ‘hydra-iframe’ – leave this blank if you are unsure.

```[IMDB id="tt0063350" class="my-custom-class"]```

Frameborder for your iframe – default is 0.

```[IMDB id="tt0063350" frameborder="5"]```

> **ProTip:** Ignore the custom params if you are happy with the defaults. You may use all or just several of these parameters and in any order.

###  Frequently Asked Questions

Do I need an API key to use this plugin? =

> No, an API key is not required.

What happens when no stream is found?

> The plugin uses several APIs that are updated regularly to replace dead links. In the event of a dead link, one of the other APIs should have the movie in question.

Why do I see a popup before the video starts? =

> Some of the streaming sources e.g. Openload and Streamango insert a popup inside their streams. This will appear for users without adblock just before the video starts but should not interfere with the playback of a film. We do not add any additional popups to the player.

Why are all my embedded movies showing the 1968 film Night of the Living Dead?

> If you enter an **invalid IMDB ID** this film will be displayed. Double check your shortcodes!

###  Screenshot


![IMDB Auto Embed Movie Plugin for Wordpress](https://github.com/Kay-Tan/imdb-auto-embed/blob/master/assets/screenshot-1.png?raw=true)

###  Copyright Disclaimer

There are no filters associated with this plugin, it is entirely your own responsibility to ensure the movies that you display on your website have no copyright restrictions. [Here are some public domain movies to get you started.](https://en.wikipedia.org/wiki/List_of_films_in_the_public_domain_in_the_United_States#Films)

### Acknowledgments

* [Hydra Movies](https://hydramovies.com/) - Watch Full Movies Online for Free - Hydra Movies
* [VideoSpider.in](https://videospider.in/) - VideoSpider Movie Streaming API - movie stream by IMDB/TMDB ID
* [OBD API](https://api.odb.to/) - All Movies Streaming Free API

###  Changelog

**1.2:**
*Release Date - 29 August 2018*

* Plugin is now capable of running on both secure and non-secure websites (http & https).

**1.1**
*Release Date - 10 July 2018*

* Added the ability to manage API sources remotely allowing for sources to be fixed without plugin updates.

**1.0**
*Release Date - 26 May 2018*

* Initial stable release.
