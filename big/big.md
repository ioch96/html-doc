# HTML `<big>` Tag

**Not Supported in HTML5.**

The `<big>` tag was used in HTML 4 to define bigger text.

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Title of the document</title>
</head>
<body>
	<p>This is a normal paragraph.</p>
	<p><big>This is a bigger paragraph.</big></p>
</body>
</html>
```

## What to Use Instead?

Specify different font-sizes for HTML elements (with CSS):

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Title of the document</title>
	<style>
		p.ex1 {
		font-size: 30px;
		}
		p.ex2 {
		font-size: 50px;
		}
	</style>
</head>
<body>
	<p>This is a normal paragraph.</p>
	<p class="ex1">This is a bigger paragraph.</p>
	<p class="ex2">This is a much bigger paragraph.</p>
</body>
</html>
```
