# HTML `<form>` Tag

Το tag `<form>` χρησιμοποιείται για τη δημιουργία μιας **φόρμας (form)** στην HTML.

Μια φόρμα επιτρέπει στον χρήστη να εισάγει δεδομένα, τα οποία μπορούν να αποσταλούν σε έναν server για επεξεργασία.

Μέσα σε ένα στοιχείο `<form>` μπορούν να τοποθετηθούν διάφορα στοιχεία εισαγωγής δεδομένων, όπως:

- `<input>`
- `<textarea>`
- `<button>`
- `<select>`
- `<option>`
- `<optgroup>`
- `<fieldset>`
- `<label>`
- `<output>`

---

## Σύνταξη

```html
<form action="/submit" method="post">

    <!-- Στοιχεία της φόρμας -->

</form>
```

---

## Παράδειγμα 1

Πώς να δημιουργήσετε μια απλή φόρμα.

```html
<form action="/submit" method="post">

    <label for="name">
        Όνομα:
    </label>

    <input
        type="text"
        id="name"
        name="name"
    >

    <button type="submit">
        Αποστολή
    </button>

</form>
```

---

## Παράδειγμα 2

Φόρμα σύνδεσης χρήστη.

```html
<form action="/login" method="post">

    <label for="email">
        Email:
    </label>

    <input
        type="email"
        id="email"
        name="email"
        required
    >

    <br><br>

    <label for="password">
        Κωδικός:
    </label>

    <input
        type="password"
        id="password"
        name="password"
        required
    >

    <br><br>

    <button type="submit">
        Σύνδεση
    </button>

</form>
```

---

## Παράδειγμα 3

Φόρμα επικοινωνίας.

```html
<form action="/contact" method="post">

    <label for="fullname">
        Ονοματεπώνυμο:
    </label>

    <input
        type="text"
        id="fullname"
        name="fullname"
        required
    >

    <br><br>

    <label for="message">
        Μήνυμα:
    </label>

    <textarea
        id="message"
        name="message"
        rows="5"
        cols="40"
    ></textarea>

    <br><br>

    <button type="submit">
        Αποστολή
    </button>

</form>
```

---

## Attributes

|Attribute|Τιμή|Περιγραφή|
|:-:|:-:|:-|
|`action`|URL|Καθορίζει τη διεύθυνση στην οποία αποστέλλονται τα δεδομένα της φόρμας.|
|`method`|`get`|Αποστέλλει τα δεδομένα μέσω της διεύθυνσης URL.|
||`post`|Αποστέλλει τα δεδομένα μέσα στο σώμα (body) του HTTP αιτήματος.|
|`autocomplete`|`on`, `off`|Ενεργοποιεί ή απενεργοποιεί την αυτόματη συμπλήρωση πεδίων.|
|`target`|`_self`, `_blank`|Καθορίζει πού θα εμφανιστεί η απάντηση μετά την υποβολή της φόρμας.|
|`novalidate`|`novalidate`|Απενεργοποιεί τον έλεγχο εγκυρότητας των πεδίων πριν από την υποβολή.|

---

## Το attribute `action`

Το `action` καθορίζει τη διεύθυνση (URL) στην οποία θα σταλούν τα δεδομένα της φόρμας.

```html
<form action="/register">

    ...

</form>
```

Αν δεν οριστεί το `action`, τα δεδομένα αποστέλλονται στην ίδια σελίδα.

---

## Το attribute `method`

Το `method` καθορίζει τον τρόπο αποστολής των δεδομένων.

### `method="get"`

Τα δεδομένα αποστέλλονται μέσω της διεύθυνσης URL.

```html
<form action="/search" method="get">

    <input
        type="search"
        name="q"
    >

    <button type="submit">
        Αναζήτηση
    </button>

</form>
```

Παράδειγμα URL:

```text
/search?q=laptop
```

Το `GET` χρησιμοποιείται κυρίως για:

- αναζητήσεις,
- φιλτράρισμα αποτελεσμάτων,
- δεδομένα που δεν είναι ευαίσθητα.

---

### `method="post"`

Τα δεδομένα αποστέλλονται μέσα στο σώμα (body) του HTTP αιτήματος και δεν εμφανίζονται στη διεύθυνση URL.

```html
<form action="/login" method="post">

    <input
        type="email"
        name="email"
    >

    <input
        type="password"
        name="password"
    >

    <button type="submit">
        Σύνδεση
    </button>

</form>
```

Το `POST` χρησιμοποιείται κυρίως για:

- σύνδεση χρηστών,
- εγγραφή,
- φόρμες επικοινωνίας,
- αποστολή αρχείων,
- ολοκλήρωση παραγγελιών.

---

## Το attribute `autocomplete`

Ενεργοποιεί ή απενεργοποιεί την αυτόματη συμπλήρωση της φόρμας.

```html
<form autocomplete="off">

    ...

</form>
```

---

## Το attribute `target`

Καθορίζει πού θα εμφανιστεί η απάντηση μετά την υποβολή της φόρμας.

```html
<form
    action="/search"
    target="_blank"
>
```

|Τιμή|Περιγραφή|
|:-:|:-|
|`_self`|Η απάντηση εμφανίζεται στην ίδια καρτέλα (προεπιλογή).|
|`_blank`|Η απάντηση ανοίγει σε νέα καρτέλα ή νέο παράθυρο.|

---

## Το attribute `novalidate`

Το `novalidate` απενεργοποιεί τον έλεγχο εγκυρότητας των πεδίων.

```html
<form novalidate>

    ...

</form>
```

Η φόρμα υποβάλλεται ακόμη και αν υπάρχουν άδεια ή μη έγκυρα πεδία.

---

## Σημαντικές παρατηρήσεις

- Το `<form>` αποτελεί το βασικό στοιχείο δημιουργίας φορμών στην HTML.
- Τα περισσότερα στοιχεία εισαγωγής δεδομένων (`<input>`, `<textarea>`, `<select>`, `<button>` κ.ά.) τοποθετούνται μέσα σε ένα `<form>`.
- Το attribute `action` καθορίζει τον προορισμό των δεδομένων.
- Το `method="get"` χρησιμοποιείται κυρίως για αναζητήσεις.
- Το `method="post"` χρησιμοποιείται για αποστολή δεδομένων που τροποποιούν πληροφορίες ή περιέχουν ευαίσθητα στοιχεία.
- Για να αποσταλεί η τιμή ενός πεδίου, αυτό πρέπει να διαθέτει το attribute `name`.

> **Βέλτιστη πρακτική:** Χρησιμοποιείτε `method="get"` μόνο για αναζητήσεις ή ανάκτηση πληροφοριών και `method="post"` για όλες τις υπόλοιπες φόρμες που αποστέλλουν ή τροποποιούν δεδομένα.

---

## Browser Support

Το tag `<form>` υποστηρίζεται από όλους τους σύγχρονους browsers.

- Google Chrome
- Mozilla Firefox
- Microsoft Edge
- Safari
- Opera
