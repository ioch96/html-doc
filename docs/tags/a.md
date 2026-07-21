# HTML `<a>` Tag

Το tag `<a>` ορίζει έναν **υπερσύνδεσμο (hyperlink)**, ο οποίος χρησιμοποιείται για τη σύνδεση μιας ιστοσελίδας με μια άλλη.

Το σημαντικότερο attribute του στοιχείου `<a>` είναι το **`href`**, το οποίο καθορίζει τον προορισμό του συνδέσμου.

Από προεπιλογή, οι σύνδεσμοι εμφανίζονται στους περισσότερους browsers ως εξής:

- Ένας σύνδεσμος που **δεν έχει επισκεφθεί** ο χρήστης εμφανίζεται **μπλε και υπογραμμισμένος**.
- Ένας **επισκεμμένος** σύνδεσμος εμφανίζεται **μοβ και υπογραμμισμένος**.
- Ένας **ενεργός** σύνδεσμος (τη στιγμή που γίνεται κλικ) εμφανίζεται **κόκκινος και υπογραμμισμένος**.

> **Σημείωση:** Από προεπιλογή, η συνδεδεμένη σελίδα ανοίγει στο **τρέχον παράθυρο ή καρτέλα** του browser, εκτός αν οριστεί διαφορετικός στόχος με το attribute `target`.

## Attributes

|Attribute|Τιμή|Περιγραφή|
|:-:|:-:|:-|
|href|URL|Καθορίζει τη διεύθυνση (URL) της σελίδας στον οποίο οδηγεί ο σύνδεσμος.|
|target|`_blank`, `_self`|Καθορίζει πού θα ανοίξει ο σύνδεσμος.|

### Τιμές του attribute `target`

|Τιμή|Περιγραφή|
|:-:|:-|
|`_blank`|Ανοίγει τον σύνδεσμο σε **νέα καρτέλα** ή νέο παράθυρο του browser.|
|`_self`|Ανοίγει τον σύνδεσμο στην **τρέχουσα καρτέλα**. Είναι η προεπιλεγμένη συμπεριφορά.|

## Παράδειγμα `target="_blank"`

Το παρακάτω παράδειγμα δημιουργεί έναν σύνδεσμο προς το YouTube, ο οποίος ανοίγει σε **νέα καρτέλα** του browser χάρη στην τιμή `target="_blank"`.

```html
<a href="https://youtube.com" target="_blank">Link</a>
```

## Παράδειγμα `target="_self"`

Το παρακάτω παράδειγμα δημιουργεί έναν σύνδεσμο προς το YouTube, ο οποίος ανοίγει στην **τρέχουσα καρτέλα** του browser. Η τιμή `target="_self"` είναι η προεπιλεγμένη συμπεριφορά.

```html
<a href="https://youtube.com" target="_self">Link</a>
```

## Browser Support

Το tag `<a>` υποστηρίζεται από όλους τους σύγχρονους browsers.

- Google Chrome
- Mozilla Firefox
- Microsoft Edge
- Safari
- Opera

## Σύνδεσμος με προεπιλεγμένη συμπεριφορά

Το παρακάτω παράδειγμα δημιουργεί έναν σύνδεσμο προς το YouTube. Εφόσον δεν έχει οριστεί το attribute `target`, ο σύνδεσμος ανοίγει στην **τρέχουσα καρτέλα** του browser.

```html
<a href="https://youtube.com">Youtube</a>
```

## Χρήση εικόνας ως σύνδεσμος

Το παρακάτω παράδειγμα δείχνει πώς μια **εικόνα** μπορεί να χρησιμοποιηθεί ως σύνδεσμος. Όταν ο χρήστης κάνει κλικ στην εικόνα, μεταφέρεται στη διεύθυνση που ορίζεται στο attribute `href` του στοιχείου `<a>`.

```html
<a href="https://youtube.com"><img src="images/youtube.png" width="25"></a>
```

## Χρήση βίντεο ως σύνδεσμος

Το παρακάτω παράδειγμα δείχνει πώς ένα στοιχείο `<video>` μπορεί να χρησιμοποιηθεί ως σύνδεσμος. Όταν ο χρήστης κάνει κλικ στο βίντεο, μεταφέρεται στη διεύθυνση που ορίζεται στο attribute `href` του στοιχείου `<a>`.

