@inject('seasons', 'Drunkcode\LaraSeasons\LaraSeasons')

@includeWhen($seasons->isWinter(), 'lara-seasons::partials.winter')