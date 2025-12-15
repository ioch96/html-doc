# HTML `<center>` Tag

**Not Supported in HTML5.**

The `<center>` tag was used in HTML4 to center-align text.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <center>
        <h1>This is a heading</h1>
        <p>This is a paragraph.</p>
    </center>
  </body>
</html>
```

## What to Use Instead?

Center-align text (with CSS):

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
    <style>
        h1 {text-align: center;}
        p {text-align: center;}
    </style>
  </head>
  <body>
    <h1>This is a heading</h1>
    <p>This is a paragraph.</p>
  </body>
</html>
```
