@inject('seasons', 'Drunkcode\LaraSeasons\LaraSeasons')

@includeWhen($seasons->isSummer(), 'lara-seasons::partials.summer')
@includeWhen($seasons->isWinter(), 'lara-seasons::partials.winter')