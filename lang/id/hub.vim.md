Notes from implementing activisthub translation files, in https://github.com/veganhacktivists/activisthub/pull/758 :

Visual studio regex to find text tagged for translation, but not in a translation file:

    __\(['"](?!(hub|3movies)\.)

vim helper for replacing translation-tagged text - this should be a single line if you're in Unix; in Windows, good luck:

    :set paste:let @g=@.:let @h=@"gt0GO    'g' => "h",0:s/hub\.//:w

usage:
* copy the above macro to the register `@q`: move your cursor over the first `:` in the vim macro above, and press `"qy$`
* > vim resources/lang/en/hub.php
* `:tabnew`
* open a file with some translatable text. For every __():
  * delete the visible text (into the default register; no quotes)
  * insert the key where the old text was, in just one insert (this adds the typed text to the . register; no quotes)
  * press `@q`
