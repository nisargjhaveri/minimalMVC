minimalMVC
==========

Another MVC framework in PHP.

A really minimal MVC framework with helpers and library support.

See also
--------

- [minimalMVC-example](https://github.com/nisargjhaveri/minimalMVC-example), for example on how to use minimalMVC
- [minimalMVC-extras](https://github.com/nisargjhaveri/minimalMVC-extras), for extra libraries and helpers that works with minimalMVC

How to use?
-----------

- Check example at [minimalMVC-example](https://github.com/nisargjhaveri/minimalMVC-example).
- Run phpDoc and understand available methods. (I have tried to make documentation phpDoc compatible, not sure with what level of success :P)
- Alternatively, browse and understand the code (If you think reading code is easier :P)
- Add more controllers, models, views, libraries and helpers in app and make something awesome. :)

**Note: Sorry for the not so good documentation, but if you are *real coder* you can get everything from the code. It is nicely written. :P**

Directory structure
-------------------

The directory structure of an application using minimalMVC looks like following.
```
.
|-- index.php (which calls sys/index.php)
|-- sys
|   `-- (Content of this repo)
|-- app
|   |-- config.php
|   |-- routes.php
|   |-- models
|   |   `-- (Models...)
|   |-- controllers
|   |   `-- (Controllers...)
|   |-- views
|   |   `-- (Views...)
|   |-- helpers
|   |   `-- (Helpers...)
|   `-- libraries
|       `-- (Libraries...)
`-- (Other stuff including static files, css, js, etc.)
```

Please refer to the [minimalMVC-example](https://github.com/nisargjhaveri/minimalMVC-example) repo for details for `app` directory.

History
--------

I have some problems with big frameworks that does everything for me without me knowing what they are doing... Also, I have problems with using others libraries rather than writing myself (But sadly, I cannot write everything myself :/).

But this time they allowed me to create and use a framework for the website of our college fest ([Felicity 2k15, IIIT Hyderabad](http://felicity.iiit.ac.in/)). Thanks to my friends [@polybuildr](https://github.com/polybuildr) and [@hharchani](https://github.com/hharchani) who allowed me to create a framework and use it rather than using *someone else's* framework. :D

This was created as part of the website mentioned above, and then I separated it as a different project. Old commits history is not preserved as some of them was specific to that project.

Contribute
----------

### Report bugs
- Use github issues to report bugs.

### Feature requests / Enhancements
- Preferably implement and send a pull request! :P

    **OR**

- Use github issues.

### Contribute code
1. Fork this repository.
2. Implement some feature or fix a bug (use branches if bossible)
3. Create pull request.

### Documentation

If you can write usage manual, you are more than welcome to write one!
