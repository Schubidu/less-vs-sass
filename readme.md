Less vs. Sass
=============

This is a Testsite to compare the official, the less and the sass (compass) way to css.

The offical way - pure css, no browser fallback
---------------

Just put here only the official style-declaration.

The less way
---

To build less please install less.

    npm install -g less

then you can update the style-less.css with this command:

    lessc less/style-less.less > css/style-less.css


The sass (compass) way
---

Please [install compass](http://compass-style.org/install/).

then you can auto-update the style-compass.css

    compass watch

