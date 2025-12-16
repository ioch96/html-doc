# HTML `<a>` Tag

The `<a>` tag defines a hyperlink, which is used to link from one page to another.

The most important attribute of the `<a>` element is the **href** attribute, which indicates the link's destination.

By default, links will appear as follows in all browsers:

- An unvisited link is underlined and blue
- A visited link is underlined and purple
- An active link is underlined and red

**Note**: If the `<a>` tag has no href attribute, it is only a placeholder for a hyperlink.

**Note**: A linked page is normally displayed in the current browser window, unless you specify another target.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <a href="https://www.w3schools.com">w3schools</a>
  </body>
</html>
```

## How to use an image as a link

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <a href="https://www.w3schools.com"><img alt="W3Schools" src="logo_w3s.gif" width="100" height="100"></a>
  </body>
</html>
```

## How to open a link in a new browser window

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <a href="https://www.w3schools.com" target="_blank" title="Tutorial">w3schools</a>
  </body>
</html>
```

## How to link to an email address

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <a href="mailto:someone@example.com">Send email</a>
  </body>
</html>
```

## How to link to a phone number

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <a href="tel:+4733378901">+47 333 78 901</a>
  </body>
</html>
```

## How to link to another section on the same page

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <a href="#section2">Go to Section 2</a>
    <h2 id="section1">Section 1</h2>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus cumque aperiam ullam! Enim perferendis magni harum vero error doloribus nam impedit commodi, nisi ipsum consequuntur. Eveniet culpa eius, nihil rerum tempore quod nam unde vero fuga optio, autem expedita adipisci doloribus provident deserunt excepturi, quaerat error officiis aliquid perferendis illum fugiat reiciendis nesciunt dolor. Ad sed nesciunt cum quaerat suscipit?
    </p>

    <h2 id="section2">Section 2</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ab repudiandae eveniet ipsa itaque eius dolorum numquam sapiente sit odio, a, facere ullam accusamus, quaerat atque blanditiis. Nisi sunt, accusantium, quod ad voluptatum aut iure dicta, itaque accusamus maiores odio vero excepturi autem sit dolore totam officia perspiciatis. Illum recusandae totam sapiente voluptas vitae beatae atque perferendis, minus aut! Aut nostrum ea officiis amet, ipsam explicabo, soluta dicta deserunt quidem consectetur asperiores nemo minus aliquid quod, sunt reprehenderit alias atque sequi? Ipsum quaerat iste facere dignissimos corrupti nam optio hic.
    </p>
  </body>
</html>
```

## How to link to another file

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <a href="../abbr/example_1.html">The abbr element</a>
  </body>
</html>
```
