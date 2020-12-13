# Statamic snippet modifier addon

This is a simple statamic addon which adds a `snippet` modifier to easily create a text snippet of a given string. 

A snippet is an "intelligent substring": It will try to end the snippet at the end of a sentence (after a dot)
within a given character boundary. If no sentence ends within the boundary, it will end after the first word in the boundary and
add "..." to the end of the snippet. This will avoid having words cut off in the middle after a fixed boundary.

By default, the boundaries are a minimum of 200 and a maximum of 250 characters.

## Usage

Use it in your antlers template like so:

```
{{ content | snippet }}
```

This will transform this text:

> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

into this:

> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.

### Modifying the boundaries

The first parameter of the modifier is the min length, the second one is the max length.

For example, to create a snippet between 500 and 600 characters:

```
{{ content | snippet:500:600 }}
```
