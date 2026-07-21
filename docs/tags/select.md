# HTML `<select>` Tag

Το tag `<select>` χρησιμοποιείται για τη δημιουργία μιας **αναπτυσσόμενης λίστας επιλογών (drop-down list)**.

Επιτρέπει στον χρήστη να επιλέξει μία (ή περισσότερες) επιλογές από μια λίστα.

Το `<select>` χρησιμοποιείται κυρίως μέσα σε μια φόρμα (`<form>`) για τη συλλογή δεδομένων από τον χρήστη.

Οι διαθέσιμες επιλογές ορίζονται με το στοιχείο `<option>`.

> **Συμβουλή:** Για λόγους προσβασιμότητας, να χρησιμοποιείτε πάντα το `<label>` μαζί με το `<select>`.

---

## Σύνταξη

```html
<label for="country">Χώρα:</label>
<select id="country" name="country">
    <option value="gr">Ελλάδα</option>
    <option value="cy">Κύπρος</option>
    <option value="it">Ιταλία</option>
</select>
```

---

## Παράδειγμα 1

Πώς να δημιουργήσετε μια απλή αναπτυσσόμενη λίστα.

```html
<label for="country">Χώρα:</label>
<select id="country" name="country">
    <option value="gr">Ελλάδα</option>
    <option value="cy">Κύπρος</option>
    <option value="it">Ιταλία</option>
</select>
```

---

## Παράδειγμα 2

Πώς να ορίσετε μια προεπιλεγμένη επιλογή.

```html
<label for="country">Χώρα:</label>
<select id="country" name="country">
    <option value="gr">Ελλάδα</option>
    <option value="cy" selected>Κύπρος</option>
    <option value="it">Ιταλία</option>
</select>
```

Η επιλογή **Κύπρος** εμφανίζεται επιλεγμένη όταν φορτώσει η σελίδα.

---

## Παράδειγμα 3

Πώς να εμφανίσετε μια προτροπή επιλογής.

```html
<label for="country">Χώρα:</label>
<select id="country" name="country" required>
    <option value="" selected disabled>Επιλέξτε χώρα</option>
    <option value="gr">Ελλάδα</option>
    <option value="cy">Κύπρος</option>
    <option value="it">Ιταλία</option>
</select>
```

Το `disabled` εμποδίζει τον χρήστη να επιλέξει ξανά την πρώτη επιλογή.

---

## Παράδειγμα 4

Πώς να επιτρέψετε πολλαπλές επιλογές.

```html
<label for="languages">Γλώσσες προγραμματισμού:</label>
<select id="languages" name="languages" multiple>
    <option value="html">HTML</option>
    <option value="css">CSS</option>
    <option value="javascript">JavaScript</option>
    <option value="php">PHP</option>
</select>
```

Ο χρήστης μπορεί να επιλέξει περισσότερες από μία επιλογές.

---

## Παράδειγμα 5

Πώς να εμφανίσετε περισσότερες επιλογές ταυτόχρονα.

```html
<label for="cities">Πόλεις:</label>
<select id="cities" name="cities" size="4">
    <option>Αθήνα</option>
    <option>Θεσσαλονίκη</option>
    <option>Πάτρα</option>
    <option>Ηράκλειο</option>
    <option>Λάρισα</option>
</select>
```

Εμφανίζονται ταυτόχρονα τέσσερις επιλογές χωρίς να χρειάζεται να ανοίξει η λίστα.

---

## Attributes

|Attribute|Τιμή|Περιγραφή|
|:-:|:-:|:-|
|`name`|text|Ορίζει το όνομα του πεδίου που αποστέλλεται με τη φόρμα.|
|`id`|text|Συνδέει το `<select>` με το αντίστοιχο `<label>`.|
|`multiple`|`multiple`|Επιτρέπει την επιλογή πολλών τιμών.|
|`size`|number|Καθορίζει πόσες επιλογές εμφανίζονται ταυτόχρονα.|
|`required`|`required`|Η επιλογή γίνεται υποχρεωτική πριν από την υποβολή της φόρμας.|
|`disabled`|`disabled`|Απενεργοποιεί ολόκληρη τη λίστα επιλογών.|
|`autofocus`|`autofocus`|Το στοιχείο αποκτά αυτόματα focus όταν φορτώσει η σελίδα.|

---

## Το attribute `multiple`

Με το `multiple` ο χρήστης μπορεί να επιλέξει περισσότερες από μία επιλογές.

```html
<select name="colors" multiple>
    <option>Κόκκινο</option>
    <option>Μπλε</option>
    <option>Πράσινο</option>
</select>
```

---

## Το attribute `size`

Το `size` καθορίζει πόσες επιλογές θα εμφανίζονται ταυτόχρονα.

```html
<select name="numbers" size="5">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
</select>
```

---

## Το attribute `required`

Με το `required` ο χρήστης πρέπει να επιλέξει μία έγκυρη επιλογή πριν υποβάλει τη φόρμα.

```html
<select name="country" required>
    <option value="" selected disabled>Επιλέξτε χώρα</option>
    <option value="gr">Ελλάδα</option>
    <option value="cy">Κύπρος</option>
</select>
```

---

## Το attribute `disabled`

Το `disabled` απενεργοποιεί τη λίστα.

```html
<select name="country" disabled>
    <option>Ελλάδα</option>
    <option>Κύπρος</option>
</select>
```

Ο χρήστης δεν μπορεί να αλλάξει την επιλογή.

---

## Σημαντικές παρατηρήσεις

- Οι επιλογές μιας λίστας δημιουργούνται με το στοιχείο `<option>`.
- Το attribute `name` είναι απαραίτητο όταν το `<select>` βρίσκεται μέσα σε φόρμα και θέλουμε να αποσταλεί η επιλεγμένη τιμή.
- Το `id` χρησιμοποιείται για τη σύνδεση με το αντίστοιχο `<label>`.
- Το `multiple` επιτρέπει πολλαπλές επιλογές.
- Το `required` απαιτεί από τον χρήστη να επιλέξει μία τιμή πριν από την υποβολή της φόρμας.

> **Βέλτιστη πρακτική:** Να χρησιμοποιείτε πάντοτε ένα `<label>` για κάθε `<select>` και να ορίζετε το attribute `name`, ώστε η επιλεγμένη τιμή να αποστέλλεται σωστά κατά την υποβολή της φόρμας.

---

## Browser Support

Το tag `<select>` υποστηρίζεται από όλους τους σύγχρονους browsers.

- Google Chrome
- Mozilla Firefox
- Microsoft Edge
- Safari
- Opera