```html
<a href="https://youtube.com">
  <video autoplay muted loop width="400">
    <source src="videos/sample.mp4" type="video/mp4">
    Ο browser σας δεν υποστηρίζει το στοιχείο video.
  </video>
</a>
```

## Χρήση κουμπιού ως σύνδεσμος

Το παρακάτω παράδειγμα δείχνει πώς ένα κουμπί μπορεί να τοποθετηθεί μέσα σε ένα στοιχείο `<a>`, ώστε να λειτουργεί ως σύνδεσμος. Όταν ο χρήστης πατήσει το κουμπί, μεταφέρεται στη διεύθυνση που ορίζεται στο attribute `href`.

```html
<a href="https://youtube.com">
    <button type="button">Μετάβαση στον ιστότοπο</button>
</a>
```

## Δημιουργία συνδέσμου email

Το παρακάτω παράδειγμα χρησιμοποιεί το πρωτόκολλο `mailto:` για τη δημιουργία ενός συνδέσμου email. Όταν ο χρήστης κάνει κλικ στον σύνδεσμο, ανοίγει η προεπιλεγμένη εφαρμογή ηλεκτρονικού ταχυδρομείου με προσυμπληρωμένη τη διεύθυνση του παραλήπτη.

```html
<a href="mailto:someone@example.com">Αποστολή email</a>
```

## Δημιουργία τηλεφωνικού συνδέσμου

Το παρακάτω παράδειγμα χρησιμοποιεί το πρωτόκολλο `tel:` για τη δημιουργία ενός τηλεφωνικού συνδέσμου. Σε συσκευές που υποστηρίζουν τηλεφωνικές κλήσεις, το πάτημα του συνδέσμου ξεκινά τη διαδικασία πραγματοποίησης κλήσης.

```html
<a href="tel:+4733378901">+47 333 78 901</a>
```

## Σύνδεσμος επιστροφής στην κορυφή της σελίδας

Το παρακάτω παράδειγμα δημιουργεί έναν **εσωτερικό σύνδεσμο (anchor link)**, ο οποίος επιστρέφει τον χρήστη στην κορυφή της ιστοσελίδας. Η τιμή `#top` του attribute `href` αντιστοιχεί στο στοιχείο που έχει `id="top"`.

```html
<!DOCTYPE html>
<html lang="el">
  <head>
    <title>Τίτλος του Εγγράφου</title>
  </head>
  <body>
    <h1 id="top">HTML Tutorial</h1>

    <p>Lorem ipsum dolor sit amet...</p>
    <p>Lorem ipsum dolor sit amet...</p>
    <p>Lorem ipsum dolor sit amet...</p>
    <p>Lorem ipsum dolor sit amet...</p>
    <p>Lorem ipsum dolor sit amet...</p>
    <p>Lorem ipsum dolor sit amet...</p>
    <p>Lorem ipsum dolor sit amet...</p>

    <a href="#top">Back to Top</a>
  </body>
</html>
```

## Σύνδεσμος με σχετική διαδρομή (Relative URL)

Το παρακάτω παράδειγμα δημιουργεί έναν σύνδεσμο προς τη σελίδα `contact.html`, η οποία βρίσκεται μέσα στον φάκελο `pages`. Η διαδρομή `../pages/contact.html` χρησιμοποιεί το `../` για να μεταβεί έναν φάκελο πίσω από τη θέση του αρχείου `Blog` και στη συνέχεια να ανοίξει τη σελίδα `contact.html`.

```html
<!DOCTYPE html>
<html lang="el">
  <head>
    <title>Blog</title>
  </head>
  <body>
    <a href="../pages/contact.html">Επικοινωνία</a>
  </body>
</html>
```

## Σύνδεσμος με διαδρομή από τη ρίζα του ιστότοπου (Root-relative URL)

Το παρακάτω παράδειγμα δημιουργεί έναν σύνδεσμο προς τη σελίδα `contact.html`, η οποία βρίσκεται μέσα στον φάκελο `pages`. Επειδή η διαδρομή ξεκινά με `/`, ο browser αναζητά το αρχείο **ξεκινώντας από τη ρίζα (root) του ιστότοπου**, ανεξάρτητα από τον φάκελο στον οποίο βρίσκεται η τρέχουσα ιστοσελίδα.

