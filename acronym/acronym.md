# HTML `<acronym>` Tag

**Not Supported in HTML5.**

The `<acronym>` tag was used in HTML 4 to define an acronym.

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Title of the document</title>
</head>
<body>
	<h1>The acronym element</h1>
	<p>The <acronym title="World Health Organization">WHO</acronym> was founded in 1948.</p>
</body>
</html>
```

## What to Use Instead?

An acronym or abbreviation should be marked up with the [`<abbr>`](../abbr/abbr.md) tag:

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Title of the document</title>
</head>
<body>
	<h1>The abbr element</h1>
	<p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
</body>
</html>
```
