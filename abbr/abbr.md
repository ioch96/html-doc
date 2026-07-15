# HTML `<abbr>` Tag

The `<abbr>` tag defines an **abbreviation** or an **acronym**, such as **HTML**, **CSS**, **Mr.**, **Dr.**, **ASAP**, or **ATM**.

It helps browsers, search engines, and assistive technologies understand the full meaning of an abbreviation.

> **Note:** Use the `title` attribute to provide the full form or description of the abbreviation. Most browsers display this description as a tooltip when the user hovers over the abbreviation.

## Syntax

```html
<abbr title="Full Meaning">Abbreviation</abbr>
```

## Example

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

## Output

The **WHO** text appears on the page. When you hover over it, a tooltip displays:

```
World Health Organization
```
