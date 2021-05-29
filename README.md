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
Arabic, Basque, Catalan, Danish, Dutch, English, Finnish, French, German, Hungarian, Italian, Norwegian, Portuguese, Romanian, Russian, Spanish, Swedish, Turkish, and Ukrainian.

### Notes
Language files are set according to [ISO 639-2][standard].

### Sources
Language   |  Source
---------- | -----------------
Arabic     | https://github.com/Alir3z4/stop-words/blob/master/arabic.txt
Basque     | http://www.ranks.nl/stopwords/basque
Bulgarian  | https://github.com/Alir3z4/stop-words/blob/master/bulgarian.txt
Catalan    | http://www.ranks.nl/stopwords/catalan http://latel.upf.edu/morgana/altres/pub/ca_stop.htm
Czech      | https://github.com/Alir3z4/stop-words/blob/master/czech.txt
Danish     | https://github.com/Alir3z4/stop-words/blob/master/danish.txt
Dutch      | https://github.com/Alir3z4/stop-words/blob/master/dutch.txt
English    | http://www.ranks.nl/stopwords
Finnish    | https://github.com/Alir3z4/stop-words/blob/master/finnish.txt
French     | http://www.ranks.nl/stopwords/french https://github.com/Alir3z4/stop-words/blob/master/french.txt
German     | https://github.com/Alir3z4/stop-words/blob/master/german.txt
Gujarati   | https://github.com/Alir3z4/stop-words/blob/master/gujarati.txt
Hebrew     | https://github.com/Alir3z4/stop-words/blob/master/hebrew.txt
Hindi      | https://github.com/Alir3z4/stop-words/blob/master/hindi.txt
Hungarian  | https://github.com/Alir3z4/stop-words/blob/master/hungarian.txt
Indonesian | https://github.com/Alir3z4/stop-words/blob/master/indonesian.txt
Italian    | https://raw.githubusercontent.com/Alir3z4/stop-words/master/italian.txt
Malay      | https://github.com/Alir3z4/stop-words/blob/master/malaysian.txt
Norwegian  | https://raw.githubusercontent.com/Alir3z4/stop-words/master/norwegian.txt
Portuguese | https://raw.githubusercontent.com/Alir3z4/stop-words/master/portuguese.txt
Romanian   | https://raw.githubusercontent.com/Alir3z4/stop-words/master/romanian.txt
Russian    | https://raw.githubusercontent.com/Alir3z4/stop-words/master/russian.txt
Slovak     | https://github.com/Alir3z4/stop-words/blob/master/slovak.txt
Spanish    | http://www.ranks.nl/stopwords/spanish http://snowball.tartarus.org/algorithms/spanish/stop.txt https://github.com/Alir3z4/stop-words/blob/master/spanish.txt
Swedish    | https://raw.githubusercontent.com/Alir3z4/stop-words/master/swedish.txt
Turkish    | https://raw.githubusercontent.com/Alir3z4/stop-words/master/turkish.txt
Ukrainian  | https://raw.githubusercontent.com/Alir3z4/stop-words/master/ukrainian.txt

## License
Contents of this repository are available under [Attribution 4.0 International (CC BY 4.0)][license].

[standard]: https://www.loc.gov/standards/iso639-2/php/code_list.php
[license]: http://creativecommons.org/licenses/by/4.0/