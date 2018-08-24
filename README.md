# Nova Charcounter Fields
Text and textarea fields with a character counter for Laravel Nova.

![Image of character counter](docs/screenshot.jpg)

You can use the text and textarea fields with charactercounters on you Nova model. The max number of characters aren't enforced, but just encouraged with warning colors and the counter. (You could enforce the max number of characters with Nova's build in _rules_).

```php
CharcountedText::make('Meta title')
                           ->maxChars(60)
                           ->warningAt(50),

            CharcountedTextarea::make('Meta description')
                               ->maxChars(160)
                               ->warningAt(150),
```

The maxChars and warningAt are both optional. The color of the counter will change when the max or warningAt limit is reached.
![Image of character counter with indication](docs/screenshot-errors.jpg)
