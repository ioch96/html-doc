# HTML `lang` Attribute

Το attribute `lang` χρησιμοποιείται για να δηλώσει **τη γλώσσα του περιεχομένου** ενός HTML στοιχείου.

Η δήλωση της σωστής γλώσσας βοηθά:

- Τους browsers να εμφανίζουν σωστά το περιεχόμενο.
- Τις τεχνολογίες υποβοήθησης (screen readers) να προφέρουν σωστά το κείμενο.
- Τις μηχανές αναζήτησης (SEO) να κατανοούν τη γλώσσα της ιστοσελίδας.
- Τα εργαλεία μετάφρασης να εντοπίζουν σωστά τη γλώσσα του περιεχομένου.

## Σύνταξη

```html
<tag lang="language-code">
```

---

## Παράδειγμα

```html
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title of the Document</title>
</head>

<body>

  <p>This is a paragraph.</p>

  <p lang="fr">
    Ceci est un paragraphe.
  </p>

</body>

</html>
```

Στο παραπάνω παράδειγμα:

- Η γλώσσα ολόκληρης της ιστοσελίδας είναι **Αγγλικά** (`lang="en"`).
- Η δεύτερη παράγραφος είναι στα **Γαλλικά**, επομένως χρησιμοποιεί το δικό της `lang="fr"`.

---

## Το `lang` στο στοιχείο `<html>`

Είναι **καλή πρακτική** και συνιστάται να δηλώνετε πάντα το `lang` στο στοιχείο `<html>`.

Παράδειγμα:

```html
<!DOCTYPE html>
<html lang="el">
```

ή

```html
<!DOCTYPE html>
<html lang="en">
```

Με αυτόν τον τρόπο δηλώνετε τη βασική γλώσσα ολόκληρης της ιστοσελίδας.

---

## Χρήση σε συγκεκριμένα στοιχεία

Το `lang` μπορεί να χρησιμοποιηθεί και σε οποιοδήποτε άλλο HTML στοιχείο όταν το περιεχόμενό του είναι σε διαφορετική γλώσσα.

Παράδειγμα:

```html
<p>
  Η λέξη
  <span lang="en">computer</span>
  σημαίνει «υπολογιστής».
</p>
```

ή

```html
<p>
  Η γαλλική φράση
  <span lang="fr">bon appétit</span>
  σημαίνει «καλή όρεξη».
</p>
```

---

## ISO 639-1 Language Codes

Η τιμή του `lang` είναι ένας **κωδικός γλώσσας** σύμφωνα με το πρότυπο **ISO 639-1**.

Μερικοί από τους πιο συνηθισμένους κωδικούς είναι:

