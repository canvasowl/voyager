The Voyager Api
===================

**V 1.2**

The Voyager Api is an open source **read only** Api that makes is easy for developers to use informations about our planets, universe, and other things that are out in the cosmos.

The Voyager Api is built using the PHP framework Laravel V5

----------

Get Requests
------------

To make a simple request to the api make a call to this endpoint
http://thevoyagerapi.com/api/v1/planets/

Returning only 1 planet
http://thevoyagerapi.com/api/v1/planets/show/1

Returning a property of a planet
http://thevoyagerapi.com/api/v1/planets/show/1/type

> *Properties are returned as a string, int,bool, or double not an object.*

These are the properties that can be returned:

 1. name
 2. diameter
 3. radius
 4. type
 5. gravity
 6. distance_from_sun
 7. orbital_period
 8. ring


----------

Get involved
------------
Want to help out?
Fork the project make a pull request to the dev branch. Lets map out the universe together.
