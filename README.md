# StopWords

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/261207a0691141f69d91c56465c6dd32)](https://www.codacy.com/gh/juanantoniodelgado/StopWords/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=juanantoniodelgado/StopWords&amp;utm_campaign=Badge_Grade)

PHP StopWords removal library with support for multiple languages.

## Installation

    composer require juanantoniodelgado/stopwords

## Usage

    use StopWords/StopWords;
    
    $stopwords = new StopWords('en');
    $stopwords->clean('your text to clean');

## Supported languages
Arabic, Armenian, Basque, Bulgarian, Catalan, Cebuano, Chinese, Czech, Danish, Dutch, English, Estonian, Finnish, French, German, Greek, Gujarati, Hebrew, Hindi, Hungarian, Indonesian, Italian, Japanese, Latvian, Malay, Norwegian, Persian, Portuguese, Romanian, Russian, Slovak, Spanish, Swedish, Thai, Turkish, Ukrainian, and Vietnamese.

### Notes
Language files are set according to [ISO 639-2][standard].

### Sources
Language   |  Source
---------- | -----------------
Arabic     | https://github.com/Alir3z4/stop-words/blob/master/arabic.txt
Armenian   | https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxrZXZpbmJvdWdlfGd4OmM1NzgyOTk3NDA4NGJhZQ
Basque     | http://www.ranks.nl/stopwords/basque
Bulgarian  | https://github.com/Alir3z4/stop-words/blob/master/bulgarian.txt
Catalan    | http://www.ranks.nl/stopwords/catalan http://latel.upf.edu/morgana/altres/pub/ca_stop.htm
Cebuano    | https://github.com/digitalheir/cebuano-dictionary-js/blob/master/stop-words/stop-words.ts
Chinese    | https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxrZXZpbmJvdWdlfGd4OjRmZjlhYTNkNWZjMTc3NWI
Czech      | https://github.com/Alir3z4/stop-words/blob/master/czech.txt
Danish     | https://github.com/Alir3z4/stop-words/blob/master/danish.txt
Dutch      | https://github.com/Alir3z4/stop-words/blob/master/dutch.txt
English    | http://www.ranks.nl/stopwords
Estonian   | https://github.com/stopwords-iso/stopwords-et
Finnish    | https://github.com/Alir3z4/stop-words/blob/master/finnish.txt
French     | http://www.ranks.nl/stopwords/french https://github.com/Alir3z4/stop-words/blob/master/french.txt
German     | https://github.com/Alir3z4/stop-words/blob/master/german.txt
Greek      | https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxrZXZpbmJvdWdlfGd4OjI5MzI4MDRjMzk3M2Y2OWU
Gujarati   | https://github.com/Alir3z4/stop-words/blob/master/gujarati.txt
Hebrew     | https://github.com/Alir3z4/stop-words/blob/master/hebrew.txt
Hindi      | https://github.com/Alir3z4/stop-words/blob/master/hindi.txt
Hungarian  | https://github.com/Alir3z4/stop-words/blob/master/hungarian.txt
Indonesian | https://github.com/Alir3z4/stop-words/blob/master/indonesian.txt
Italian    | https://raw.githubusercontent.com/Alir3z4/stop-words/master/italian.txt
Japanese   | https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxrZXZpbmJvdWdlfGd4OjdhNWQxZGQwOTE3ZjVkY2M
Latvian    | https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxrZXZpbmJvdWdlfGd4OjNiNGI5YTVmYjkxOWEwYmQ
Malay      | https://github.com/Alir3z4/stop-words/blob/master/malaysian.txt
Norwegian  | https://raw.githubusercontent.com/Alir3z4/stop-words/master/norwegian.txt
Persian    | https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxrZXZpbmJvdWdlfGd4OjY0MWMxMDBjZTc2Y2ZmZjk
Portuguese | https://raw.githubusercontent.com/Alir3z4/stop-words/master/portuguese.txt
Romanian   | https://raw.githubusercontent.com/Alir3z4/stop-words/master/romanian.txt
Russian    | https://raw.githubusercontent.com/Alir3z4/stop-words/master/russian.txt
Slovak     | https://github.com/Alir3z4/stop-words/blob/master/slovak.txt
Spanish    | http://www.ranks.nl/stopwords/spanish http://snowball.tartarus.org/algorithms/spanish/stop.txt https://github.com/Alir3z4/stop-words/blob/master/spanish.txt
Swedish    | https://raw.githubusercontent.com/Alir3z4/stop-words/master/swedish.txt
Tagalog    | https://github.com/stopwords-iso/stopwords-tl
Thai       | https://github.com/stopwords-iso/stopwords-th
Turkish    | https://raw.githubusercontent.com/Alir3z4/stop-words/master/turkish.txt
Ukrainian  | https://raw.githubusercontent.com/Alir3z4/stop-words/master/ukrainian.txt
Vietnamese | https://github.com/Alir3z4/stop-words/blob/master/vietnamese.txt

## License
Contents of this repository are available under [Attribution 4.0 International (CC BY 4.0)][license].

[standard]: https://www.loc.gov/standards/iso639-2/php/code_list.php
[license]: http://creativecommons.org/licenses/by/4.0/