|Γλώσσα|ISO Code|
|:-|:-:|
|Abkhazian|ab|
|Afar|aa|
|Afrikaans|af|
|Akan|ak|
|Albanian|sq|
|Amharic|am|
|Arabic|ar|
|Aragonese|an|
|Armenian|hy|
|Assamese|as|
|Avaric|av|
|Avestan|ae|
|Aymara|ay|
|Azerbaijani|az|
|Bambara|bm|
|Bashkir|ba|
|Basque|eu|
|Belarusian|be|
|Bengali (Bangla)|bn|
|Bihari|bh|
|Bislama|bi|
|Bosnian|bs|
|Breton|br|
|Bulgarian|bg|
|Burmese|my|
|Catalan|ca|
|Chamorro|ch|
|Chechen|ce|
|Chichewa, Chewa, Nyanja|ny|
|Chinese|zh|
|Chinese (Simplified)|zh-Hans|
|Chinese (Traditional)|zh-Hant|
|Chuvash|cv|
|Cornish|kw|
|Corsican|co|
|Cree|cr|
|Croatian|hr|
|Czech|cs|
|Danish|da|
|Divehi, Dhivehi, Maldivian|dv|
|Dutch|nl|
|Dzongkha|dz|
|English|en|
|Esperanto|eo|
|Estonian|et|
|Ewe|ee|
|Faroese|fo|
|Fijian|fj|
|Finnish|fi|
|French|fr|
|Fula, Fulah, Pulaar, Pular|ff|
|Galician|gl|
|Gaelic (Scottish)|gd|
|Gaelic (Manx)|gv|
|Georgian|ka|
|German|de|
|Greek|el|
|Greenlandic|kl|
|Guarani|gn|
|Gujarati|gu|
|Haitian Creole|ht|
|Hausa|ha|
|Hebrew|he|
|Herero|hz|
|Hindi|hi|
|Hiri Motu|ho|
|Hungarian|hu|
|Icelandic|is|
|Ido|io|
|Igbo|ig|
|Indonesian|id, in|
|Interlingua|ia|
|Interlingue|ie|
|Inuktitut|iu|
|Inupiak|ik|
|Irish|ga|
|Italian|it|
|Japanese|ja|
|Javanese|jv|
|Kalaallisut, Greenlandic|kl|
|Kannada|kn|
|Kanuri|kr|
|Kashmiri|ks|
|Kazakh|kk|
|Khmer|km|
|Kikuyu|ki|
|Kinyarwanda (Rwanda)|rw|
|Kirundi|rn|
|Kyrgyz|ky|
|Komi|kv|
|Kongo|kg|
|Korean|ko|
|Kurdish|ku|
|Kwanyama|kj|
|Lao|lo|
|Latin|la|
|Latvian (Lettish)|lv|
|Limburgish (Limburger)|li|
|Lingala|ln|
|Lithuanian|lt|
|Luga-Katanga|lu|
|Luganda, Ganda|lg|
|Luxembourgish|lb|
|Manx|gv|
|Macedonian|mk|
|Malagasy|mg|
|Malay|ms|
|Malayalam|ml|
|Maltese|mt|
|Maori|mi|
|Marathi|mr|
|Marshallese|mh|
|Moldavian|mo|
|Mongolian|mn|
|Nauru|na|
|Navajo|nv|
|Ndonga|ng|
|Northern Ndebele|nd|
|Nepali|ne|
|Norwegian|no|
|Norwegian bokmål|nb|
|Norwegian nynorsk|nn|
|Nuosu|ii|
|Occitan|oc|
|Ojibwe|oj|
|Old Church Slavonic, Old Bulgarian|cu|
|Oriya|or|
|Oromo (Afaan Oromo)|om|
|Ossetian|os|
|Pāli|pi|
|Pashto, Pushto|ps|
|Persian (Farsi)|fa|
|Polish|pl|
|Portuguese|pt|
|Punjabi (Eastern)|pa|
|Quechua|qu|
|Romansh|rm|
|Romanian|ro|
|Russian|ru|
|Sami|se|
|Samoan|sm|
|Sango|sg|
|Sanskrit|sa|
|Serbian|sr|
|Serbo-Croatian|sh|
|Sesotho|st|
|Setswana|tn|
|Shona|sn|
|Sichuan Yi|ii|
|Sindhi|sd|
|Sinhalese|si|
|Siswati|ss|
|Slovak|sk|
|Slovenian|sl|
|Somali|so|
|Southern Ndebele|nr|
|Spanish|es|
|Sundanese|su|
|Swahili (Kiswahili)|sw|
|Swati|ss|
|Swedish|sv|
|Tagalog|tl|
|Tahitian|ty|
|Tajik|tg|
|Tamil|ta|
|Tatar|tt|
|Telugu|te|
|Thai|th|
|Tibetan|bo|
|Tigrinya|ti|
|Tonga|to|
|Tsonga|ts|
|Turkish|tr|
|Turkmen|tk|
|Twi|tw|
|Uyghur|ug|
|Ukrainian|uk|
|Urdu|ur|
|Uzbek|uz|
|Venda|ve|
|Vietnamese|vi|
|Volapük|vo|
|Wallon|wa|
|Welsh|cy|
|Wolof|wo|
|Western Frisian|fy|
|Xhosa|xh|
|Yiddish|yi, ji|
|Yoruba|yo|
|Zhuang, Chuang|za|
|Zulu|zu|

---

## Γιατί είναι σημαντικό

Χωρίς το `lang`:

```html
<html>
```

ο browser και οι screen readers δεν γνωρίζουν σε ποια γλώσσα είναι γραμμένη η σελίδα.

Με το `lang`:

```html
<html lang="el">
```

γνωρίζουν ότι το περιεχόμενο είναι στα Ελληνικά και μπορούν να το επεξεργαστούν σωστά.

---

## Βέλτιστες Πρακτικές (Best Practices)

- Δηλώνετε πάντα το `lang` στο στοιχείο `<html>`.
- Αν κάποιο τμήμα της σελίδας είναι γραμμένο σε διαφορετική γλώσσα, χρησιμοποιήστε το `lang` μόνο σε εκείνο το στοιχείο.
- Χρησιμοποιείτε έγκυρους κωδικούς γλωσσών σύμφωνα με το πρότυπο **ISO 639-1**.

> **Σημείωση:** Το `lang` είναι ένα από τα σημαντικότερα global attributes της HTML. Παρόλο που δεν επηρεάζει την εμφάνιση της ιστοσελίδας, βελτιώνει σημαντικά την προσβασιμότητα (Accessibility), το SEO και τη σωστή ερμηνεία του περιεχομένου από browsers, screen readers και μηχανές αναζήτησης.
