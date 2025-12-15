# HTML `<blockquote>` Tag

The `<blockquote>` tag specifies a section that is quoted from another source.

Browsers usually indent `<blockquote>` elements (look at example below to see how to remove the indentation).

## Attributes

|Attribute|	Value|	Description|
|:-:|:-:|:-|
|[cite]()|	URL|	Specifies the source of the quotation|

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <h1>The blockquote element</h1>
    <p>Here is a quote from WWF's website:</p>
    <blockquote cite="http://www.worldwildlife.org/who/index.html">
    For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
    </blockquote>
  </body>
</html>
```

Use CSS to remove the indentation from the blockquote element:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
    <style>
      blockquote {
        margin-left: 0;
      }
    </style>
  </head>
  <body>
    <h1>The blockquote element</h1>
    <p>Here is a quote from WWF's website:</p>
    <blockquote cite="http://www.worldwildlife.org/who/index.html">
    For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
    </blockquote>
  </body>
</html>
```
