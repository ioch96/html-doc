# HTML `<acronym>` Tag

> **Deprecated:** The `<acronym>` tag is **not supported in HTML5** and should no longer be used.

In **HTML 4**, the `<acronym>` tag was used to define an acronym and provide its full meaning using the `title` attribute.

## Example (HTML 4)

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Title of the Document</title>
</head>
<body>
  <h1>The acronym Element</h1>

  <p>
    The <acronym title="World Health Organization">WHO</acronym> was founded in 1948.
  </p>
</body>
</html>
```

## What to Use Instead?

In **HTML5**, use the `<abbr>` tag for both **abbreviations** and **acronyms**.

### HTML5 Example

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Title of the Document</title>
</head>
<body>
  <h1>The abbr Element</h1>

  <p>
    The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.
  </p>
</body>
</html>
```
