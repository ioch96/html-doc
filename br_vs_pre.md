# Difference Between `<br>` and `<pre>` in a `<p>`

- **`<br>` tag**  
  - Inserts a single line break wherever it appears inside a paragraph (`<p>`).  
  - The browser still collapses multiple spaces and ignores extra line breaks in the HTML source.  

  **Advantages:**  
  - Simple way to add line breaks within a paragraph.  
  - Keeps text semantically inside a `<p>`, which is good for accessibility and SEO.  
  - Lightweight and widely supported.  

  **Disadvantages:**  
  - Cannot preserve multiple spaces or formatting.  
  - Overusing `<br>` for spacing can make HTML messy.  
  - Not suitable for preformatted blocks of text.  

- **`<pre>` tag**  
  - Preserves both spaces and line breaks exactly as written in the HTML source.  
  - Useful for displaying preformatted text like code, addresses, or poems.  

  **Advantages:**  
  - Exact formatting is preserved, including spaces and line breaks.  
  - Ideal for code snippets, ASCII art, or any text where spacing matters.  

  **Disadvantages:**  
  - Always renders text in a monospaced font by default (can be overridden with CSS).  
  - Not meant for regular paragraph text; using `<pre>` for long paragraphs can reduce readability.  
  - Adds a block-level element, which may disrupt page layout if used excessively.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Address and Poem</title>
</head>
<body>
    <h2>Address</h2>
    <p>
        John Doe<br>
        123 Main Street<br>
        Springfield, 12345<br>
        USA
    </p>
    <pre>
John Doe
123 Main Street
Springfield, 12345
USA
    </pre>
    <h2>Poem</h2>
    <p>
        Roses are red,<br>
        Violets are blue,<br>
        Sugar is sweet,<br>
        And so are you.
    </p>
    <pre>
Roses are red,
Violets are blue,
Sugar is sweet,
And so are you.
    </pre>
</body>
</html>
```