```html
<!DOCTYPE html>
<html lang="el">
  <head>
    <title>Blog</title>
  </head>
  <body>
    <a href="/pages/contact.html">Contact</a>
  </body>
</html>
```

## Εκτέλεση κώδικα JavaScript μέσω συνδέσμου

Το παρακάτω παράδειγμα χρησιμοποιεί το πρωτόκολλο `javascript:` στο attribute `href` για την εκτέλεση κώδικα JavaScript όταν ο χρήστης κάνει κλικ στον σύνδεσμο. Στην περίπτωση αυτή, εμφανίζεται ένα παράθυρο ειδοποίησης (alert) με το μήνυμα **"Hello World!"**.

```html
<!DOCTYPE html>
<html lang="el">
  <head>
    <title>Blog</title>
  </head>
  <body>
    <a href="javascript:alert('Hello World!');">Execute JavaScript</a>
  </body>
</html>
```

> **Σημείωση:** Η χρήση του `javascript:` στο `href` θεωρείται πλέον κακή πρακτική και θα πρέπει να αποφεύγεται. Για την εκτέλεση κώδικα JavaScript προτιμάται η χρήση του attribute `onclick` ή η προσθήκη event listeners μέσω JavaScript.

### Χρήση του `onclick`

Ορίζεις μια συνάρτηση JavaScript και την καλείς από το attribute `onclick`.

```html id="f8z6yc"
<!DOCTYPE html>
<html lang="el">
<head>
  <title>onclick Example</title>
</head>
<body>
  <a href="#" onclick="showMessage(); return false;">Execute JavaScript</a>
  <script>
    function showMessage() {
      alert("Hello World!");
    }
  </script>
</body>
</html>
```

Στο παραπάνω παράδειγμα, όταν ο χρήστης κάνει κλικ στον σύνδεσμο, εκτελείται η συνάρτηση `showMessage()`, η οποία εμφανίζει το μήνυμα **"Hello World!"**. Η έκφραση `return false;` αποτρέπει την προεπιλεγμένη λειτουργία του συνδέσμου, ώστε ο browser να μη μεταβεί στη διεύθυνση `#`.

> **Σημείωση:** Η χρήση του `onclick` είναι προτιμότερη από το `javascript:` στο attribute `href`, καθώς διαχωρίζει τη διεύθυνση του συνδέσμου από τον κώδικα JavaScript. Ωστόσο, εξακολουθεί να αναμιγνύει HTML και JavaScript. Για τον λόγο αυτό, στις σύγχρονες εφαρμογές προτιμάται η παρακάτω μέθοδος `addEventListener()`, η οποία διατηρεί τον κώδικα πιο οργανωμένο και ευκολότερο στη συντήρηση.

### Χρήση `addEventListener()`

Ο κώδικας JavaScript βρίσκεται ξεχωριστά από την HTML.

```html id="p4v8gx"
<!DOCTYPE html>
<html lang="el">
<head>
  <title>addEventListener Example</title>
</head>
<body>
  <a href="#" id="myLink">Execute JavaScript</a>
  <script>
    const link = document.getElementById("myLink");
    link.addEventListener("click", function (event) {
      event.preventDefault();
      alert("Hello World!");
    });
  </script>
</body>
</html>
```

Στο παραπάνω παράδειγμα, η μέθοδος `addEventListener()` προσθέτει έναν **event listener** στο στοιχείο `<a>`, ώστε να εκτελείται ο κώδικας JavaScript κάθε φορά που ο χρήστης κάνει κλικ στον σύνδεσμο. Η μέθοδος `event.preventDefault()` ακυρώνει την προεπιλεγμένη λειτουργία του συνδέσμου, ενώ η `alert()` εμφανίζει το μήνυμα **"Hello World!"**.

> **Σημείωση:** Η χρήση της `addEventListener()` αποτελεί την **προτιμότερη και σύγχρονη πρακτική**, καθώς διαχωρίζει τον κώδικα JavaScript από την HTML, βελτιώνει την οργάνωση του κώδικα και διευκολύνει τη συντήρηση και την επαναχρησιμοποίησή του.
