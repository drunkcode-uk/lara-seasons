@inject('seasons', 'Drunkcode\LaraSeasons\LaraSeasons')

@includeWhen($seasons->isSpring(), 'lara-seasons::partials.spring')
@includeWhen($seasons->isSummer(), 'lara-seasons::partials.summer')
@includeWhen($seasons->isAutumn(), 'lara-seasons::partials.autumn')
@includeWhen($seasons->isWinter(), 'lara-seasons::partials.winter')