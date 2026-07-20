# HTML `<video>` Tag

Το tag `<video>` χρησιμοποιείται για την **ενσωμάτωση βίντεο** σε μια ιστοσελίδα HTML, όπως ταινίες, εκπαιδευτικά βίντεο ή άλλα πολυμέσα.

Συνήθως, το `<video>` περιέχει ένα ή περισσότερα στοιχεία `<source>`, τα οποία καθορίζουν τις διαθέσιμες μορφές του βίντεο. Ο browser επιλέγει αυτόματα την **πρώτη μορφή που υποστηρίζει**.

## Υποστηριζόμενες μορφές βίντεο

Οι βασικές μορφές βίντεο που υποστηρίζει η HTML είναι:

- **MP4** (`.mp4`) *(η πιο διαδεδομένη)*
- **WebM** (`.webm`)
- **Ogg** (`.ogv`)

|Browser|MP4|WebM|Ogg|
|:-------:|:---:|:-----:|:---:|
|Edge|✅|✅|✅|
|Chrome|✅|✅|✅|
|Firefox|✅|✅|✅|
|Safari|✅|✅|❌|
|Opera|✅|✅|✅|

> **Σημείωση:** Η μορφή **MP4** προσφέρει τη μεγαλύτερη συμβατότητα και είναι η προτεινόμενη επιλογή για τις περισσότερες ιστοσελίδες.

## Σύνταξη

Η **προτεινόμενη σύνταξη** χρησιμοποιεί το στοιχείο `<source>`, καθώς επιτρέπει την υποστήριξη πολλαπλών μορφών βίντεο.

```html
<video controls width="640" height="360">
  <source src="video.mp4" type="video/mp4">
  Ο browser σας δεν υποστηρίζει το στοιχείο video.
</video>
```

Εναλλακτικά, όταν χρησιμοποιείται **ένα μόνο αρχείο βίντεο**, μπορεί να οριστεί απευθείας το attribute `src`.

```html
<video controls width="640" height="360" src="video.mp4">
  Ο browser σας δεν υποστηρίζει το στοιχείο video.
</video>
```

> **Σημείωση:** Αν και οι δύο συντάξεις είναι έγκυρες, η χρήση του στοιχείου `<source>` θεωρείται καλύτερη πρακτική, καθώς επιτρέπει την εύκολη προσθήκη πολλαπλών μορφών βίντεο και προσφέρει μεγαλύτερη συμβατότητα μεταξύ των browsers.

Το κείμενο που βρίσκεται ανάμεσα στα tags `<video>` και `</video>` εμφανίζεται μόνο σε browsers που **δεν υποστηρίζουν** το στοιχείο `<video>`.

## Attributes

|Attribute|Τιμή|Περιγραφή|
|:---------:|:----:|-----------|
|`src`|URL|Καθορίζει τη διαδρομή (URL) του αρχείου βίντεο.|
|`width`|pixels|Καθορίζει το πλάτος του video player.|
|`height`|pixels|Καθορίζει το ύψος του video player.|
|`muted`|muted|Specifies that the audio output of the video should be muted|
|`loop`|loop|Specifies that the video will start over again, every time it is finished|
|`controls`|controls|Specifies that video controls should be displayed (such as a play/pause button etc).|
|`autoplay`|autoplay|Specifies that the video will start playing as soon as it is ready|

## Παράδειγμα

```html
<video controls width="640" height="360">
  <source src="movie.mp4" type="video/mp4">
  Ο browser σας δεν υποστηρίζει το στοιχείο video.
</video>
```

## Χρήση πολλαπλών μορφών

Μπορείτε να προσθέσετε περισσότερα από ένα στοιχεία `<source>`.

```html
<video controls width="640">
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.webm" type="video/webm">
  <source src="movie.ogv" type="video/ogg">
  Ο browser σας δεν υποστηρίζει το στοιχείο video.
</video>
```

Ο browser θα χρησιμοποιήσει την **πρώτη μορφή** που μπορεί να αναπαράγει.

## Χρήσιμα Attributes

### `controls`

Εμφανίζει τα χειριστήρια του video player.

```html
<video controls>
```

---

### `autoplay`

Ξεκινά αυτόματα την αναπαραγωγή.

```html
<video autoplay>
```

> **Σημείωση:** Οι περισσότεροι σύγχρονοι browsers επιτρέπουν το `autoplay` μόνο όταν το βίντεο είναι χωρίς ήχο (`muted`).

---

### `muted`

Ξεκινά το βίντεο χωρίς ήχο.

```html
<video muted>
```

---

### `loop`

Επαναλαμβάνει συνεχώς το βίντεο.

```html
<video loop>
```

---

## Βέλτιστες Πρακτικές (Best Practices)

- Προτιμήστε τη μορφή **MP4** για μέγιστη συμβατότητα.
- Χρησιμοποιείτε πάντα το attribute `controls`, ώστε ο χρήστης να μπορεί να ελέγχει την αναπαραγωγή.
- Ορίστε `width` και `height` για να αποφεύγονται μετακινήσεις του περιεχομένου κατά τη φόρτωση.
- Αν χρησιμοποιείτε `autoplay`, συνδυάστε το συνήθως με `muted`.

> **Σημείωση:** Το `<video>` είναι το σύγχρονο HTML στοιχείο για την αναπαραγωγή βίντεο χωρίς τη χρήση πρόσθετων τεχνολογιών (plugins). Χρησιμοποιείται ευρέως σε σύγχρονες ιστοσελίδες και εφαρμογές React για την προβολή πολυμεσικού περιεχομένου.
