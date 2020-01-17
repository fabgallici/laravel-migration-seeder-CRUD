#Laravel Migration and Seeder

Utilizzando come esempio il codice scritto da Boolean, creare una nuova entità in tutte le sue parti.

L'entità di cui parliamo sarà: _fumetti_. Ogni fumetto avrà le seguenti proprietà:

Titolo, Autore, Anno, Recensione e Voto, oltre ovviamente a timestamp (created_at e updated_at aggiunti in automatico da laravel con la funzione timestamp) e l'id.

-   Creare una migration che crei la tabella nel nostro db
-   Creare un model in cui definiremo tutte le proprietà come fillable, attraverso la variabile procted, come da esempio.
-   Creiamo un seeder che popoli la nostra tabella, attraverso l'utilizzo di faker, che ci aiuterà a popolarla randomicamente. (https://github.com/fzaninotto/Faker per tutti i metodi utilizzabili)
-   Creare una rotta, un controller e una view sulla falsa riga di quelle già presenti per movie e completare l'esercizio.

_Importante: in questa fase in cui ci sono in gioco tanti file, tante nuove nozioni è importante guardare più volte video e esempi di codice, ci vorrà un pochino di tempo (ma arriverà) per essere completamente padroni di tutto il giro. E' assolutamente normale e sano guardare il codice di esempio, ma è altrettano sano e indispensabile chiedere aiuto se qualsiasi passaggio non risulta chiaro._
