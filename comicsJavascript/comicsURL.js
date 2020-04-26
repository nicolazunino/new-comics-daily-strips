function garfieldStripURL() {
  const todaysDate = new Date();
  const todaysYear = todaysDate.getYear() + 1900;
  const dateForURL = (todaysYear - 2000)
        + (`0${todaysDate.getMonth() + 1}`).slice(-2)
        + (`0${todaysDate.getDate()}`).slice(-2);

  return `http://strips.garfield.com/iimages1200/${todaysYear}/ga${dateForURL}.gif`;
};

function johnhartstudiosSource(comic, shortComic) {
  const monthNames = ['january', 'february', 'march', 'april', 'may', 'june',
    'july', 'august', 'september', 'october', 'november', 'december'];

  const todaysDate = new Date();
  const todaysYear = todaysDate.getYear() + 1900;
  const todaysMonth = monthNames[todaysDate.getMonth()]
  const dateForURL = (`0${todaysDate.getMonth() + 1}`).slice(-2)
        + (`0${todaysDate.getDate()}`).slice(-2)
        + (todaysYear - 2000);

  return `https://johnhartstudios.com/${comic}strips/${todaysYear}/${todaysMonth}/${shortComic}${dateForURL}dc.jpg`;
}

function bcStripURL() {
  return johnhartstudiosSource('bc', 'bc');
};

function wizardOfIdStripURL() {
  return johnhartstudiosSource('wizardofid', 'wiz');
};