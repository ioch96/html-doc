# HTML `<p>` Tag

The `<p>` tag defines a paragraph.

Browsers automatically add a single blank line before and after each `<p>` element.

**Note**: Use CSS to style paragraphs.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <h1>The p element</h1>
    <p>This is a paragraph.</p>
    <p>This is a paragraph.</p>
    <p>This is a paragraph.</p>
  </body>
</html>
```

In HTML, the `<p>` tag defines a paragraph, but line breaks and extra spaces inside the source code are ignored by the browser.

This happens because HTML collapses:

- Line breaks
- Tabs
- Multiple spaces

into a single space when displaying text.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
  <p>
    My Bonnie lies over the ocean.
    My Bonnie lies over the sea.
    My Bonnie lies over the ocean.
    Oh, bring back my Bonnie to me.
  </p>
  <p>Note that the browser simply ignores the line breaks in the source code!</p>
  </body>
</html>
```
