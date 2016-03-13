# Numerish

Numerish is inspired by the service [Numerous](http://numerousapp.com/) which sadly is [shutting down May 1, 2016](http://blog.numerousapp.com/2016/02/02/numerous-shutting-down-on-may-1.html).

The goal of Numerish is to provide a PHP implementation of the same number tracking that Numerous provides. There is not intention at this point to provide an interface like that provided by Numerous's app.

## Types to be implemented

Modeling on Numerous, there are two main types of number to track.  Numerous offers a ton of Channels, but really these are just ways of accessing numbers of the types below which are updated by the service in question.

1. Datetime
  - This type is represented in Numerous as "Days until" or "Days since" type block: Days until the next episode of Game of Thrones, hours since the last a user's last cigarette, etc. A datetime is stored and updated and the display works out the diff between "now" and the stored value.
1. Count
  - This type is, so far as I can see, everything else in Numerous: Twitter followers, feet of snow, amount of money raised by US Presidential candidates, etc.  The value stored is a PHP integer and the return value is some formatting thereof.

## Interface
set()

get()

## Base class
NumerishNumber
- title
- description
- moreInfoURL
