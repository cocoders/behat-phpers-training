#language: pl
Funkcja: Dodawanie nowego taska

    @critical
  Scenariusz: Dodawanie nowego zadania do pustej listy
    Mając pustą listę tasków
    Gdy dodam nowego taska o treści "Podlać trawnik"
    Wtedy na liście powinien być 1 task
